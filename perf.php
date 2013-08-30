<?php

require_once('includes/bootstrap.php');
echo render('perf.twig', array(
	'max_i' => 10,
	'max_j' => 5,
	'max_k' => 5,
	'max_l' => 1,
	'iter' => 10000
));
