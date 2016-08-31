<?php

class PostsController extends BaseController
{
    function OnInIt() {
        $this->authorize();
    }

    function index()
    {
        $this->posts = $this->model->getAll();
    }

    function create()
    {
        if ($this->isPost) {
            $title = $_POST['post_title'];
            if (strlen($title) < 1) {
                $this->setValidationError("post_title", "Заглавието не може да бъде празно!");
            }

            $content = $_POST['post_content'];
            if (strlen($content) < 1) {
                $this->setValidationError("post_content", "Съдържанието не може да е празно!");
            }
            if ($this->formValid()) {
                $userId = $_SESSION['user_id'];
                if ($this->model->create($title, $content, $userId)) {
                    $this->addInfoMessage("Post created.");
                    $this->redirect("posts");
                } else {
                    $this->addErrorMessage("Възникна грешка- не може да се създаде новата публикация!");
                }
            }

        }

    }
    
    function delete(int $id)
    {

       if ($this->isPost) {
           if ($this->model->delete($id)) {
               $this->addInfoMessage("Успешно изтрихте публикацията!");
           }
           else
           {
               $this->addErrorMessage("Възникна грешка- публикацията не може да бъде изтрита!");
           }
           $this->redirect('posts');
       }
        else
        {
            $post = $this->model->getPostById($id);
            if (! $post) {
                $this->addErrorMessage("Възникна грешка- публикацията не съшествува!");
                $this->redirect('posts');
            }
            $this->post = $post;
        }
    }

    function edit(int $id) {

        if ($this->isPost)
        {
            if($this->model->edit());
        }
        else
        {
            $post = $this->model->getPostById($id);
            if (! $post) {
                $this->addErrorMessage("Възникна грешка- публикацията не съшествува!");
                $this->redirect('posts');
            }
            $this->post = $post;
        }
    }
}
