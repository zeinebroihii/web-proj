<?php

include 'C:/xampp/htdocs/web/Controller/TicketC.php';

$error = "";

$ticketc = new TicketC();
    
$ticket = null;

if (
    isset($_GET['FirstName']) &&
    isset($_GET['LastName']) &&
    isset($_GET['NumTickets']) &&
    isset($_GET['CouponID']) &&
    isset($_GET['Event']) &&
    isset($_GET['PickupDate']) &&
    isset($_GET['PickupTime'])
) {
    if (
        !empty($_GET['FirstName']) &&
        !empty($_GET['LastName']) &&
        !empty($_GET['NumTickets']) &&
        !empty($_GET['CouponID']) &&
        !empty($_GET['Event']) &&
        !empty($_GET['PickupDate']) &&
        !empty($_GET['PickupTime'])
    ) {
        $ticket = new Ticket(
            $_GET['NumTickets'],
            $_GET['FirstName'],
            $_GET['LastName'],
            $_GET['CouponID'],
            $_GET['Event'],
            new DateTime($_GET['PickupDate']),
            new DateTime($_GET['PickupTime'])
        );
        $ticketc->addTicket($ticket);
        echo('Success');
    } else
        $error = "Missing information";
}


?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form method="get">
							<div class="form-header">
								<h2>Book Your Ticket</h2>
							</div>
							<div class="form-group">
								<input name = "NumTickets" id = "NumTickets" class="form-control" type="text" placeholder="Enter your Number of tickets">
								<span class="form-label">Number of Tickets</span>
							</div>
							<div class="form-group">
								<input name = "FirstName" id = "FirstName" class="form-control" type="text" placeholder="Enter your First Name">
								<span class="form-label">First Name</span>
							</div>
							<div class="form-group">
								<input name = "LastName" id = "LastName"class="form-control" type="tel" placeholder="Enter your Last Name">
								<span class="form-label">Last Name</span>
							</div>
							<div class="form-group">
								<input name = "CouponID" id = "CouponID" class="form-control" type="int" placeholder="Enter your Coupon">
								<span class="form-label">Coupon</span>
							</div>
							<div class="form-group">
								<select class="form-control" name = "Event" id = "Event" required>
									<option value="" label="&nbsp;" selected hidden></option>
									<option>Cheb Bechir</option>
									<option>Yanni</option>
									<option>Fashion Week</option>
								</select>
								<span class="select-arrow"></span>
								<span class="form-label">Events</span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name = "PickupDate" id = "PickupDate" type="date" required>
										<span class="form-label">Pickup Date</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name = "PickupTime" id = "PickupTime" type="time" required>
										<span class="form-label">Pickup Time</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button name = "submit" id = "submit" class="submit-btn">Pre-Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>