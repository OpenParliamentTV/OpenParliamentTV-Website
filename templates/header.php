<?php
	$page = (isset($_REQUEST["a"]) && strlen($_REQUEST["a"]) > 2) ? $_REQUEST["a"] : "main";
?>
<header>
	<nav class="navbar navbar-expand-xl navbar-light fixed-top">
		<a href="./" class="navbar-text brand"><img src="client/images/optv-logo_klein.png"><span class="d-none d-md-inline">Open <b>Parliament TV</b></span></a>
		<button class="btn btn-primary btn-sm ms-auto d-block d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><?php echo L::menu; ?> <span class="icon-menu-1"></span>
		</button>
		<div class="dropdown ms-3 order-xl-3">
			<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $acceptLang[$lang]["name"]; ?></button>
			<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
			<?php
				global $acceptLang;
				$queryString = parse_url($url, PHP_URL_QUERY);
				$params = [];
				if ($queryString) {
					parse_str($queryString, $params);
				}
				unset($params['lang']); // Remove existing lang parameter if present
				
				foreach ($acceptLang as $thisLang) {
					$params['lang'] = $thisLang["short"];
					$langUrl = $urlWithoutParams . '?' . http_build_query($params);
					echo "<a class='dropdown-item langswitch".(($lang==$thisLang["short"])?" active" : "")."' href='".$langUrl."' target='_self' data-lang='".$thisLang["short"]."'>".$thisLang["name"]."</a>";
				} ?>
			</div>
		</div>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "vision-mission-strategy") ? "active" : "" ?>" href="./vision-mission-strategy"><span class="icon-lightbulb-1 me-1" style="top: -2px;position: relative;"></span><?php echo L::proposal; ?></a>
				</li>
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "application-areas") ? "active" : "" ?>" href="./application-areas"><span class="icon-cubes me-2" style="top: -1px;position: relative;"></span><?php echo L::applicationAreas; ?></a>
				</li>
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "team") ? "active" : "" ?>" href="./team"><span class="icon-handshake-o me-2" style="top: -1px;position: relative;"></span><?php echo L::team; ?></a>
				</li>
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "code-of-conduct") ? "active" : "" ?>" href="./code-of-conduct"><span class="icon-heart me-1"></span>Code of Conduct</a>
				</li>
				<!--
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "news") ? "active" : "" ?>" href="./news"><span class="icon-clock-3 me-0" style="top: -1px;position: relative;"></span><?php echo L::news; ?></a>
				</li>
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "background") ? "active" : "" ?>" href="./background"><span class="icon-doc-text-inv me-0"></span><?php echo L::background; ?></a>
				</li>
				-->
				<li class="nav-item me-2">
					<a class="nav-link <?= ($page == "faq") ? "active" : "" ?>" href="./faq"><span class="icon-help-circled me-0" style="top: -1px;position: relative;"></span><?php echo L::faqShort; ?></a>
				</li>
				<!--
				<li class="nav-item">
					<a class="nav-link <?= ($page == "roadmap") ? "active" : "" ?>" href="./roadmap"><span class="icon-tasks mr-1"></span>Roadmap</a>
				</li>
				-->
			</ul>
		</div>
	</nav>
</header>