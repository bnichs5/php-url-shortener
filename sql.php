<?php
$conn=new PDO("sqlite:database.db");
$conn->exec("
	CREATE TABLE IF NOT EXISTS links(
		id varchar(10) NOT NULL,
		url varchar(1000) NOT NULL,
		delete_code varchar(20) NOT NULL
	);
");
