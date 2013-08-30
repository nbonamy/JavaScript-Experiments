<?php

require_once('includes/bootstrap.php');

$text1 = 'Textarea #1';
$text2 = 'Textarea #2';

if (isset($_POST['editor1'])) {
	$text1 = $_POST['editor1'];
}

if (isset($_POST['editor2'])) {
	$text2 = $_POST['editor2'];
}

echo render('edit.twig', array(
	'text1' => $text1,
	'text2' => $text2
));
