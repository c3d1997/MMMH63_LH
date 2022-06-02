<?php
session_start();

unset($_SESSION['member']);

header('Location: home_page.php');