<?php include("topbar.php"); ?>
<div class="main">
	<?php

include("sidebar.php");

?>
	<div class="container-fluid">
		<div class="content">
			<div class="row-fluid no-margin">
				<div class="span12">
					<div class="box">
						<div class="box-content">				
							<?php
							// create form for creating new book.
							?>
							<div class="control-group">
								<form method="POST" action="createbookhandeler.php" name="createbookform" class="form-horizontal">
									<fieldset>
										<legend>Create New Book</legend>
											<div class="control-group">
												<label for="basicround" class="control-label">Enter the name of Book</label>
												<div class="controls">
													<input required type="text" name="bookname" id="bookname">
												</div>
											</div>
											<div class="control-group">
												<label for="basicround" required class="control-label">Author's Name</label>
												<div class="controls">
													<input type="text" name="author" id="author">
												</div>
											</div>
										<div class="submit-btn" style="padding-left: 200px;">
											<input type="submit" class='btn btn-danger' value="Create Now">
										</div>											
									</fieldset>	
								</form>
							</div>
						</div>					
					</div>
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