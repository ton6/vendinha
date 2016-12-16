<?php
session_start();
if (!$_SESSION['logado'])
    {
    session_destroy();
    header('Location:index.php'); 
    }

?>
