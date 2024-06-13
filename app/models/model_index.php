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
                        "msg" => "Your information cannot be added to the contact list.",
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

                    $stmt = "SELECT * FROM contact WHERE userid=?";
                    $params = array($_SESSION['id']);
                    $res = $this->doSelect($stmt, $params);

                    echo json_encode(
                        array(
                            "msg" => "ok",
                            "status_code" =>  "200",
                            "arrayres" =>  $post['contactName']
                        )
                    );
                } else {
                    echo json_encode(
                        array(
                            "msg" => "no",
                            "status_code" =>  "303",
                            "arrayres" => ""
                        )
                    );
                }
            }
        } else {
            echo json_encode(
                array(
                    "msg" => "not found",
                    "status_code" =>  "404"
                )
            );
        }
    }

    function contact_data2()
    {
        $stmt = "SELECT * FROM contact WHERE userid=?";
        $params = array($_SESSION['id']);
        $res = $this->doSelect($stmt, $params);
        if (sizeof($res) != 0) {
            echo json_encode(
                array(
                    "msg" => "ok",
                    "status_code" =>  "200",
                    "res" => $res
                )
            );
        } else {
            echo json_encode(
                array(
                    "msg" => "no",
                    "status_code" =>  "303",
                    "res" => ""
                )
            );
        }
    }
    function contact_data3(){
    $sql = "UPDATE * FROM contact "
    }
}
