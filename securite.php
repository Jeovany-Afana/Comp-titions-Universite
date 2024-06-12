<?php
session_start();

if(!$_SESSION['equipeA'] && !$_SESSION['equipeB'])
{
    header('Location: index.php');
}

?>