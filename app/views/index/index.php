<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat</title>
	<!-- base  -->
	<base href="<?= URL ?>">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<!-- Font awesome -->
	<link rel="stylesheet" href="public/css/font-awesome.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="public/css/index.css">
</head>

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group" style="display: flex; justify-content: flex-start; flex-direction: row-reverse;" ;>
							<a href="modal"><i class="fa fa-plus-circle plus"></i></a>
							<a href=""><i class="fa fa-refresh" style="font-size: 1.6rem; color: #82ccdd; margin-left: 10px; margin-top: 2px;"></i></a>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
							<li class="active">
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Khalid Charif</span>
										<p>Online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Chaymae Naim</span>
										<p>Left 7 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info">
										<span>Sami Rafi</span>
										<p>Online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Hassan Agmir</span>
										<p>Left 30 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info">
										<span>Abdou Chatabi</span>
										<p>Left 50 mins ago</p>
									</div>
								</div>
							</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							<div class="img_cont">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
								<span class="online_icon"></span>
							</div>
							<div class="user_info">
								<span>khalid Charif</span>
								<p>1767 Messages</p>
							</div>

						</div>

						<div class="action_menu">
							<ul>
								<li><i class="fa fa-user-circle"></i> View profile</li>
								<li><i class="fa fa-users"></i> Add to close friends</li>
								<li><i class="fa fa-plus"></i> Add to group</li>
								<li><i class="fa fa-ban"></i> Block</li>
							</ul>
						</div>
					</div>
					<div class="card-body msg_card_body">
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								Hi, how are you samim?
								<span class="msg_time">8:40 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Hi Khalid i am good tnx how about you?
								<span class="msg_time_send">8:55 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								I am good too, thank you for your chat template
								<span class="msg_time">9:00 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								You are welcome
								<span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								I am looking for your next templates
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								Ok, thank you have a good day
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
							</div>
						</div>
						<div class="d-flex justify-content-start mb-4">
							<div class="img_cont_msg">
								<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
							</div>
							<div class="msg_cotainer">
								Bye, see you
								<span class="msg_time">9:12 AM, Today</span>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="input-group">

							<div class="input-group-append">
								<span class="input-group-text send_btn"><i class="fa fa-location-arrow"></i></span>
							</div>
							<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fa fa-paperclip"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script src="public/js/jquery-3.4.1.min.js"></script> -->
	<script>
		function validatePhone(phone) {
			var regex = /^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$/;
			if (phone.match(phone)) {
				return true;
			} else {
				return false;
			}
		}

		function CheckPassword(inputtxt) {
			var passw = /^(?=^.{6,15}$)((?=.*[A-Za-z0-9])(?=.*[a-z]))^.*$/
			if (inputtxt.match(passw)) {
				return true;
			} else {
				return false;
			}
		}

		function CheckPhone(checkPhone) {

		}
		$("#btn").on("click", function() {
			var phone = document.getElementById("phone").value;
			if (!validatePhone(phone)) {
				$("#showError").text("The phone number is invalid");
				return false;
			} else
				return true;
		});

		$("#btn").on("click", function() {
			var phone = document.getElementById("phone").value;
			var password = document.getElementById("password").value;

			if (phone == "") {
				$("#showError").text("phone Is Empty")
			} else if (password == "") {
				$("#showError").text("Password Is Empty")
			} else if (!CheckPassword(password)) {
				alert("The password must be between 6 and 15 digits!")
			} else {
				$.ajax({
					url: " <?= URL; ?>index/contact_data",
					type: "POST",
					data: {
						"contactName": contactName,
						"contactPhone": contactPhone
					},
					success: function(response) {
						response = JSON.parse(response);
						if (response.status_code == "404") {
							alert("مخاطب وجود ندارد")
						} else {
							alert("مخاطب اضافه شد");
						}
					},
					error: function(response) {
						alert("Error");
					}
				})
			}
		});
	</script>
</body>

</html>