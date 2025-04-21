<?php include_once('head.php'); ?>
<body>
	<?php include_once('header.php'); ?>
	<main class="container" style="margin-top: 60px;">
		<div class="row m-0" style="position: relative; z-index: 1;">
			<div class="container" style="margin-bottom: 30px;">
				<div class="row">
					<div class="col-12">
						<h1 class="mb-4"><span class="icon-mail me-2" style="top: -1px;position: relative;"></span> <?php echo L::contactRequests; ?></h1>
						<div class="mb-1">Mail: info [AT] openparliament.tv</div>
						<div>Mastodon: <a href="https://mstdn.social/@OpenParlTV" target="_blank">@OpenParlTV@mstdn.social</a> | Bluesky: <a href="https://bsky.app/profile/openparltv.bsky.social" target="_blank">@openparltv.bsky.social</a> | Twitter: <a href="https://twitter.com/OpenParlTV" target="_blank">@OpenParlTV</a></div>
					</div>
				</div>
				<hr class="my-4">
				<div class="row">
					<div class="col-12">
						<h1 class="mb-4"><span class="icon-handshake-o me-2" style="top: -1px;position: relative;"></span> <?php echo L::team; ?></h1>
					</div>
				</div>
				<div class="relationshipsList row row-cols-1 row-cols-sm-1 row-cols-lg-2">
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/erika.jpg" alt="Erika Owens">
									</div>
								</div>
								<div>
									<div class="entityTitle">Erika Owens</div>
									<div><?php echo L::coDirector; ?></div>
									<div class="mt-2"><?php echo L::roleTextErika; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/joscha.jpg" alt="Joscha Jäger">
									</div>
								</div>
								<div>
									<div class="entityTitle">Joscha Jäger</div>
									<div><?php echo L::coDirector; ?></div>
									<div class="mt-2"><?php echo L::roleTextJoscha; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/michael.jpg" alt="Michael Morgenstern">
									</div>
								</div>
								<div>
									<div class="entityTitle">Michael Morgenstern</div>
									<div><?php echo L::creativeTechnologist; ?></div>
									<div class="mt-2"><?php echo L::roleTextMichael; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/olivier.jpg" alt="Olivier Aubert">
									</div>
								</div>
								<div>
									<div class="entityTitle">Olivier Aubert</div>
									<div><?php echo L::researchEngineer; ?></div>
									<div class="mt-2"><?php echo L::roleTextOlivier; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/joseph.jpg" alt="..">
									</div>
								</div>
								<div>
									<div class="entityTitle">Joseph</div>
									<div><?php echo L::consultant; ?> & <?php echo L::projectManager; ?></div>
									<div class="mt-2"><?php echo L::roleTextJoseph; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">
						<h2 class="mb-4 mt-2">Contributors</h2>
					</div>
				</div>
				<div class="relationshipsList row row-cols-1 row-cols-sm-1 row-cols-lg-2">
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/marina.jpg" alt="Marina Knauf">
									</div>
								</div>
								<div>
									<div class="entityTitle">Marina Knauf</div>
									<div><?php echo L::projectManagerFemale; ?> | <a class="d-inline p-0" href="https://onpurpose.org/de/" target="_blank">On Purpose</a> Associate 2023</div>
									<div class="mt-2"><?php echo L::roleTextMarina; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/sanaz.jpg" alt="Sanaz Klaus">
									</div>
								</div>
								<div>
									<div class="entityTitle">Sanaz Klaus</div>
									<div><?php echo L::projectManagerFemale; ?> | <a class="d-inline p-0" href="https://onpurpose.org/de/" target="_blank">On Purpose</a> Associate 2022/23</div>
									<div class="mt-2"><?php echo L::roleTextSanaz; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/alexa.jpg" alt="Alexa Steinbrück">
									</div>
								</div>
								<div>
									<div class="entityTitle">Alexa Steinbrück</div>
									<div><?php echo L::dataScientist; ?></div>
									<div class="mt-2"><?php echo L::roleTextAlexa; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="entityPreview col" data-type="person">
						<div class="entityContainer">
							<div class="linkWrapper">
									<div class="thumbnailContainer">
									<div class="rounded-circle">
										<img src="./client/images/team/philo.jpg" alt="Philo van Kemenade">
									</div>
								</div>
								<div>
									<div class="entityTitle">Philo van Kemenade</div>
									<div><?php echo L::creativeTechnologist; ?></div>
									<div class="mt-2"><?php echo L::roleTextPhilo; ?></div>
								</div>
							</div>
						</div>
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