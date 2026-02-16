<?php

	require __DIR__ . '/vendor/autoload.php';

	use App\Config;
	use App\DataProvider\JsonDataProvider;
	use App\Repository\ModelRepository;
	use App\Service\ModelService;
	use App\View\ViewRenderer;
	use App\Controller\PageController;

	try {
		$config = new Config(__DIR__ . '/config.php'); // конфигурация
		$dataProvider = new JsonDataProvider($config->get('data.file'));// провайдер данных
		$repository = new ModelRepository($dataProvider);// репозиторий
		$service = new ModelService($repository);//сервис
		$renderer = new ViewRenderer($config->get('templates.path'));//рендерер
		$controller = new PageController($service, $renderer);
		$controller->showPage();

	} catch (\Exception $e) {
		echo "Ошибка: " . $e->getMessage();
	}