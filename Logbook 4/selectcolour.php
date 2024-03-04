<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['colour'] = $_POST['colour'];
}

header("Location: confirmation.php");
exit;
?>
