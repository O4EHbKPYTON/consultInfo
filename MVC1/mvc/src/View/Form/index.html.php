<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Форма обратной связи</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/src/View/css/custom.css">
</head>
<body>
<section class="content">
	<header class="d-flex justify-content-center align-items-center mb-4" style="background-color: #eee;">
		<h2>Форма обратной связи</h2>
		<a href="/" class="icon text-decoration-none ms-3">
			<i class="fas fa-envelope"></i> </a>
	</header><?php
	/** @var  Form $form */

	use App\Model\Form;

	$form = new Form('', '', '', null, false);
	if ($isSend = ($form->isSend())): ?>
		<p>Ваше сообщение успешно отправлено!</p>
	<?php
	else: ?>
		<form enctype="multipart/form-data" action="/add/" method="post">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="username">Имя пользователя <span class="required-field"></span></label>
							<input type="text" class="form-control" id="username" name="username" required placeholder="Введите имя пользователя" ">
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
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Введите E-mail" required>
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
							<textarea class="form-control" id="message" name="message" required maxlength="1000" placeholder="Введите сообщение"></textarea>
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