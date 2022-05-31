<?php
session_start();

unset($_SESSION['admin']);

header('Location: home_page.php');