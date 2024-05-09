<?php
class model_register extends Model
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
    public static function doSelect($sql, $values = array(), $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetchStyle);
        } else {
            $result = $stmt->fetch($fetchStyle);
        }

        return $result;
    }

    public static function doQuery($sql, $values = array())
    {
        $stmt = self::$conn->prepare($sql);

        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
    }
}


?>
