<?php include_once('head.php'); ?>
<body>
	<?php include_once('header.php'); ?>
	<main class="container" style="margin-top: 60px;">
		<div class="row m-0" style="position: relative; z-index: 1;">
			<div class="container" style="margin-bottom: 30px;">
				<div class="row">
					<div class="col-12">
						<h1 class="mb-4"><span class="icon-attention me-2" style="top: -1px;position: relative;"></span> 404 -<?php echo L::messageErrorNotFound; ?></h1>
						<div class="mb-1"><?php echo L::messageErrorNotFoundQuote; ?></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include_once('footer.php'); ?>
	<script type="text/javascript" src="client/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="client/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="client/js/index.js"></script>
</body>