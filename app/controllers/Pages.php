<?php


class Pages extends Controller
{
    public function __construct()
    {
        echo 'Pages Class is loaded<br>';
    }

    public function index(){
        echo 'index meth is loaded<br>';
        $this->view('index');
    }

    public function about(){
        echo 'about meth is loaded<br>';
        $this->view('about');
    }
}