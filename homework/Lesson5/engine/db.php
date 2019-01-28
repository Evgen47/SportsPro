﻿<?php

function showGallery($id) {
	$result = getAssocResult("SELECT * FROM `gallery` WHERE `id` = $id");

	return isset($result[0]) ? $result[0] : null;
}

function getGallery () {
	return getAssocResult("SELECT * FROM `gallery`");
}

function createConnection () {
    $db = mysqli_connect(HOST, USER, PASS, DB);
	mysqli_query ($db, "SET CHARACTER SET 'utf8'");
	return $db;
}

function execQuery($sql) {
    $db = createConnection();

	$result = mysqli_query($db, $sql);

    mysqli_close($db);
    return $result;
}

function getAssocResult($sql) {
    $db = createConnection();

	$result = mysqli_query($db, $sql);

	$array_result = [];
	while($row = mysqli_fetch_assoc($result)){
		$array_result[] = $row;
	}
    mysqli_close($db);
	return $array_result;
}

