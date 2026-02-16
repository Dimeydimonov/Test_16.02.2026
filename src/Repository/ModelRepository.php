<?php

	namespace App\Repository;

	use App\DataProvider\DataProviderInterface;
	use App\Model\Model;

	class ModelRepository
	{
		private DataProviderInterface $dataProvider;

		public function __construct(DataProviderInterface $dataProvider)
		{
			$this->dataProvider = $dataProvider;
		}

		public function getModels(int $limit = 5): array
		{
			$rawData = $this->dataProvider->fetchAll();
			$models = [];

			$count = 0;
			foreach ($rawData as $data) {
				if ($count >= $limit) {
					break;
				}

				$models[] = new Model($data);
				$count++;
			}

			return $models;
		}
	}
