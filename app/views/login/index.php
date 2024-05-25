<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= URL ?>">
    <link rel="stylesheet" href="public/css/style_login.css">
    <title>Login-form</title>
    <base href="<?= URL ?>">
</head>

<body>
    <form onsubmit="return false;">
        <div class="login">
            <h1>Login</h1>
            <form method="post">
                <input id="phone" type="text" name="phone" placeholder="Phone" required="required" />
                <input id="password" type="password" name="password" placeholder="Password" required="required" />
                <input id="btn" type="submit" value="send data" class="class=btn btn-primary btn-block btn-large">
                <br>
                <span id="showError"></span>
            </form>
        </div>
    </form>


    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script>
        $("#btn").on("click", function() {
            var phone = document.getElementById("phone").value;
            var password = document.getElementById("password").value;

            if (phone == "") {
                $("#showError").text("phone Is Empty")
            } else if (password == "") {
                $("#showError").text("Password Is Empty")
            } else {
                $.ajax({
                    url: " <?= URL; ?>login/check_data",
                    type: "POST",
                    data: {
                        "phone": phone,
                        "password": password
                    },
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status_code == "404") {
                            $("#showError").text("phone or Password Is Wrong")
                        } else {
                            window.location("<?= URL; ?>");
                        }
                    },
                    error: function(response) {
                        alert(response);
                    }
                })
                // alert("مشخصات با موفقیت ثبت شد");
            }
        });
    </script>
</body>

</html>