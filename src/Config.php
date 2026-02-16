<?php

	namespace App;

	class Config
	{
		private array $config;
		public function __construct(string $configPath)
		{
			$this->config = require $configPath;
		}
		public function get(string $key): mixed
		{
			$keys = explode('.', $key);
			$value = $this->config;

			foreach ($keys as $k) {
				if (!isset($value[$k])) {
					return null;
				}
				$value = $value[$k];
			}
			return $value;
		}
	}