<?php

$db_name = "contato";
$db_host = "lbl-db-azureserver.mysql.database.azure.com";
$db_user = "administrador";
$db_password = "admadm.001";

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
