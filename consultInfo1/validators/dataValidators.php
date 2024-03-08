<?php
function getFileValidationErrorsOnUpload(): string
{
	if (!empty($_FILES['file']['name']))
	{
		$imageFileType = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
		if (($imageFileType !== "png" && $imageFileType !== "jpg"))
		{
			return "Только PNG или JPG разрешены.";
		}
		$uploadedFilePath = dirname(__DIR__) . '/uploads/' . $_FILES['file']['name'];

		if (!is_dir(dirname($uploadedFilePath)) || !is_writable(dirname($uploadedFilePath)))
		{
			return "Ошибка загрузки файла";
		}
		if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFilePath))
		{
			return $uploadedFilePath;
		}
	}

	return '';
}

function getEmailValidationErrors($email): ?string
{
	if (!$email)
	{
		return "Поля отмеченные * обязательны для заполнения";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return "Некорректный email";
	}
	$domain = explode('@', $email)[1];
	if (!checkdnsrr($domain))
	{
		return "Некорректный email";
	}

	return null;
}