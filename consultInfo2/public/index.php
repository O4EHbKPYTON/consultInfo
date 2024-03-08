<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Просмотр CSV файла</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div class="container mt-5">
	<h2 class="mb-4">Просмотр CSV файла</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="file">Загрузить CSV файл</label>
			<input type="file" class="form-control-file" id="file" name="file" accept=".csv" required>
		</div>
		<button type="submit" class="btn btn-primary">Загрузить</button>
	</form>

	<?php
	if(isset($_FILES['file'])) {
		$file = $_FILES['file']['tmp_name'];

		$encoding = mb_detect_encoding(file_get_contents($file), mb_detect_order(), false);

		if (($handle = fopen($file, 'rb')) !== FALSE) {
			echo '<div class="table-responsive mt-4">';
			echo '<table class="table table-bordered table-striped">';
			echo '<thead>';
			echo '<tr>';
			$headerPrinted = false;
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				echo '<tr>';
				foreach ($data as $cell) {
					if (!$headerPrinted) {
						echo '<th>' . htmlspecialchars(mb_convert_encoding($cell, 'utf-8', $encoding)) . '</th>';
					} else {
						echo '<td>' . htmlspecialchars(mb_convert_encoding($cell, 'utf-8', $encoding)) . '</td>';
					}
				}
				echo '</tr>';
				if (!$headerPrinted) {
					$headerPrinted = true;
					echo '</thead>';
					echo '<tbody>';
				}
			}
			fclose($handle);
			echo '</tbody>';
			echo '</table>';
			echo '</div>';
		} else {
			echo '<p class="mt-4">Не удалось открыть CSV файл</p>';
		}
	}
	?>
</div>
</body>
</html>