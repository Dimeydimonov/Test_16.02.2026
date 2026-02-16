<?php

	namespace App\DataProvider;
	interface DataProviderInterface
	{
		public function fetchAll(): array;
	}