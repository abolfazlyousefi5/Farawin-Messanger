<?php

class regester extends Controller {
    public $chekLogin = "";
    
    function __construct(){
        parent::__construct();
        
        if ($this->chekLogin =!FALSE) {
            header("Location:" .URL);
        }
    }
    function index(){
        $this->view('regester/index');
    }
} 