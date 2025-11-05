<?php
  session_start();
  if (isset($_SESSION["nama"])):
    $sesname = $_SESSION["nama"];
  endif; 
  $sesname = $_SESSION["nama"];
  $sesemail = $_SESSION["email"];
  $sespesan = $_SESSION["pesan"];
  echo "$sesname $sesemail $sespesan";
?>