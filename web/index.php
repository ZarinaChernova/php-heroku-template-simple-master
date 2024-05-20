<?php
session_start();

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "Привет, " . $_SESSION['username'] . "! <br>";
    echo "<a href='exit.php'>Выйти</a>";
} else {
    include 'form.php';
}
