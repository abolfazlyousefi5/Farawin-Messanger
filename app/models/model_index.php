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
        $params = array($post['contactPhone']);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) == 0) {
            echo json_encode(
                array(
                    "msg" => "not found",
                    "status_code" => "404"
                )
            );
        } else if ($result[0]['id'] == $this->session_get('id')) {
            echo json_encode(array(
                "msg" => "youre user",
                "status_code" => "300"
            ));
        } else {
            $sql = "SELECT * FROM contact WHERE contactid=? AND userid=?";
            $params = array($result[0]['id'], $this->session_get('id'));
            $res = $this->doSelect($sql, $params);

            if (sizeof($res) != 0) {
                echo json_encode(
                    array(
                        "msg" => "contact already exists",
                        "status_code" => "405"
                    )
                );
            } else {
                $sql = "INSERT INTO contact (contactid, userid, name) VALUES (?,?,?)";
                $params = array($result[0]['id'], $this->session_get('id'), $post['contactName']);
                $this->doQuery($sql, $params);
                echo json_encode(
                    array(
                        "msg" => "ok",
                        "status_code" => "200",
                        "arrayres" => array(
                            "name" => $post['contactName'],
                            "contactid" => $result[0]['id']
                        )
                    )
                );
            }
        }
    }
    function get_contact_data()
    {
        $sql = "SELECT * FROM contact WHERE userid=?";
        $params = array($this->session_get('id'));
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) != 0) {
            // file_put_contents("meh.json",print_r( $res,true));
            echo json_encode(
                array(

                    "res" => $result

                )
            );
        } else {
            echo json_encode(
                array(

                    "msg" =>  "no",

                )
            );
        }
    }

    function update_data($post)
    {
        $id = $post['changenametable'];
        $sql = "UPDATE contact SET name=? where contactid=$id";
        $values = array($post['changename']);
        $this->doQuery($sql, $values);
        echo json_encode(
            array(
                "msg" => "ok"
            )
        );
    }

    // function contact_massage($post)
    // {
    //     $message = $post['message'];
    //     $contactid = $post['contactid'];

    //     // $sql = "SELECT * FROM message WHERE sendId=? AND getId=? AND text=?";
    //     // $params = array($_SESSION['id'], $contactid, $message);
    //     // $result = $this->doSelect($sql, $params);


    //     $sql = "INSERT INTO message (sendId, getId, text, DateSend) VALUES (?, ?, ?, ?)";
    //     $values = array($_SESSION['id'], $contactid, $message, self::jalali_date("Y/m/d H:i:s"));
    //     $this->doQuery($sql, $values);


    //     $sql = "SELECT * FROM message WHERE sendId=? AND getId=? ";
    //     $params = array($_SESSION['id'], $contactid);
    //     $result1 = $this->doSelect($sql, $params);

    //     $sql = "SELECT * FROM message WHERE sendId=? AND getId=? ";
    //     $params = array($contactid, $_SESSION['id']);
    //     $result2 = $this->doSelect($sql, $params);
    //     $result3 = array_merge($result1, $result2);
    //     sort($result3);
    //     // Determine the color based on sender and receiver
    //     // $senderColor = 'blue';  
    //     // $receiverColor = 'green'; 

    //     echo json_encode(array(
    //         "msg" => $result3,
    //         "msg2" => $_SESSION['id']
    //         // "senderColor" => $senderColor,
    //         // "receiverColor" => $receiverColor
    //     ));
    // }


    function contact_massage($post)
    {
        $message = $post['message'];
        $contactid = $post['contactid'];

        $sql = "INSERT INTO message (sendId, getId, text, DateSend) VALUES (?, ?, ?, ?)";
        $values = array($_SESSION['id'], $contactid, $message, self::jalali_date("Y/m/d H:i:s"));
        $this->doQuery($sql, $values);

        // دریافت پیام‌های ارسال شده توسط کاربر و مرتب‌سازی بر اساس ID

    }
    function refresh_message($post)
    {
        $contactid = $post['contactid'];
        $sql = "SELECT * FROM message WHERE sendId=? AND getId=? ORDER BY id";
        $params = array($_SESSION['id'], $contactid);
        $result1 = $this->doSelect($sql, $params);

        // دریافت پیام‌های دریافت شده توسط کاربر و مرتب‌سازی بر اساس ID
        $sql = "SELECT * FROM message WHERE sendId=? AND getId=? ORDER BY id";
        $params = array($contactid, $_SESSION['id']);
        $result2 = $this->doSelect($sql, $params);
        $result3 = array_merge($result1, $result2);
        echo json_encode(array(
            "msg" => $result3,
            "msg2" => $_SESSION['id']
        ));
    }
    function delete_message($post)
    {
        $messageId = $post['messageId'];
        $sql = "DELETE FROM message WHERE id=?";
        $params = array($messageId);
        $this->doQuery($sql, $params);
        echo json_encode(array(
            "msg" => "Message deleted successfully"
        ));
    }

    function edit_message($post)
    {
        $messageId = $post['messageId'];
        $newText = $post['newText'];
        $sql = "UPDATE message SET text=? WHERE id=?";
        $params = array($newText, $messageId);
        $this->doQuery($sql, $params);
        echo json_encode(array(
            "msg" => "Message updated successfully"
        ));
    }
}
