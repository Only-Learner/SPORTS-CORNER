<?php
session_start();
if (isset($_SESSION['loggedIn'])) {
    unset($_SESSION['loggedIn']);
    session_destroy();
}

header("Location: login.php");
