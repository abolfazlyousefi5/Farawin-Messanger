<?php

class register  extends Controller
{
    public $chekLogin = "";

    function __construct()
    {
        parent::__construct();

        if ($this->chekLogin = !FALSE) {
            header("Location:" . URL);
        }
    }
    function index()
    {
        $this->view('register /index');
    }
    function insert_data()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
    }
}
