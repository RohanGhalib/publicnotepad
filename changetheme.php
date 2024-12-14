<?php
if(isset($_GET['theme'])){
    $theme = $_GET['theme'];
    session_start();
    $_SESSION['theme'] = $theme;
    header("location: settings.php");
}