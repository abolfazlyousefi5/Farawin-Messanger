<?php
class model_register  extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function insert($post)
    {
        $username = $post['username'];
        $pass = md5($post['password']);
    }
}
