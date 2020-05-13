<?php
session_start();
session_unregister['loged'];
session_destroy();
header('Location:login.php');
?>