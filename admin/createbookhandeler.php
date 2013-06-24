<?php
	session_start();
	if($_SESSION['isloggedin']!='loggedin'){
		unset($_SESSION);
		header('location:index.php');
		die;
	}
	require_once('database/db.php');
	extract($_POST);
	$errorString		=	'';
	$errorCounter		=	0;
	if(!isset($bookname)){
		$errorCounter++;
		$errorString		.='Book name is empty';
		?>
		<?php
	}
	if(!isset($author)){
		$errorCounter++;
		$errorString		.='Author name is empty';
	}
	if($errorCounter>0){
		?>
			<div class="error_msg">
				<?php echo $errorString; ?>
			</div>
		<?php
		die;
	}
	$query			=	"insert into comm_book(book_name,book_author) values ('".mysql_real_escape_string($bookname)."','".mysql_real_escape_string($author)."')";

	$result			=	mysql_query($query);
	if($result){
		header('location:booklistforcsv.php');
	}
?>