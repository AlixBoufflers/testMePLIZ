<?php
$id = $_POST['id'];
mysql_query("SELECT user FROM users WHERE id = " . $id);
