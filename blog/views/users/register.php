<?php $this->title = 'Регистрация'; ?>
<h1><?= htmlspecialchars($this->title) ?></h1>
<form method="post">
    <div>Потребителско име <input type="text" name="username" required/></div>
    <div>Име <input type="text" name="full_name"/></div>
    <div>Парола <input type="password" name="password" required/></div>
    <div>Повтори паролата <input type="password" name="password_confirm" required/></div>
    <div><input type="submit" value="Регистрация"/>
</form>
