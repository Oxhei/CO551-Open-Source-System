<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['size'] = $_POST['size'];
}

header("Location: selectcolour.php");
exit;
?>

