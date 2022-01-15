<?php

function getConnection(array $data)
{
	$database = mysqli_init();
	$connectionResult = mysqli_real_connect(
		$database,
		$data['db']['host'],
		$data['db']['username'],
		$data['db']['password'],
		$data['db']['dbName']
	);

	if (!$connectionResult)
	{
		$error = mysqli_connect_errno() . ": " . mysqli_connect_error();
		trigger_error($error, E_USER_ERROR);
	}

	$result = mysqli_set_charset($database, 'utf8');
	if (!$result)
	{
		trigger_error(mysqli_error($database), E_USER_ERROR);
	}

	return $database;
}

