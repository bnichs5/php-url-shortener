<?php
include "sql.php";

if (!isset($_GET['id'])) {
	die("Invalid paramter");
}

$stat = $conn->prepare("SELECT url FROm links WHERE id = :id");
$stat->execute(array(
	'id' => $_GET['id']
));
$result = $stat->fetch(PDO::FETCH_ASSOC);
if (!$result) {
	echo 'The id doesn\'t exists.';
	header("Refresh: 3; url=/", true, 303);
} else {
	header("Location: " . $result['url']);
}
