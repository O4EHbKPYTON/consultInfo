<?php

namespace App\Model;

use App\Model\File;
use App\Model\User;

/**
 *
 */
class Form
{
	private string $username;
	private string $email;
	private string $message;
	private ?File $file;
	private bool $isSend;

	/**
	 * @param string $username
	 * @param string $email
	 * @param string $message
	 * @param \App\Model\File|null $file
	 * @param bool $isSend
	 */
	public function __construct(string $username, string $email, string $message, ?\App\Model\File $file, bool $isSend)
	{
		$this->username = $username;
		$this->email = $email;
		$this->message = $message;
		$this->file = $file;
		$this->isSend = $isSend;
	}

	/**
	 * @return string
	 */
	public function getUsername(): string
	{
		return $this->username;
	}

	/**
	 * @param string $username
	 *
	 * @return void
	 */
	public function setUsername(string $username): void
	{
		$this->username = $username;
	}

	/**
	 * @return string
	 */
	public function getEmail(): string
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 *
	 * @return void
	 */
	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getMessage(): string
	{
		return $this->message;
	}

	/**
	 * @param string $message
	 *
	 * @return void
	 */
	public function setMessage(string $message): void
	{
		$this->message = $message;
	}

	/**
	 * @return \App\Model\File|null
	 */
	public function getFile(): ?\App\Model\File
	{
		return $this->file;
	}

	/**
	 * @param \App\Model\File|null $file
	 *
	 * @return void
	 */
	public function setFile(?\App\Model\File $file): void
	{
		$this->file = $file;
	}

	/**
	 * @return bool
	 */
	public function isSend(): bool
	{
		return $this->isSend;
	}

	/**
	 * @param bool $isSend
	 *
	 * @return void
	 */
	public function setIsSend(bool $isSend): void
	{
		$this->isSend = $isSend;
	}

}