<?php

class model_register extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function insert_data($post)
    {
        $sql = "SELECT * FROM users WHERE phone=?";
        $params = array($post['phone']);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) == 0) {
            if ($post['password'] != $post['confirm_password']) {
                echo json_encode(
                    array(
                        "Massage" => "Please Fill All Fields!",
                        "status_code" => "404"
                    )
                );
            } else {
                $sql = "INSERT INTO users (phone,password,register_date) VALUES (?,?,?)";
                $params = array($post['phone'], md5($post['password']), self::jalali_date("Y/m/d"));
                $this->doQuery($sql, $params);
                $_SESSION['phone'] = $post['phone'];
                echo json_encode(
                    array(
                        "Massage" => "Ok",
                        "status_code" => "200"

                    )
                );
            }
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
