<?php

	namespace App\Model;

	class Model
	{
		private int $id;
		private string $name;
		private int $age;
		private string $photoUrl;
		private string $description;
		private array $services;

		public function __construct(array $data)
		{
			$this->id = $data['id'];
			$this->name = $data['name'];
			$this->age = $data['age'];
			$this->photoUrl = $data['photoUrl'];
			$this->description = $data['description'];
			$this->services = $data['services'];
		}

		public function getId(): int
		{
			return $this->id;
		}

		public function getName(): string
		{
			return $this->name;
		}

		public function getAge(): int
		{
			return $this->age;
		}

		public function getPhotoUrl(): string
		{
			return $this->photoUrl;
		}

		public function getDescription(): string
		{
			return $this->description;
		}

		public function getServices(): array
		{
			return $this->services;
		}
	}