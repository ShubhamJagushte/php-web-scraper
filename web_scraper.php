<?php
$name = $_POST["url"];
echo $name;
$crawler = file_get_contents($name);
echo $crawler;

?>
