<?php
session_start();

if (isset($_SESSION['CURRENT_USER'])) {
    session_destroy();
}

header("Location:/");