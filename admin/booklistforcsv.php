<?php include("topbar.php"); ?>
<div class="main">
	<?php

include("sidebar.php");
include("database/db.php");

?>

	<div class="container-fluid">
		<div class="content">
			<div class="row-fluid no-margin">
				<div class="span12">
					<fieldset>
						<legend>Select Book for uploading CSV</legend>					
							<ul class="quicktasks">
								<li>
									<a href="uploadcsv.php?bookid=1">
										<img src="img/icons/essen/32/address_book.png" alt="">
										<span>Book 1</span>
									</a>
								</li>
								<li>
									<a href="uploadcsv.php?bookid=2">
										<img src="img/icons/essen/32/address_book.png" alt="">
										<span>Book 2</span>
									</a>
								</li>
								<li>
									<a href="uploadcsv.php?bookid=2">
										<img src="img/icons/essen/32/address_book.png" alt="">
										<span>Book 3</span>
									</a>
								</li>
								<li>
									<a href="uploadcsv.php?bookid=2">
										<img src="img/icons/essen/32/address_book.png" alt="">
										<span>Book 4</span>
									</a>
								</li>
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