<?php

class register extends  Controller
{
    public $checkLogin = "";

    function __construct()
    {
        parent::__construct();
        $this->checkLogin = Model::session_get("phone");
        // if ($this->checkLogin != FALSE) {
        //     header("Location: ".URL."login");
        // }
    }

    function index()
    {
        $this->view('register/index');
    }
    function insert_data()
    {
        $this->model->insert_data($_POST);
    }

}