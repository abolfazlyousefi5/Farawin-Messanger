<?php
class Controller extends Controller
{
    public $model; // Declare the $model property

    function __construct()
    {
        Model::session_init();
        Model::cookie_init();
        date_default_timezone_set("Asia/Tehran");
    }

    function view($viewUrl, $data = array())
    {
        require_once 'app/views/' . $viewUrl . '.php';
    }

    function model($modelUrl)
    {
        require_once 'app/models/model_register' . $modelUrl . '.php';
        $className = 'model_' . $modelUrl;
        $this->model = new $className;
    }
}
