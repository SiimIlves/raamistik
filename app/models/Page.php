<?php


class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        echo 'db is connected';
    }
}