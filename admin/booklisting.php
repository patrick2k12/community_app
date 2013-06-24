<?php include("topbar.php"); ?>
<div class="main">
	<?php

include("sidebar.php");
include("database/db.php");
include("database/admin_functions.php");
$bookArr		=	getBookListing();
?>

	<div class="container-fluid">
		<div class="content">
			<div class="row-fluid no-margin">
				<div class="span12">
					<fieldset>
						<legend>Select Book</legend>					
							<ul class="quicktasks">
								<?php foreach($bookArr as $val){ ?>
								<li>
									<a href="bookcomments.php?book_id=<?php echo $val['id'];?>">
										<img src="img/icons/essen/32/address_book.png" alt="">
										<span><?php echo $val['book_name'];?></span>
									</a>
								</li>
								<?php 
								}
								?>
							</ul>
					</fieldset>		
				</div>
			</div>
		</div>	
	</div>
</div>	
<script src="js/jquery.js"></script>
<script src="js/less.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.peity.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.color.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/custom.js"></script>
</body>
</html>