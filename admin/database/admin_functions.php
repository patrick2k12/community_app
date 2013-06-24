<?php
include("db.php");
function getBookListing(){
	$query			=	"select * from comm_book";
	$result			=	mysql_query($query);
	$returnArray	=	array();
	while($arr	=	mysql_fetch_assoc($result)){
		$returnArray[]		=	$arr;
	}
	return $returnArray;
}
function getBookInfo($book_id){
	$query		=	"select * from comm_book where id=$book_id";
	$result		=	mysql_query($query);
	$returnArray	=	mysql_fetch_assoc($result);
	return $returnArray;
}
?>