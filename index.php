<?php
error_reporting(0);
set_time_limit(0);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Create Arquives TXT mass</title>
</head>
<body>
	<div>
		<h1>Split Lines</h1>
		<p>Separe seus arquivos em varios txt facilmente</p>
	</div>
	<div>
		<form action="index.php" method="post">
			<div>
				<textarea name="lista" id="" cols="80" rows="10"></textarea>
			</div>
			<div class="form-inputs">
				<span>Split: <input type="number" name="n"></span>
				<input type="submit" name="btn">
			</div>
		</form>
	</div>
	<div class="result">
		<?php
 			include 'include/api.php'
		?>
	</div>
</body>
</html>