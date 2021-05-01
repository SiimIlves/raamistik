<?php


class Page
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addUser(){
        $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
        $this->db->bind('name', 'asd');
        $this->db->bind('email', 'asd@host.loc');
        $this->db->bind('status', 'user');
        $this->db->execute();
    }
}