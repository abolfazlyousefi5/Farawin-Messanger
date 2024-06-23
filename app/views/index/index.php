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
							<a href="#" id="plus"><i class="fa fa-plus-circle plus" onclick="plus()"></i></a>
							<a href="#" id="refresh"><i class="fa fa-refresh" style="font-size: 1.6rem; color: #82ccdd; margin-left: 10px; margin-top: 2px;"></i></a>
						</div>
					</div>

					<div class="card-body contacts_body" id="bodyside">
						<ul class="contacts" id="contact">

						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="col-md-8 col-xl-6 chat">
				<div class="card">
					<div class="card-header msg_head">
						<div class="d-flex bd-highlight">
							<div class="img_cont">
								<img src="public/images/user-default-image.jpg" class="rounded-circle user_img">
								<span class="online_icon"></span>
							</div>
							<div class="user_info">
								<span id="changeNam1"></span>
								<!-- <p>1767 Messages</p> -->
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
						<div class="d-flex justify-content-start mb-4" id="sender">

						</div>
						<div class="d-flex justify-content-end mb-4" id="receiver">

						</div>
					</div>
					<div class="card-footer">
						<div class="input-group">
							<div class="input-group-append" id="Massage_Send">
								<span class="input-group-text send_btn"><i class="fa fa-location-arrow"></i></span>
							</div>
							<textarea name="" class="form-control type_msg" placeholder="Type your message..." id="message"></textarea>
							<div class="input-group-append">
								<span class="input-group-text attach_btn"><i class="fa fa-paperclip"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	<div id="Mymodal">
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
				<button id="closeModal1" onclick="closeModal_btn()">X</button><br>
				<input type="text" placeholder="new name" id="newName" class="contact"><br>
				<button type="submit" id="changeName" class="contact" onclick="updateName(event)">change name</button>
				<span id="warning2" style="display:none;color:white;"></span>
			</form>
		</div>
	</div>
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/demo.js"></script>
	<!-- Script -->
	<script>
		//----------- close modal ad----------------------//*
		$("#closeModal").click(function() {
			$("#Mymodal").hide();
		});

		//----------- close modal edit----------------------//*

		function closeModal_btn() {
			document.getElementById('modal1').style.display = 'none';
		}


		//----------- check phone----------------------//*

		function Checkphone(phone) {
			var regex = new RegExp("^(\\+98|0)?9\\d{9}$");
			var result = regex.test(phone);
			return result;
		}

		var modal = document.getElementById('Mymodal');
		var plus = document.getElementById('plus');
		var add = document.getElementById('add');
		var close = document.getElementById('closeModal');
		var refresh = document.getElementById('refresh');

		//----------- refresh contact F5   ------------------//*

		$(document).ready(function() {
			$.ajax({
				url: "https://localhost/Farawin-Messanger-master5/index/get_contact_data",
				type: "POST",
				data: {},
				success: function(response) {
					if (typeof response !== "object") {
						response = JSON.parse(response);
					}
					if (response.res) {
						addContact(response.res);
					} else {
						// console.error("Parsing error: res is undefined in response", response);
						alert("Parsing error: res is undefined in response");
					}
				},
				error: function(xhr, status, error) {
					alert("Error: " + error);
					console.error("AJAX Error: ", status, error);
				}
			});
		});

		$(document).on('click', '.contact-item', function() {
			$('.contact-item').removeClass('active');
			$(this).addClass('active');
		});

		function edit() {
			var contactElement = window.event.target.closest("li");
			var contactName = contactElement.querySelector("p").textContent;
			document.getElementById("modal1").style.display = "block";
		}


		function addContact(res) {
			$("#bodyside ").children().empty();
			$("#contact ").children().empty();
			for (let i = 0; i < res.length; i++) {
				// console.log(res[i]['name'] + res[i]['contactid']);
				addHtmlElement(res[i]['name'], res[i]['contactid']);
			}
		};
		$("#changeName").click(function() {
			if ($("#newName").val() == "") {
				warning2.style.display = "block";
				$("#warning2").text("پر کردن تمامی فیلدها الزامیست");
			} else {
				var changename = $("#newName").val();

				$("li.active").children("p.name").text(changename);
				$("#changeNam1").text(changename);
				// شروع : تغییر دادن در جدول مخاطبین 
				// console.log($("li.active").children("p.id").text());
				var changenametable = $("li.active").children("p.id").text();

				$.ajax({
					url: "<?= URL; ?>index/update_data",
					type: "POST",
					data: {
						"changename": changename,
						"changenametable": changenametable
					},
					success: function(response) {
						response = JSON.parse(response);
					},
					error: function(response) {
						alert("خطای 500");
					}
				});

				document.getElementById("modal1").style.display = 'none';

			}
		});

		function sendMassage(contactid, message) {
			$.ajax({
				url: "<?= URL; ?>index/contact_massage",
				type: "POST",
				data: {
					"contactid": contactid,
					"message": message
				},
				cache: false,
				success: function(response) {
					response = JSON.parse(response);
					if (response.msg == "ok") {
						// Message sent successfully, update UI
						var messageContainer = '<div class="d-flex justify-content-end mb-4">' +
							'<div class="msg_cotainer_send">' +
							message +
							'<span class="msg_time_send">Sent just now</span>' +
							'</div>' +
							'<div class="img_cont_msg">' +
							'<img src="public/images/user-default-image.jpg" class="rounded-circle user_img_msg">' +
							'</div>' +
							'</div>';
						$('.msg_card_body').append(messageContainer);
						$("#message").val(""); // Clear input after sending
					} else {
						alert("Failed to send message");
					}
				},
				error: function(response) {
					alert("Error sending message");
				}
			});
		}

		function displayMessage(response) {
			if (response.sender == 'you') {
				var messageElement = $('<div></div>').addClass('sender-message').text(response.message);
				$('#sender').append(messageElement);
			} else {
				var messageElement = $('<div></div>').addClass('receiver-message').text(response.message);
				$('#receiver').append(messageElement);
			}
		}




		function addHtmlElement($name, $changeid) {
			// بررسی وجود $name
			if (!$name) {
				$name = "Unknown";
			}

			var item = '<p class="id">' + $changeid + '</p><p class="name">' + $name + '</p><button class="aclass"><i class="fa fa-edit aclass" id="edit" onclick="edit()"></i></button>';
			var li = $("<li></li>").html(item);
			$("#contact").append(li);
			$("li").addClass("liclass");
			$("li").children(".id").hide();
			$("#modalAdd").css("display", "none");

			$("li.liclass").click(function() {
				$(this).addClass("active").css({
					opacity: 0.5
				}).siblings().removeClass("active");
				var Nam = $("li.active").children("p.name").text();
				$("#changeNam1").text(Nam);
				var contactid = $("li.active").children("p.id").text();

				// تعریف وضعیت ارسال پیام
				var isMessageSent = false;
				$("#Massage_Send").off('click').on('click', function() {
					if (!isMessageSent) {
						var message = $("#message").val();
						sendMassage(contactid, message);
						isMessageSent = true;
					}
				});
			});
		}

		// function edit(event) {
		// 	var contactElement = event.target.closest("li");
		// 	var contactName = contactElement.querySelector("p").textContent;
		// 	document.getElementById("newName").value = contactName;
		// 	document.getElementById("modal1").style.display = "block";
		// }


		// function closeModal() {
		// 	document.getElementById('modal1').style.display = 'none';
		// }


		// ----------- close modal edit----------------------//*
		// function edit(event) {
		// 	var newName = document.getElementById("newName").value = "";
		// 	document.getElementById("warning2").style.display = "block";
		// 	$("#warning2").text("change name");
		// 	document.getElementById("modal1").style.display = 'block';
		// 	if (newName) {
		// 		var contactName = event.target.parentNode.querySelector('.contact-name').textContent; // دریافت نام فعلی مخاطب
		// 		$.ajax({
		// 			url: "<?= URL; ?>index/update_data",
		// 			type: "POST",
		// 			data: {
		// 				"contactName": contactName,
		// 				"newName": newName
		// 			},
		// 			success: function(response) {
		// 				if (response === "success") {
		// 					event.target.parentNode.querySelector('.contact-name').textContent = newName; // به‌روزرسانی نام مخاطب در ویو
		// 					alert("Name updated successfully!");
		// 				} else {
		// 					alert("Error updating name.");
		// 				}
		// 			},
		// 			error: function(response) {
		// 				alert("Error updating name.");
		// 			}
		// 		});
		// 	}
		// }

		// function refresh () {
		// 	$.ajax({
		// 		url: "<?= URL; ?>index/edit_data",
		// 		type: "POST",
		// 		data: {},
		// 		success: function(response) {
		// 			response = JSON.parse(response);
		// 			addContact(response.res);
		// 		},
		// 		error: function(response) {
		// 			alert("خطای 500");
		// 		}
		// 	});
		// };
		// refresh.onclick();



		refresh.onclick = function() {
			$.ajax({
				url: "<?= URL; ?>index/get_contact_data",
				type: "POST",
				data: {},
				success: function(response) {
					try {
						response = JSON.parse(response);
						addContact(response.msg); // اصلاح شده از response.res به response.msg
					} catch (e) {
						console.error("Parsing error:", e);
						alert("Error parsing JSON response");
					}
				},
				error: function(response) {
					alert("خطای 500");
				}
			});
		};



		plus.onclick = function() {
			document.getElementById("name").value = "";
			document.getElementById("phone").value = "";
			document.getElementById("warning").style.display = "none";
			Mymodal.style.display = 'block';
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
						try {
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
								warning.style.display = "block";
								addHtmlElement(response.arrayres.name); // اصلاح شده
							}
						} catch (e) {
							console.error("Parsing error:", e);
							alert("Error parsing JSON response");
						}
					},
					error: function(response) {
						alert("error 500");
					}
				});
			}
		};
	</script>
</body>

</html>