<?php
$ratio = $_POST['ratio'];
$db = new SQLite3('mydatabase.db');
$db->exec("INSERT INTO mytable (ratio) VALUES ($ratio)");
$db->close();
?>