<?php
	$page = (isset($_REQUEST["a"]) && strlen($_REQUEST["a"]) > 2) ? $_REQUEST["a"] : "main";
?>
<header>
	<nav class="navbar navbar-expand-xl navbar-light fixed-top">
		<a href="./" class="navbar-text brand"><img src="client/images/optv-logo_klein.png"><span class="d-none d-md-inline">Open Parliament TV</span></a>
		<button class="btn btn-primary btn-sm ml-auto d-block d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><?php echo L::menu; ?> <span class="icon-menu-1"></span>
		</button>
		<div class="dropdown ml-3 order-xl-3">
			<button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $acceptLang[$lang]["name"]; ?></button>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
				<?php
                foreach ($acceptLang as $tmpLangK=>$tmpLang) {
                    $tmpParams = array_merge(array(),$_REQUEST);
                    $tmpParams["lang"] = $tmpLang["short"];
                    $linkChangeLanguage = "?".http_build_query($tmpParams);
                    echo "<a class='dropdown-item langswitch".(($lang==$tmpLang["short"])?" active" : "")."' href='".$linkChangeLanguage."' target='_self' data-lang='".$tmpLang["short"]."'>".$tmpLang["name"]."</a>";
                }
                ?>
			</div>
		</div>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "vision-mission-strategy") ? "active" : "" ?>" href="./vision-mission-strategy"><span class="icon-lightbulb-1 mr-1" style="top: -2px;position: relative;"></span><?php echo L::proposal; ?></a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "application-areas") ? "active" : "" ?>" href="./application-areas"><span class="icon-cubes mr-2" style="top: -1px;position: relative;"></span><?php echo L::applicationAreas; ?></a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "team") ? "active" : "" ?>" href="./team"><span class="icon-handshake-o mr-2" style="top: -1px;position: relative;"></span><?php echo L::team; ?></a>
				</li>
				<!--
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "news") ? "active" : "" ?>" href="./news"><span class="icon-clock-3 mr-0" style="top: -1px;position: relative;"></span><?php echo L::news; ?></a>
				</li>
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "background") ? "active" : "" ?>" href="./background"><span class="icon-doc-text-inv mr-0"></span><?php echo L::background; ?></a>
				</li>
				-->
				<li class="nav-item mr-2">
					<a class="nav-link <?= ($page == "faq") ? "active" : "" ?>" href="./faq"><span class="icon-help-circled mr-0" style="top: -1px;position: relative;"></span><?php echo L::faq; ?></a>
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