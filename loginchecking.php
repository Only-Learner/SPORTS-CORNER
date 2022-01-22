<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    session_destroy();
    header("Location: login.php?q=1");
    die;
}
