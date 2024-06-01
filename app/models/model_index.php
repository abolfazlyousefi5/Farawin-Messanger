<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function contact_data($post)
    {
        $checkid = Model::session_get("id");


        $sql = "SELECT * FROM users WHERE phone=? and password=?";
        $value = array($post)['contactPhone'];

        $result = $this->doSelect($sql, $value);
        if (sizeof($result) !== 0) {
            $sql = "SELECT * FROM contact (userid , contactid , name) VALUES (?, ?, ?)";
            $value = array($_SESSION['id'], $result[0]['id'], $post['contactName']);
            $this->doQuery($sql, $value);
            echo json_encode(
                array(
                    "Massage" => "ok",
                    "status_code" => "200"
                )
            );
        } else {
            echo json_encode(
                array(
                    "Massage" => "Not Found",
                    "status_code" => "404"

                )
            );
        }
    }
}
