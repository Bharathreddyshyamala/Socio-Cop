<?php
include("session.php");
session_destroy();
header("Location:Home.php");
?>