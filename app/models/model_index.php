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
        // if ($_POST['contactname'] == '') {
        //     echo json_encode(array(
        //         "msg" => 2,
        //         "status_code" =>  "302"
        //     ));
        // } else {
        //     $sql = " UPDATE `contact` SET `name` = ? WHERE `contactid` =?";
        //     $params = array($_POST['contactname'], $this->session_get('contactid'));
        //     $this->doQuery($sql, $params);
        //     echo json_encode(array(
        //         "msg" => 1,
        //         "status_code" =>  "302"
        //     ));
        // }
        //   $id=base64_decode($post['changenametable']) ; //مقدار رمز نگاری شده را رمز گشایی میکند
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
    //    $message = $post['message'];
    //    $contactid = $post['contactid'];
    //    for ($i = 0; $i < 1; $i++) {
    //       $sql = "INSERT INTO message (sendId, getId, text) VALUES (?, ?, ?)";
    //       $values = array($this->session_get('id'), $contactid, $message);
    //       $this->doQuery($sql, $values);
    //    }
    //    echo json_encode(array("msg" => "ok"));
    // }
    function contact_message($post)
    {
        $message = $post['message'];
        $contactid = $post['contactid'];

        $sql = "SELECT * FROM message WHERE sendId=? AND getId=? AND text=?";
        $params = array($_SESSION['id'], $contactid, $message);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0) {
            echo json_encode(array("msg" => "This message already exists in the database."));
        } else {
            $sql = "INSERT INTO message (sendId, getId, text, DateSend) VALUES (?, ?, ?, ?)";
            $values = array($_SESSION['id'], $contactid, $message, self::jalali_date("Y/m/d H:i:s"));
            $this->doQuery($sql, $values);

            // Determine the color based on sender and receiver
            $senderColor = 'blue';
            $receiverColor = 'green';

            echo json_encode(array(
                "msg" => "Message inserted successfully.",
                "senderColor" => $senderColor,
                "receiverColor" => $receiverColor
            ));
        }
    }
    // function loadMessages($contactId)
    // {
    //     $userId = $this->session_get('id');

    //     // Select messages between current user and the contact
    //     $sql = "SELECT * FROM message WHERE (sendId=? AND getId=?) OR (sendId=? AND getId=?) ORDER BY DateSend ASC";
    //     $params = array($userId, $contactId, $contactId, $userId);
    //     $result = $this->doSelect($sql, $params);

    //     if ($result) {
    //         $messages = array();
    //         foreach ($result as $row) {
    //             $senderId = $row['sendId'];
    //             $message = $row['text'];

    //             // Determine sender and receiver colors
    //             $senderColor = ($senderId == $userId) ? 'blue' : 'green';
    //             $receiverColor = ($senderId == $userId) ? 'green' : 'blue';

    //             $messages[] = array(
    //                 'sender_id' => $senderId,
    //                 'message' => $message,
    //                 'senderColor' => $senderColor,
    //                 'receiverColor' => $receiverColor
    //             );
    //         }

    //         echo json_encode(array(
    //             "status_code" => 200,
    //             "messages" => $messages
    //         ));
    //     } else {
    //         echo json_encode(array(
    //             "status_code" => 404,
    //             "error" => "No messages found"
    //         ));
    //     }
    // }

<<<<<<< HEAD
    function load_message($post)
=======

    function loadMessages($post)
>>>>>>> bf5db8bcf8d51cb61b6a74f1ef68799c13410770
    {
        $contactid = $post['contactid'];
        $userid = $_SESSION['id'];

        $sql = "SELECT * FROM message WHERE (sendId=? AND getId=?) OR ( sendId=? AND getId=? )";
        $params = array($userid, $contactid, $contactid, $userid);
        $arrayMessages = $this->doSelect($sql, $params);
        if (sizeof($arrayMessages) > 0) {
            echo json_encode(
                array(
                    "arrayMessages" => $arrayMessages,
                    "userid" => $userid,
                    "contactid" => $contactid

                )
            );
        }
    }
}
