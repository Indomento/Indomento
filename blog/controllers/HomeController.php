<?php

class HomeController extends BaseController
{
    function index() {
        $posts = $this->model->getLatestPosts(5);
        $this->posts = array_slice($posts, 0, 3);
        $this->postsSidebar = $posts ;
    }

    function view(int $id) {
        $post = $this->model->getPostById($id);
        if(!$post) {
            $this->addErrorMessage("Публикацията не съществува!");
            $this->redirect("");
        }
        $this->post = $post;
    }
}

