<?php

	namespace App\Service;

	use App\Repository\ModelRepository;

	class ModelService
	{
		private ModelRepository $repository;

		public function __construct(ModelRepository $repository)
		{
			$this->repository = $repository;
		}
		public function getModelsForPage(): array
		{
			return $this->repository->getModels(5);
		}
	}