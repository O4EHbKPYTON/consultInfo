<?php

namespace App\Controller;

use App\Model\Form;
use App\Model\File;
use App\DataValidators\DataValidators;

class FormController extends BaseController
{

	public function index(): void
	{
		$form = null;

		$this->render('Form/index.html.php', [
			'form' => $form,
		]);
	}
	public function add(): void
	{
		$form = [];
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);

		$mailError = DataValidators::getEmailValidationErrors($email);
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

		$uploadedFilePath = DataValidators::getFileValidationErrorsOnUpload();
		if ($uploadedFilePath === "Только PNG или JPG разрешены." || $uploadedFilePath === "Ошибка загрузки файла")
		{
			$errors['file'] = $uploadedFilePath;
			$uploadedFilePath = '';
		}

		if (empty($errors))
		{
			$file = null;
			if (!empty($uploadedFilePath))
			{
				$file = new File($uploadedFilePath);
			}

			$text =   $username . "\n" . $email . "\n" . $message . "\n" . $uploadedFilePath;
			$hash = md5($text);
			$fileName = date('Y-m-d H-i-s') . ' ' . $hash . '.txt';
			$filePath = dirname(__DIR__) . '/../data/' . $fileName;
			file_put_contents($filePath, $text, FILE_APPEND);
			$form = new Form($username, $email, $message, $file, true);
			$this->success();
			exit();
		}


	}
	public function success(): void
	{
		$this->render('Form/success.php',[]);
	}

}