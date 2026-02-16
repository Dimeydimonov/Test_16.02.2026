<div class="card">
	<img src="<?= htmlspecialchars($model->getPhotoUrl()) ?>" alt="<?= htmlspecialchars($model->getName()) ?>" class="card-photo">
	<div class="card-content">
		<h2 class="card-name"><?= htmlspecialchars($model->getName()) ?></h2>
		<p class="card-age">Возраст: <?= $model->getAge() ?> лет</p>
		<p class="card-description"><?= htmlspecialchars($model->getDescription()) ?></p>
		<div class="card-services">
			<strong>Услуги:</strong>
			<ul>
				<?php foreach ($model->getServices() as $service): ?>
					<li><?= htmlspecialchars($service) ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>