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

<style>
	.liclass {
		display: flex;
		justify-content: space-between;
		flex-direction: row;
		width: 40px;
		height: 30px;
		align-items: center;
		color: white !important;
		border-bottom: 1px solid lightgray;
	}

	.aclass {
		background: unset;
		border: 0;

		font-size: 20px;
		color: white;
		cursor: pointer;
	}

	.active {
		/* background-color: #696bae; */
		background-color: #2d116e;
		color: white;
	}

	p {
		margin-bottom: 0px;
	}
</style>

<body>
	<div class="container-fluid h-100">
		<div class="row justify-content-center h-100">
			<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group" style="display: flex; justify-content: flex-start; flex-direction: row-reverse;" ;>
							<a href="#" id="plus"><i class="fa fa-plus-circle plus"></i></a>
							<a href="#" id="refresh"><i class="fa fa-refresh" style="font-size: 1.6rem; color: #82ccdd; margin-left: 10px; margin-top: 2px;"></i></a>
						</div>
					</div>

					<div class="card-body contacts_body" id="bodyside">
						<ul class="contacts" id="contact">

						</ul>
					</div>
					<!-- <div class="card-body contacts_body">
						<ui class="contacts">
							<ul id="refresh_list">

							</ul>
						</ui>
					</div> -->
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

	<div id="modal1">
		<div class="content">
			<form onsubmit="return false">
				<button  id="closeModal" onclick="closeModal()">X</button><br>
				<input type="text" placeholder="new name" id="newName" class="contact"><br>
				<button type="submit" id="changeName" class="contact" onclick="changeName(event)">change name</button><br>
				<span id="warning2" style="display:none;color:white;">b</span>
			</form>
		</div>
	</div>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/demo.js"></script>
	<!-- Script -->
	<script>
		$("#closeModal").click(function() {
			$("#Mymodal").hide();
		});

		function Checkphone(phone) {
			var regex = new RegExp("^(\\+98|0)?9\\d{9}$");
			var result = regex.test(phone);
			return result;
		}

		var modal = document.getElementById('Mymodal');
		var plus = document.getElementById('plus');
		var add = document.getElementById('add');
		var close = document.getElementById('close');
		var refresh = document.getElementById('refresh');
		document.getElementById('plus').onclick = function() {
			Mymodal.style.display = 'block';
		};
		jQuery(document).ready(function() {

			$.ajax({
				url: "<?= URL; ?>index/contact_data2",
				type: "POST",
				data: {},
				success: function(response) {
					response = JSON.parse(response);
					addContact(response.res);
				},
				error: function(response) {
					alert("errr 500");
				}
			});


		});


		function addHtmlElement($name) {
			var item = '<p>' + $name + '</p><button class="aclass" ><i class="fa fa-edit aclass" id="edit"  onclick=edit()></i> </button>';
			var li = $("<li ></li>").html(item);

			$("#bodyside ").children().append(li);
			$("li").addClass("liclass");
			
			document.getElementById('modal').style.display = 'none';
			close.onclick = function closeModal() {
            modal.style.display = 'none';
        };


        document.getElementById('closeModal').onclick = function closeModal1() {
            document.getElementById('modal1').style.display = 'none';
        };
		};

		function edit(event) {
			document.getElementById("newName").value = "";

			document.getElementById("warning2").style.display = "block";
			$("#warning2").text("event");
			document.getElementById("modal1").style.display = 'block';
		};

		refresh.onclick = function() {

			$.ajax({
				url: "<?= URL; ?>index/contact_data2",
				type: "POST",
				data: {},
				success: function(response) {
					response = JSON.parse(response);

					addContact(response.res);
				},
				error: function(response) {
					alert("err 500");
				}
			});
		};
		function changeName(event) {
            if (("#newName").value == "") {
                warning2.style.display = "block";
                $("#warning2").text("پر کردن تمامی فیلدها الزامیست");
            } else {
                event.parentNode.childNodes[1].value = ("#newName").value
            }

        }

		plus.onclick = function() {
			document.getElementById("name").value = "";
			document.getElementById("phone").value = "";
			document.getElementById("warning").style.display = "none";
			modal.style.display = 'block';
		};


		document.getElementById("name").onfocus = function() {
			document.getElementById("name").value = "";
			$("#warning").text("");
		};
		document.getElementById("phone").onfocus = function() {
			document.getElementById("phone").value = "";
			$("#warning").text("");
		};

		add.onclick = function() {
			var contactName = document.getElementById("name").value;
			var contactPhone = document.getElementById("phone").value;
			var warning = document.getElementById("warning");
			if (contactName == "" || contactPhone == "") {
				warning.style.display = "block";
				$("#warning").text("Please Fill In All Fields");
			} else if (Checkphone(contactPhone) == false) {
				warning.style.display = "block";
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
						if (response.status_code == "606") {
							warning.style.display = "block";
							$("#warning").text("This contact has already been added to the contact table with another name.");
						} else if (response.status_code == "101") {
							warning.style.display = "block";
							$("#warning").text("The Contact Does Not Have An Account");
						} else if (response.status_code == "404") {
							warning.style.display = "block";
							$("#warning").text("invite audience");

						} else if (response.status_code == "303") {

							warning.style.display = "block";
							$("#warning").text("This contact has already been added to the contacts table.");
						} else {
							Mymodal.style.display = "none";

							addHtmlElement(response.arrayres);


						}
					},
					error: function(response) {
						alert("error 500");
					}
				});

			};
		}
	</script>
</body>
</html>