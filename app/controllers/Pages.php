<?php


class Pages extends Controller
{
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index(){
        $data = array(
            'title' => 'Welcome to Pages',
            'content' => 'Pages index view is loaded by MVC'
        );
        $this->view('pages/index', $data);
    }
    public function about(){
        $this->pagesModel->addUser();
        echo ' user data is saved<br>';
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }
}