<?php

class model_login extends Model
{
    public $checkLogin = '';

    function __construct()
    {
        parent::__construct();
    }

    function check_data($post)
    {
        $sql = "SELECT * FROM users WHERE phone=? and password=?";
        $params =array($post['phone'], md5($post['password']));
        $result =$this->doSelect($sql, $params);

        if (sizeof($result) == 0) {
            echo json_encode(
                array(
                    "Massage" => "Not Found",
                    "status_code" => "404"

                )
            );
        } else {
            $this->session_set("phone", $result[0]['phone']);
            $this->session_set("id", $result[0]['id']);
            $this->checkLogin= $result[0]['phone'];
            echo json_encode(
                array(
                    "Massage" => "ok",
                    "status_code" => "200"

                )
            );
        }
    }
}
