<main class="main">
	<div class="container">
		<h1>Наши модели</h1>
		<div class="cards">
			<?php foreach ($models as $model): ?>
				<?php require __DIR__ . '/card.php'; ?>
			<?php endforeach; ?>
		</div>
	</div>
</main>
