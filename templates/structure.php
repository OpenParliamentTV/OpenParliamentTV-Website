<?php 
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	$acceptLang = ['de', 'en']; 
	$lang = in_array($lang, $acceptLang) ? $lang : 'en';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="ltr">
	<?= $content ?>
</html>