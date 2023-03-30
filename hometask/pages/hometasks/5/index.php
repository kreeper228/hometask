<?php
session_start();
if (isset($_SESSION['name'])) {
    include_once 'html/upload.php';
} else {
    include_once 'html/auth.php';
}
