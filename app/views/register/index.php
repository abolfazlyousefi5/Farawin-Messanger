<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= URL; ?>">
    <link rel="stylesheet" href="public/css/style_register.css">
    <title>Login</title>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form onsubmit="return false;">
            <div class="user-box">
                <input type="text" id="phone" name="phone" required>
                <label for="phone">phone:</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label for="password">Password:</label>
            </div>
            <div class="user-box">
                <input type="password" id="confirm-password" name="confirm-password" required>
                <label for="password">Confirm-Password:</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input class="submit" id="submit" type="submit" value="SUBMIT" style="background-color: #00a5f6; font-size: 15px; border: none; border-radius: 6px;">
            </a>
            <br>
            <span id="#showError"></span>
        </form>
    </div>

    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submit').on('click', function() {
                var phone = $('#phone').val();
                var password = $('#password').val();
                var confirmPassword = $('#confirm-password').val();

                if (phone == "" || password == "" || confirmPassword == "") {
                    alert('Please fill in all fields');
                } else if (password != confirmPassword) {
                    alert('Password and Confirm Password do not match');
                } else {
                    $.ajax({
                        url: "<?= URL; ?>register/insert_data",
                        type: 'POST',
                        data: {
                            "phone": phone,
                            "password": password,
                            "confirm_password": confirmPassword
                        },
                        success: function(response) {
                            response = JSON.parse(response);
                            if (response.status_code == "404") {
                                $("#showError").text("phone or Password or confirm password Is Wrong")
                            } else {
                                window.location="<?= URL; ?>";
                            }
                        },
                        error: function(response) {
                            alert("Error");
                        }
                    });
                }
                
            });
        });
    </script>
</body>

</html>