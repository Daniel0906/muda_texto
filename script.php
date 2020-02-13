<!DOCTYPE html>
<html>
<head>
	<?php
		$texto = isset($_POST['texto'])?$_POST['texto']: "[Texto Exemplo]";
		$tam = isset($_POST['tam'])?$_POST['tam']: "14pt";
		$cor = isset($_POST['cor'])?$_POST['cor']: "#C0C0C0";
	?>
	<style type="text/css">
		span.texto{
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
	<meta charset="utf-8">
	<title>Resultado</title>
</head>
<body>
	<?php
		echo "<span class='texto'>$texto</span>";
	?>
	<p><a href="index.html">Voltar</a></p>
</body>
</html>