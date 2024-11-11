<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= URL; ?>">
    <link rel="stylesheet" href="public/css/style_register.css">
    <title>Register</title>
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
            <a>
                <span></span>
                <span></span>
                <input class="submit" id="submit" type="submit" value="Submit" style="background:none; font-size: 15px; border: none; border-radius: 6px; color:aliceblue; font-family:Arial, Helvetica, sans-serif; font-size:17px;">
                <span></span>
                <span></span>
            </a>
            <a href="https://localhost/Farawin-Messanger-master5/login/" class="beautiful-button">Do you have an account?</a>
            <br>
            <span id="#showError"></span>
        </form>
    </div>

    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script>
        function Checkphone(phone) {
            var regex = new RegExp("^(\\+98|0)?9\\d{9}$");
            var result = regex.test(phone);
            return result;
        }

        function CheckPassword(inputtxt) {
            var passw = /^(?=^.{6,15}$)((?=.*[A-Za-z0-9])(?=.*[a-z]))^.*$/;
            if (inputtxt.match(passw)) {
                return true;
            } else {
                return false;
            }
        }

        $(document).ready(function() {
            $('#submit').on('click', function() {
                var phone = $('#phone').val();
                var password = $('#password').val();
                var confirmPassword = $('#confirm-password').val();
                if (phone == "" || password == "" || confirmPassword == "") {
                    alert('Please Fill In All Fields');
                } else if (!Checkphone(phone)) {
                    alert('The phone number is invalid');
                } else if (password != confirmPassword) {
                    alert('Password and Confirm Password do not match');
                } else if (!CheckPassword(password)) {
                    alert("The password must be between 6 and 15 digits!")
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
                                alert("مشخصات با موفقیت ثبت شد");
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