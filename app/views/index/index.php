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
	<link rel="stylesheet" href="public/css/index-main.css">
</head>

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group" style="display: flex; justify-content: flex-start; flex-direction: row-reverse;" ;>
							<a href="#" id="plus"><i class="fa fa-plus-circle plus"></i></a>
							<a href="#" id="ref"><i class="fa fa-refresh" style="font-size: 1.6rem; color: #82ccdd; margin-left: 10px; margin-top: 2px;"></i></a>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
							<ul id="refresh_list">

							</ul>
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
	<div id="Mymodal" class="Mymodal">
		<div class="content">
			<button id="closeModal">X</button>
			<h2 class="h2-modal">Add Contact</h2>
			<form onsubmit="return false">
				<input type="text" placeholder="Name" id="name" class="contact"><br>
				<input type="text" placeholder="Phone" id="phone" class="contact" maxlength="11"><br>
				<button type="submit" id="add" class="contact">Add Contact</button><br>
				<span id="warning" style="color: white;display:none;">Massage Error</span>
			</form>
		</div>
	</div>







	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/demo.js"></script>
	<!-- Script -->
	<script>
		window.onload=refreshContactList();
		$("#closeModal").click(function() {
			$("#Mymodal").hide();
		});
		function refreshContactList() {
			var user_id = <?php echo Model::session_get('id'); ?>;
			var data 
			$.ajax({
				type:"GET",
				url:"<? URL; ?> index/get_contact_data",
				data: {
				},
				success:async function (response) {
					
				}
			})
		}

		function Checkphone(phone) {
			var regex = new RegExp("^(\\+98|0)?9\\d{9}$");
			var result = regex.test(phone);
			return result;
		}

		var modal = document.getElementById('Mymodal');
		var plus = document.getElementById('plus');
		var add = document.getElementById('add');
		plus.onclick = function() {
			Mymodal.style.display = 'block';
		};

		add.onclick = function() {
			var contactName = document.getElementById("name").value;
			var contactPhone = document.getElementById("phone").value;
			var warning1 = document.getElementById("warning");
			if (contactName == "" || contactPhone == "") {
				warning1.style.display = "block";
				$("#warning").text("Please Fill In All Fields");
			} else if (Checkphone(contactPhone) == false) {
				warning1.style.display = "block";
				alert("The Mobile Format Is Not Respected.")
			} else {
				$.ajax({
					url: "<?= URL; ?>index/contact_data",
					type: "POST",
					data: {
						"contactName": contactName,
						"contactPhone": contactPhone

					},
					success: function(response) {
						response = JSON.parse(response);
						if (response.status_code == "404") {
							Mymodal.style.display = "none";
							alert("The Contact Does Not Have An Account");
						} else {
							Mymodal.style.display = "none";
							alert("Contact Added");
							refreshed();
						}
					},
					error: function(response) {
						alert("error 500");
					}
				});

			};
		}
		var ref = document.getElementById("ref")
		function Myresult(names) {
			var Mytext = "";
			Mytext = Mytext + '<li>' + name + "<button id='btnedit'>fwfw</button>" + '</li>';
			return Mytext;
		}

		function refreshe() {
			$.ajax({
				url: "<?= URL; ?> index/get_contact_data",
				type: "POST",
				data: {

				},
				success: function(response) {
					response = JSON.parse(response);
					if (response.status_code == "900") {
						var d = response.msg;
						var names = [];
						for (i = 0; i < d.length; i++) {
							names.push(d[i]['name'])
						}
						var Myname = names;
						var result = document.getElementById('refresh_list');

						Myname.forEach(Myresult);
						result.innerHTML = ;
					}

				}
			}, )
		}
	</script>
</body>

</html>