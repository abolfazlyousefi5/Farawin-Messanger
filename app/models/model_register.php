<?php

class model_register extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function insert_data($post)
    {
        $sql = "SELECT * FROM loginform WHERE username=?";
        $params = array($post['username']);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) == 0) {
            if ($post['password'] != $post['confirm-password']) {
                echo "error";
            } else {
                $sql = "INSERT INTO loginform (username,password,register_date) VALUES (?,?,?)";
                $params = array($post['username'], md5($post['password']), self::jalali_date("Y/m/d"));
                $this->doQuery($sql, $params);
                // $_SESSION['username'] = $post['username'];

                echo "اطلاعات با موفقیت ذخیره شد";

                header("Location:" . URL);
            }
        } else {
            echo "error";
        }
    }
}
