<?php

//call func in util.php
require("util.php");



/* 1일차 함수 모듈화 X */
/*
//Set MySQL of dothome

					//호스트주소, id, pw
$conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
mysqli_select_db($conn, 'shout2517');//데이터베이스 명
*/
/* 2일차 함수 모듈화 */
$conn = db_init();

//01 insert query
//$sql = "insert into notice(title, content) values('titlesample2', 'descriptsample2')";

//02 select query
$sql = "select *from notice";

if($conn){
	$result = mysqli_query($conn, $sql);

	//01 insert dml query
	//var_dump($result);
	
	//02 select query
	// select 조회 시
	while($row = mysqli_fetch_array($result)) {
		echo $row['title']."<br>";
	}

}
?>