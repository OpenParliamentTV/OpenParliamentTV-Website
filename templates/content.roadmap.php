<?php include_once('head.php'); ?>
<body>
	<?php include_once('header.php'); ?>
	<main class="container" style="margin-top: 60px;">
		<div class="row m-0" style="position: relative; z-index: 1;">
			<div class="container text-center" style=" margin-bottom: 30px;">
				<h1 style="font-size: 30px; margin-bottom: 40px;">Roadmap</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="alert alert-warning text-center"><?php echo L::messageWorkInProgress; ?></div>
			</div>
		</div>
	</main>
	<?php include_once('footer.php'); ?>
	<script type="text/javascript" src="client/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="client/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="client/js/index.js"></script>
</body>