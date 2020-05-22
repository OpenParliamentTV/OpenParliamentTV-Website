<?php
	$page = (isset($_REQUEST["a"]) && strlen($_REQUEST["a"]) > 2) ? $_REQUEST["a"] : "main";
?>
<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<a href="./" class="navbar-text brand"><img src="client/images/optv-logo_klein.png"><span class="d-none d-md-inline">Open Parliament TV</span></a>
		<button class="btn btn-primary btn-sm d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-menu-1"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link <?= ($page == "proposal") ? "active" : "" ?>" href="./proposal">Project Proposal</a>
				</li>
				<!--
				<li class="nav-item">
					<a class="nav-link <?= ($page == "info") ? "active" : "" ?>" href="./info">About</a>
				</li>
				-->
				<li class="nav-item">
					<a class="nav-link <?= ($page == "datapolicy") ? "active" : "" ?>" href="./datapolicy"><?php echo L::dataPolicy; ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?= ($page == "imprint") ? "active" : "" ?>" href="./imprint"><?php echo L::imprint; ?></a>
				</li>
			</ul>
		</div>
	</nav>
</header>