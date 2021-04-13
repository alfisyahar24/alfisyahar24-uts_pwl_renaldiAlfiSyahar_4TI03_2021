<?php
session_start();
unset($_SESSION['MEMBER']);
header('Location:http://localhost:8012/uts/index.php?hal=home');