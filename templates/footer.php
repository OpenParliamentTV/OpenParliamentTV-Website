<footer style="background-color: #fff; padding: 0 0 20px 0; margin-top: 60px;box-shadow: 0px 0px 4px #cfcfcf;">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-12 col-md-6 justify-content-center text-center mt-3">
				<a href="./datapolicy"><?php echo L::dataPolicy; ?></a> | <a href="./imprint"><?php echo L::imprint; ?></a>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-12" style="font-size: 12px; text-align: center;"><?php echo L::dataPolicyHintPart1; ?> <a href="https://matomo.org" target="_blank">Matomo</a><?php echo L::dataPolicyHintPart2; ?> <br><?php echo L::dataPolicyHintPart3; ?><a href="https://stats.openparliament.tv/index.php?module=CoreAdminHome&amp;action=optOut&amp;language=<?php echo (isset($lang)) ? $lang : 'de'; ?>"><?php echo L::dataPolicyHintPart4; ?></a>. <?php echo L::dataPolicyHintPart5; ?> <a href="./datapolicy"><?php echo L::dataPolicyHintPart6; ?></a>.</div>
		</div>
	</div>
</footer>