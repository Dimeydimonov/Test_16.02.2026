<?php

	namespace App\View;

	class ViewRenderer
	{
		private string $templatePath;

		public function __construct(string $templatePath)
		{
			$this->templatePath = $templatePath;
		}

		public function render(string $template, array $data = []): void
		{
			$templateFile = $this->templatePath . '/' . $template;

			if (!file_exists($templateFile)) {
				throw new \RuntimeException("Template not found: {$templateFile}");
			}

			extract($data);

			require $templateFile;
		}
	}