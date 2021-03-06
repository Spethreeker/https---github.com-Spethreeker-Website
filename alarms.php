<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="initial-scale=1">
	<title>Alarm Systems - Protech</title>
	<link rel="stylesheet" href="css/bulma.css" media="screen" title="no title" type="text/css">
	<link rel="icon" type="image/png" href="images/logos/32x32.png">
	<script src="https://use.fontawesome.com/7b542c7aed.js"></script>
</head>
<body>
<?php include 'includes/navbar.inc';?>

	<br>
	<div class="container has-text-centered">
		<h1 class="title is-2 has-text-centered">Security systems today can do more than ever.</h1><p class="subtitle is-4 has-text-centered">And we know everything they can do.</p>		
				<div class="notification is-success">					
					<div class="columns is-gapless higher">
						<div class="column notification is-light">
							<div class="notification is-light" id="morepadding">
								<button class="iphone-features alarms-clicked" id="control-description"><h1 class="title">Control your system from anywhere.</h1><p class="subtitle">Keep an eye on your home or buisness at all times with the Alarm.com App on iPhone and Android.</p>
								<img class="is-hidden-desktop" src="images/alarm/iphone_control.png"></button><hr>

								
								<button class="iphone-features" id="locks-description">
								<h1 class="title">Unlock your home, no keys required.</h1><p class="subtitle">No more leaving a key under the mat.</p>
								<img class="is-hidden-desktop" src="images/alarm/iphone_locks.png"></button><hr>

								
								<button class="iphone-features" id="arming-description">
								<h1 class="title">Arm or disarm your system anytime.</h1><p class="subtitle">One less code you have to remeber.</p>
								<img class="is-hidden-desktop" src="images/alarm/iphone_arming_disarmed.png"></button>
								

							</div>
						</div>
						<div class="column is-half notification is-success is-hidden-touch">
							<div id="iphone-picture">
							</div>							
							
						</div>
						
					</div><hr>
					<div class="columns">
					<div class="column notification is-light">
					</div>			

					</div>
				</div>
				
			
	</div>
 
 
<hr class="is-marginless">
<footer class="hero is-dark is-bold">
    <div class="">
        <div class="container">
            <div class="columns is-mobile is-multiline">
                <div class="column">
                    <h2 class="subtitle is-marginless menu-label">In-Store Services</h2>
                    <ul class="menu-list desc">
                        <li><a href="instore/cleaning.html">PC and Mac Cleaning</a></li>
                        <li><a  href="instore/computer_repair.html">Macbook and Laptop Repair</a></li>
                        <li><a >PC and Mac Repair</a></li>
                        <li><a  href="instore/troubleshooting.html">Troubleshooting</a></li>

                    </ul>
                </div>
                <div class="column">
                    <h2 class="subtitle is-marginless menu-label">Home and Buisness Services</h2>
                    <ul class="menu-list desc">
                        <li> <a class="desc" href="../alarms.html">Alarm Systems</a></li>
                    </ul>
                </div>
            </div>
        </div>
<hr>
        <div class="level">
            <div class="level-item has-text-centered">662-545-3465 &#8901; 109 South Davis Avenue &#8901; Cleveland, Mississippi </div>
            <div class="level-item has-text-centered">
                <img src="../images/payments.png" />
                <img src="../images/delllogo.png" />
            </div>
             <div class="level-item has-text-centered">
                <p>MS License Number #15025806</p>
            </div>
            <div class="level-item has-text-centered">
                <p>&copy; Protech LLC 2016</p>
            </div>
        </div>

</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>



</body>
	
	<script type="text/javascript">	
		function navtoggle() {
        var d = document.getElementById("navbar");
        var e = document.getElementById("navtoggle");
        if (d.classList.contains("is-active")) {
            d.classList.remove("is-active");
            e.classList.remove("is-active");
        } else {
            d.classList.add("is-active");
            e.classList.add("is-active");
        }
    }
	</script>
	<script type="text/javascript">
		$("#control-description").on('click', function(a) {
			$(".iphone-features").removeClass('alarms-clicked');
			$("#control-description").toggleClass('alarms-clicked');
			var e = document.getElementById("iphone-picture").style.backgroundImage = "url('images/alarm/iphone_control.png')";
		})
	</script>
	<script type="text/javascript">
		$("#locks-description").on('click', function(a) {
			$(".iphone-features").removeClass('alarms-clicked');
			$("#locks-description").toggleClass('alarms-clicked');
		var e = document.getElementById("iphone-picture").style.backgroundImage = "url('images/alarm/iphone_locks.png')";
	    })
	</script>
	<script type="text/javascript">
		$("#arming-description").on('click', function(a) {
			$(".iphone-features").removeClass('alarms-clicked');
			$("#arming-description").toggleClass('alarms-clicked');
		var e = document.getElementById("iphone-picture").style.backgroundImage = "url('images/alarm/iphone_arming_disarmed.png')";
	    })
	</script>
		
	</html>
