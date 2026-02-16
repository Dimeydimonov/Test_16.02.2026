<?php

	namespace App\Controller;

	use App\Service\ModelService;
	use App\View\ViewRenderer;

	class PageController
	{
		private ModelService $modelService;
		private ViewRenderer $renderer;
		public function __construct(ModelService $modelService, ViewRenderer $renderer)
		{
			$this->modelService = $modelService;
			$this->renderer = $renderer;
		}
		public function showPage(): void
		{
			$models = $this->modelService->getModelsForPage();
			$this->renderer->render('header.php', []);
			$this->renderer->render('cards.php', ['models' => $models]);
			$this->renderer->render('footer.php', []);
		}
	}