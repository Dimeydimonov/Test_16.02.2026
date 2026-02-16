<?php

	namespace App\DataProvider;

	class JsonDataProvider implements DataProviderInterface
	{
		private string $filePath;

		public function __construct(string $filePath)
		{
			$this->filePath = $filePath;
		}
		public function fetchAll(): array
		{
			if (!file_exists($this->filePath)) {
				throw new \RuntimeException("File not found: {$this->filePath}");
			}

			$content = file_get_contents($this->filePath);
			$data = json_decode($content, true);

			if (json_last_error() !== JSON_ERROR_NONE) {
				throw new \RuntimeException("Invalid JSON: " . json_last_error_msg());
			}
			return $data;
		}
	}