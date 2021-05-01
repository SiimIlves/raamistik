<?php


class Pages extends Controller
{
    public function __construct()
    {
        // if anything else works dont need to thcehicejc
    }

    public function index(){
        $data = array(
            'title' => 'Welcome to Pages',
        'content' => 'Pages index view is loaded by MVC'
    );
        $this->view('pages/index', $data);
    }
    public function about(){
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }
}