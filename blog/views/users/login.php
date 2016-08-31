<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
	<div>
		<label for="username">Потребителско име</label>
	</div>
	<div>
		<input type="text" name="username" required />
	</div>
	<div>
		<label for="password">Парола</label>
	</div>
	<div>
		<input type="password" name="password" required />
	</div>
	<div><input type="submit" value="Влез"/></div>
</form>
