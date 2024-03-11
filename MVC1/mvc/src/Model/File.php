<?php

namespace App\Model;

class File
{

	public string $filePath;


	/**
	 * @param string $filePath
	 */
	public function __construct(string $filePath) {
		$this->filePath = $filePath;
	}


	public function getFilePath(): string
	{
		return $this->filePath;
	}

	public function setFilePath(string $filePath): void
	{
		$this->filePath = $filePath;
	}
}