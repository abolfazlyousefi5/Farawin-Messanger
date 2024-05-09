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
            $sql = "INSERT INTO loginform (username,password) VALUES (?,?)";
            $params = array($post['username'], md5($post['password']));
            $this->doQuery($sql, $params);

            echo "ok";
        } else {
            echo "error";
        }
    }
}
?>