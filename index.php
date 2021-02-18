<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apretaste.TV</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Apretaste.TV te trae videos de todo lo que te interesa: deporte, noticias, política, tecnología, inversión y mucho más, hecho por nuestra comunidad de Apretadores.">
	<meta name="author" content="Apretaste">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<meta name="google-site-verification" content="LFSeXxsA8pm8OSQXPMoad9BS9LkdaLS1Qm5zc5ijApA" />

	<script type="text/javascript">
		setTimeout(function(){
			<?php if(empty($_GET['c'])) { ?>
				window.location = 'https://www.youtube.com/apretaste';
			<?php } elseif($_GET['c'] == 'chat') { ?>
				console.log("chat")
				window.location = 'https://t.me/ApretasteCuba';
			<?php } else { ?>
				window.location = 'https://www.youtube.com/watch?v=<?= str_replace('_', '', $_GET['c']) ?>';
			<?php } ?>
		}, 1000);
	</script>
</head>
<body style="background:black url('loading.gif') no-repeat fixed center;">
	Cargando Apretaste.TV
</body>
</html>
