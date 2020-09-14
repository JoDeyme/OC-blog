<?php

namespace App\src\controller;

<<<<<<< HEAD
use App\src\DAO\ArticleDAO;
use App\src\model\View;

class BackController
{
    private $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function addArticle($post)
    {
        if(isset($post['submit'])) {
            $articleDAO = new ArticleDAO();
            $articleDAO->addArticle($post);
=======
class BackController extends Controller
{
    public function addArticle($post)
    {
        if(isset($post['submit'])) {
            $this->articleDAO->addArticle($post);
>>>>>>> 432c319a4edb04afd633519734cc9e35ff39f710
            header('Location: ../public/index.php');
        }
        return $this->view->render('add_article', [
            'post' => $post
        ]);
    }
}