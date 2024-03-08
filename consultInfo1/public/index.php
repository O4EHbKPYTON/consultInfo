<?php
declare(strict_types=1);

require_once "../validators/dataValidators.php";

$isSend = false;
$errors = [];
$username = '';
$email = '';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$canSave = false;
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	$mailError = getEmailValidationErrors($email);
	if ($mailError)
	{
		$errors['email'] = $mailError;
	}

	if (!$username)
	{
		$errors['username'] = "Поля отмеченные * обязательны для заполнения";
	}
	if (!$message)
	{
		$errors['message'] = "Поля отмеченные * обязательны для заполнения";
	}

	$uploadedFilePath = getFileValidationErrorsOnUpload();
	if ($uploadedFilePath === "Только PNG или JPG разрешены." || $uploadedFilePath === "Ошибка загрузки файла")
	{
		$errors['file'] = $uploadedFilePath;
		$uploadedFilePath = '';
	}
	if (empty($errors))
	{
		$text = $username . "\n" . $email . "\n" . $message . "\n" . $uploadedFilePath;
		$hash = md5($text);
		$fileName = date('Y-m-d H-i-s') . ' ' . $hash . '.txt';
		$filePath = dirname(__DIR__) . '/data/' . $fileName;
		file_put_contents($filePath, $text, FILE_APPEND);
		$isSend = true;
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма обратной связи</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
<section class="content">
	<header>
		<h2>Форма обратной связи</h2>
		<a href="/" class="icon">📝</a>
	</header>
	<?php
	if ($isSend): ?>
		<p>Ваше сообщение успешно отправлено!</p>
	<?php
	else: ?>
		<form enctype="multipart/form-data" action="index.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="username">Имя пользователя <span class="required-field"></span></label>
							<input type="text" class="form-control" id="username" name="username" required placeholder="Введите имя пользователя" value="<?= htmlspecialchars(
								$username
							) ?>">
							<?php
							if (isset($errors['username'])): ?>
								<p class="error"><?php
									echo $errors['username']; ?></p>
							<?php
							endif; ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">E-mail <span class="required-field"></span></label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите E-mail" value="<?= htmlspecialchars(
								$email
							) ?>" required>
							<?php
							if (isset($errors['email'])): ?>
								<p class="error"><?php
									echo $errors['email']; ?></p>
							<?php
							endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="message">Сообщение <span class="required-field"></span></label>
							<textarea class="form-control" id="message" name="message" required maxlength="1000" placeholder="Введите сообщение"><?= htmlspecialchars(
									$message
								) ?></textarea>
							<?php
							if (isset($errors['message'])): ?>
								<p class="error"><?php
									echo $errors['message']; ?></p>
							<?php
							endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="file">Файл (*.jpg, *.png)</label>
							<input type="file" class="form-control-file" id="file" name="file" accept="image/png, image/jpeg">
							<?php
							if (isset($errors['file'])): ?>
								<p class="error"><?php
									echo $errors['file']; ?></p>
							<?php
							endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Отправить</button>
					</div>
				</div>
			</div>
		</form>
	<?php
	endif; ?>
</section>
</body>
</html>