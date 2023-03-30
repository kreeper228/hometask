<!DOCTYPE html>
<html lang="ua">
<head>
    <title>User Form</title>
</head>
<body>
<form method="POST">
    <label>Ім`я:</label>
    <label>
        <input type="text" name="name">
    </label><br><br>
    <label>День народження:</label>
    <label>
        <input type="date" name="dob">
    </label><br><br>
    <input type="submit" value="Додати користувача">
</form>
<?php
$calculateAge = fn($dob) => $dob ? (new DateTime($dob))->diff(new DateTime())->y : null;

$data = json_decode(file_get_contents('userdata.json'), true);

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$name || !$dob) {
        echo "Будь ласка введіть ім`я та дату народження";
        exit;
    }

    $userExists = false;
    foreach ($data as $user) {
        if ($user['name'] === $name) {
            $userExists = true;
            $age = $calculateAge($user['dob']);
            $nextBirthday = (new DateTime($user['dob']))->setDate((new DateTime())->format('Y'),
                (new DateTime($user['dob']))->format('m'),
                (new DateTime($user['dob']))->format('d'));
            if ($nextBirthday < (new DateTime())) {
                $nextBirthday->modify('+1 year');
            }
            $daysToBirthday = $nextBirthday->diff(new DateTime())->days;

            echo "Такий користувач вже є. Вік: $age. Днів до дня народження: $daysToBirthday";
            break;
        }
    }
    if (!$userExists) {
        $newUser = [
            'name' => $name,
            'dob' => $dob
        ];
        $data[] = $newUser;
        file_put_contents('userdata.json', json_encode($data));
        echo "Користувача додано";
    }
    exit;
}

$dataFiltered = array_filter($data, function($user) use ($calculateAge) {
    return $calculateAge($user['dob']) < 30;
});
print_r($dataFiltered)
?>
</body>
</html>
