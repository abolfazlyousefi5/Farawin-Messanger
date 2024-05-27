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
        <h2>Register</h2>
        <form onsubmit="return false;">
            <div class="user-box">
                <input type="text" id="phone" name="phone" required>
                <label for="phone">Phone:</label>
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
                <input class="submit" id="submit" type="submit" value="Submit" style="background:none; font-size: 15px; border: none; border-radius: 6px; color:aliceblue; font-family:Arial, Helvetica, sans-serif; font-size:17px;">
                <span></span>
                <span></span>
            </a>
            <a href="https://localhost/farawin-Messanger-master/login" class="beautiful-button">Do you have an account?</a>
            <br>
            <span id="#showError"></span>
        </form>
    </div>

    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script>
        function validatePhone(phone) {
            var regex = /^[0-9]{1,11}$/;
            return regex.test(phone);
        }
        $('#submit').on('click', function() {
            var phone = $('#phone').val();
            if (!validatePhone(phone)) {
                alert('The phone number is invalid');
                return false;
            } else
                return true;
        });
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
                                window.location = "<?= URL; ?> login";
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