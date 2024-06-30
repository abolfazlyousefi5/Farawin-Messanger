<?php

class Index extends Controller
{
    public $checkLogin = '';

    function __construct()
    {
        parent::__construct();

        //   unset( $_SESSION['username']);
        $this->checkLogin = Model::session_get("phone");

        // if ($this->checkLogin == FALSE) {
        //     header("Location:".URL."login");
        // }

    }

    function index()
    {
        //    $widget = $this->model->getWidget($this->checkLogin);
        //    $data = array('widget' => $widget);

        //    $this->view('index/index', $data);
        $this->view('index/index');
    }
    function contact_data()
    {
        $this->model->contact_data($_POST);
    }
    function get_contact_data()
    {
        $this->model->get_contact_data();
    }
    function update_data()
    {
        $this->model->update_data($_POST);
    }
    function contact_massage()
    {
        $this->model->contact_massage($_POST);
    }
}
