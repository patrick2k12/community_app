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
										<legend>Upload CSV</legend>
											<div class="control-group">
												<label for="file2" class="control-label">Select csv</label>
												<div class="controls">
													<input type="file" name="file" id="file2" class='uniform'>
												</div>
											</div>
										<div class="submit-btn" style="padding-left: 200px;">
											<input type="submit" class='btn btn-danger' value="Upload Now">
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