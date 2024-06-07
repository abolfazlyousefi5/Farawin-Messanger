<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function contact_data($post)
    {
        $sql = "SELECT * FROM users WHERE phone=?";
        $values = array($post['contactPhone']);
        $result = $this->doSelect($sql, $values);
        if (sizeof($result) != 0) {
            if ($_SESSION['id'] == $result[0]['id']) {
                echo json_encode(
                    array(
                        "msg" => "Your information cannot be added to the audience table",
                        "status_code" =>  "101"
                    )
                );
            } else {


                $stmt = "SELECT * FROM contact WHERE contactid=?";
                $params = array($result[0]['id']);
                $res = $this->doSelect($stmt, $params);

                if (sizeof($res) == 0) {
                    $sql = "INSERT INTO contact(userid,contactid,name) VALUES(?,?,?) ";
                    $values = array($_SESSION['id'], $result[0]['id'], $post['contactName']);
                    $this->doQuery($sql, $values);

                    echo json_encode(
                        array(
                            "msg" => "ok",
                            "status_code" =>  "200"
                        )
                    );
                } else {

                    echo json_encode(
                        array(
                            "msg" => "not found",
                            "status_code" =>  "404"
                        )
                    );
                }
            }
        }
    }
    function get_contact_data($post)
    {
        $id = Model::session_get('id');
        $sql = "SELECT *FROM contact WHERE userid=?";
        $values = array($this->session_get('id'));
        $result = $this->doSelect($sql, $values);
        echo json_encode(
            array(
                "msg" => $result,
                "status_code" =>  "900"
            )
        );
    }
}
