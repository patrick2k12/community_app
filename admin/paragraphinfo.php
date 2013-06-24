<?php include("topbar.php"); ?>
<div class="main">
	<?php
include("sidebar.php");
include("database/db.php");
include("database/admin_functions.php");
$paraId		=	$_GET['p_id'];
?>

	<div class="container-fluid">
		<div class="content">
			<div class="row-fluid no-margin">
				<div class="span12">
					<fieldset>
						<legend>Paragraph 1</legend>					
					
					</fieldset>	
					<div class="box">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque vestibulum consequat. Praesent at urna eget augue feugiat volutpat eget eget ligula. Mauris eros quam, fringilla vitae lacinia quis, viverra sed ligula. Vestibulum non odio ante. Praesent sit amet magna tincidunt, euismod sem vel, lobortis dolor. Vestibulum placerat id purus vel varius. Pellentesque purus augue, tincidunt vitae varius nec, placerat vel lectus. Suspendisse congue est in convallis tempus. Pellentesque ipsum neque, condimentum vel nisl non, congue lacinia lectus. Vestibulum nec volutpat neque. Phasellus tincidunt, massa at eleifend luctus, neque sapien rhoncus mauris, nec fermentum magna dui ac massa.
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