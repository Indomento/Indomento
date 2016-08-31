<?php

class UsersController extends BaseController
{
    public function register()
    {
        if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $full_name = $_POST['full_name'];
            if (strlen($username) <= 1) {
                $this->setValidationError("username", "Невалидно потребителско име!");
            }
            if (strlen($password) <= 1) {
                $this->setValidationError("password", "Невалидна парола!");
            }
            if ($password != $password_confirm) {
                $this->setValidationError("password_confirm", "Паролата не съвпада!");
            }
            if ($this->formValid()) {
                $userId = $this->model->register($username, $password, $full_name);
                if ($userId !== false) {
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $userId;
                    $this->addInfoMessage("Успешна регистрация!");
                    $this->redirect("");
                } else {
                    $this->addErrorMessage("Грешка по време на регистрацията!");
                }
            }
        }
    }

    public function login()
    {
        if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userId = $this->model->login($username, $password);
            if ($userId !== false) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $userId;
                $this->addInfoMessage("Успешно влязохте!");
                $this->redirect("");
            } else {
                $this->addErrorMessage("Неуспешно влизане!");
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirect("");
    }

    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }
}
