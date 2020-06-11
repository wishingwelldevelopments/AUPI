<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="res/app-master.css" type="text/css" charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
		<title>AUPI Dashboard</title>
	</head>
	<?php
		session_start();
		if(!isset($_SESSION['UID'])){
			header("Location: auth.php");
		}
	?>
	<body>
		<div class="navigation">
			<div class="container">
				<div class="items-left">
					<a href="#" id="station-info" class="active">Station Info</a>	
					<a href="#" id="alert-settings">Alert Settings</a>	
					<a href="https://apps.des.qld.gov.au/air-quality/xml/feed.php">API</a>	
					<a href="https://github.com/swinb0/AUPI/">Source</a>	
				</div>	
				<div class="items-right">
					<h1 id="welcome"><?php echo $_SESSION['UserEmail'] ?></h1>
					<a href="logout.php">Logout</a>	
				</div>	
			</div>
		</div>
		<div class="workspace">
			<div class="title">
				<h1>Database Filter</h1>
				<p>All Stations Online</p>
			</div>
			<form action="" method="post" class="station-select">
				<select name="stations" id="stations">
				<option value="nill">Please Select a Station</option>
				<option value="Central-Queensland-Emerald">Central Queensland - Emerald</option>
				<option value="Central-Queensland-Blackwater">Central Queensland - Blackwater</option>
				<option value="Central-Queensland-West-Mackay">Central Queensland - West Mackay</option>
				<option value="Central-Queensland-Moranbah">Central Queensland - Moranbah</option>
				<option value="Central-Queensland-Test">Central Queensland - Nebo</option>
				<option value="Central-Queensland-Test1">Central Queensland - Wolfang</option>
				<option value="Gladstone-Clinton">Gladstone - Clinton</option>
				<option value="Gladstone-Fishermans-Landing">Gladstone - Fisherman's Landing</option>
				<option value="Gladstone-South-Gladstone">Gladstone - South Gladstone</option>
				<option value="Gladstone-Boat-Creek">Gladstone - Boat Creek</option>
				<option value="Gladstone-Boyne-Island">Gladstone - Boyne Island</option>
				<option value="Gladstone-Targinie">Gladstone - Targinie</option>
				<option value="Gladstone-Auckland-Point">Gladstone - Auckland Point</option>
				<option value="Mount-Isa-The-Gap">Mount Isa - The Gap</option>
				<option value="Mount-Isa-Menzies">Mount Isa - Menzies</option>
				<option value="South-East-Queensland-Flinders-View">South East Queensland - Flinders View</option>
				<option value="South-East-Queensland-North-Maclean">South East Queensland - North Maclean</option>
				<option value="South-East-Queensland-Wynnum">South East Queensland - Wynnum</option>
				<option value="South-East-Queensland-Wynnum-West">South East Queensland - Wynnum West</option>
				<option value="South-East-Queensland-Southport">South East Queensland - Southport</option>
				<option value="South-East-Queensland-Mutdapilly">South East Queensland - Mutdapilly</option>
				<option value="South-East-Queensland-Springwood">South East Queensland - Springwood</option>
				<option value="South-East-Queensland-South-Brisbane">South East Queensland - South Brisbane</option>
				<option value="South-East-Queensland-Brisbane-CBD">South East Queensland - Brisbane CBD</option>
				<option value="South-East-Queensland-Woolloongabba">South East Queensland - Woolloongabba</option>
				<option value="South-East-Queensland-Rocklea">South East Queensland - Rocklea</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Cannon-Hill">South East Queensland - Cannon Hill</option>
				<option value="South-East-Queensland-Lytton">South East Queensland - Lytton</option>
				<option value="South-East-Queensland-Mountain-Creek">South East Queensland - Mountain Creek</option>
				<option value="South-East-Queensland-Hopeland">South East Queensland - Hopeland</option>
				<option value="South-East-Queensland-Miles-Airport">South East Queensland - Miles Airport</option>
				<option value="South-East-Queensland-Upper-Humbug">South East Queensland - Upper Humbug</option>
				<option value="Townsville-Lennon-Drive">Townsville - Lennon Drive</option>
				<option value="Townsville-Coast-Guard">Townsville - Coast Guard</option>
				<option value="Townsville-North-Ward">Townsville - North Ward</option>
				</select>
				<input type="submit" id="search-btn" value="Search">
			</form>
			<div class="html-inject">
				<div class="unselected"><img src="res/search.png" alt=""/><p>Please Select a Station to Begin</p></div>
			</div>
		</div>
		<div class="workspace1">
			<h1>Alert Setup</h1>	
			<p>You May Select Upto 3 Stations To Recieve Alerts From</p>
			<div class="alert-select">
				<select name="stations" class="alert-stations">
				<option value="nill">Please Select a Station</option>
				<option value="Central-Queensland-Emerald">Central Queensland - Emerald</option>
				<option value="Central-Queensland-Blackwater">Central Queensland - Blackwater</option>
				<option value="Central-Queensland-West-Mackay">Central Queensland - West Mackay</option>
				<option value="Central-Queensland-Moranbah">Central Queensland - Moranbah</option>
				<option value="Central-Queensland-Test">Central Queensland - Nebo</option>
				<option value="Central-Queensland-Test1">Central Queensland - Wolfang</option>
				<option value="Gladstone-Clinton">Gladstone - Clinton</option>
				<option value="Gladstone-Fishermans-Landing">Gladstone - Fisherman's Landing</option>
				<option value="Gladstone-South-Gladstone">Gladstone - South Gladstone</option>
				<option value="Gladstone-Boat-Creek">Gladstone - Boat Creek</option>
				<option value="Gladstone-Boyne-Island">Gladstone - Boyne Island</option>
				<option value="Gladstone-Targinie">Gladstone - Targinie</option>
				<option value="Gladstone-Auckland-Point">Gladstone - Auckland Point</option>
				<option value="Mount-Isa-The-Gap">Mount Isa - The Gap</option>
				<option value="Mount-Isa-Menzies">Mount Isa - Menzies</option>
				<option value="South-East-Queensland-Flinders-View">South East Queensland - Flinders View</option>
				<option value="South-East-Queensland-North-Maclean">South East Queensland - North Maclean</option>
				<option value="South-East-Queensland-Wynnum">South East Queensland - Wynnum</option>
				<option value="South-East-Queensland-Wynnum-West">South East Queensland - Wynnum West</option>
				<option value="South-East-Queensland-Southport">South East Queensland - Southport</option>
				<option value="South-East-Queensland-Mutdapilly">South East Queensland - Mutdapilly</option>
				<option value="South-East-Queensland-Springwood">South East Queensland - Springwood</option>
				<option value="South-East-Queensland-South-Brisbane">South East Queensland - South Brisbane</option>
				<option value="South-East-Queensland-Brisbane-CBD">South East Queensland - Brisbane CBD</option>
				<option value="South-East-Queensland-Woolloongabba">South East Queensland - Woolloongabba</option>
				<option value="South-East-Queensland-Rocklea">South East Queensland - Rocklea</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Cannon-Hill">South East Queensland - Cannon Hill</option>
				<option value="South-East-Queensland-Lytton">South East Queensland - Lytton</option>
				<option value="South-East-Queensland-Mountain-Creek">South East Queensland - Mountain Creek</option>
				<option value="South-East-Queensland-Hopeland">South East Queensland - Hopeland</option>
				<option value="South-East-Queensland-Miles-Airport">South East Queensland - Miles Airport</option>
				<option value="South-East-Queensland-Upper-Humbug">South East Queensland - Upper Humbug</option>
				<option value="Townsville-Lennon-Drive">Townsville - Lennon Drive</option>
				<option value="Townsville-Coast-Guard">Townsville - Coast Guard</option>
				<option value="Townsville-North-Ward">Townsville - North Ward</option>
				</select>

				<select name="ratings" class="alert-stations">
				<option value="nill">Please Select a Rating</option>
				<option value="1">Very Good</option>
				<option value="2">Good</option>
				<option value="3">Fair</option>
				<option value="4">Poor</option>
				<option value="5">Very Poor</option>
				</select>
				<select name="stations" class="alert-stations">
				<option value="nill">Please Select a Station</option>
				<option value="Central-Queensland-Emerald">Central Queensland - Emerald</option>
				<option value="Central-Queensland-Blackwater">Central Queensland - Blackwater</option>
				<option value="Central-Queensland-West-Mackay">Central Queensland - West Mackay</option>
				<option value="Central-Queensland-Moranbah">Central Queensland - Moranbah</option>
				<option value="Central-Queensland-Test">Central Queensland - Nebo</option>
				<option value="Central-Queensland-Test1">Central Queensland - Wolfang</option>
				<option value="Gladstone-Clinton">Gladstone - Clinton</option>
				<option value="Gladstone-Fishermans-Landing">Gladstone - Fisherman's Landing</option>
				<option value="Gladstone-South-Gladstone">Gladstone - South Gladstone</option>
				<option value="Gladstone-Boat-Creek">Gladstone - Boat Creek</option>
				<option value="Gladstone-Boyne-Island">Gladstone - Boyne Island</option>
				<option value="Gladstone-Targinie">Gladstone - Targinie</option>
				<option value="Gladstone-Auckland-Point">Gladstone - Auckland Point</option>
				<option value="Mount-Isa-The-Gap">Mount Isa - The Gap</option>
				<option value="Mount-Isa-Menzies">Mount Isa - Menzies</option>
				<option value="South-East-Queensland-Flinders-View">South East Queensland - Flinders View</option>
				<option value="South-East-Queensland-North-Maclean">South East Queensland - North Maclean</option>
				<option value="South-East-Queensland-Wynnum">South East Queensland - Wynnum</option>
				<option value="South-East-Queensland-Wynnum-West">South East Queensland - Wynnum West</option>
				<option value="South-East-Queensland-Southport">South East Queensland - Southport</option>
				<option value="South-East-Queensland-Mutdapilly">South East Queensland - Mutdapilly</option>
				<option value="South-East-Queensland-Springwood">South East Queensland - Springwood</option>
				<option value="South-East-Queensland-South-Brisbane">South East Queensland - South Brisbane</option>
				<option value="South-East-Queensland-Brisbane-CBD">South East Queensland - Brisbane CBD</option>
				<option value="South-East-Queensland-Woolloongabba">South East Queensland - Woolloongabba</option>
				<option value="South-East-Queensland-Rocklea">South East Queensland - Rocklea</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Cannon-Hill">South East Queensland - Cannon Hill</option>
				<option value="South-East-Queensland-Lytton">South East Queensland - Lytton</option>
				<option value="South-East-Queensland-Mountain-Creek">South East Queensland - Mountain Creek</option>
				<option value="South-East-Queensland-Hopeland">South East Queensland - Hopeland</option>
				<option value="South-East-Queensland-Miles-Airport">South East Queensland - Miles Airport</option>
				<option value="South-East-Queensland-Upper-Humbug">South East Queensland - Upper Humbug</option>
				<option value="Townsville-Lennon-Drive">Townsville - Lennon Drive</option>
				<option value="Townsville-Coast-Guard">Townsville - Coast Guard</option>
				<option value="Townsville-North-Ward">Townsville - North Ward</option>
				</select>

				<select name="ratings" class="alert-stations">
				<option value="nill">Please Select a Rating</option>
				<option value="1">Very Good</option>
				<option value="2">Good</option>
				<option value="3">Fair</option>
				<option value="4">Poor</option>
				<option value="5">Very Poor</option>
				</select>
				<select name="stations" class="alert-stations">
				<option value="nill">Please Select a Station</option>
				<option value="Central-Queensland-Emerald">Central Queensland - Emerald</option>
				<option value="Central-Queensland-Blackwater">Central Queensland - Blackwater</option>
				<option value="Central-Queensland-West-Mackay">Central Queensland - West Mackay</option>
				<option value="Central-Queensland-Moranbah">Central Queensland - Moranbah</option>
				<option value="Central-Queensland-Test">Central Queensland - Nebo</option>
				<option value="Central-Queensland-Test1">Central Queensland - Wolfang</option>
				<option value="Gladstone-Clinton">Gladstone - Clinton</option>
				<option value="Gladstone-Fishermans-Landing">Gladstone - Fisherman's Landing</option>
				<option value="Gladstone-South-Gladstone">Gladstone - South Gladstone</option>
				<option value="Gladstone-Boat-Creek">Gladstone - Boat Creek</option>
				<option value="Gladstone-Boyne-Island">Gladstone - Boyne Island</option>
				<option value="Gladstone-Targinie">Gladstone - Targinie</option>
				<option value="Gladstone-Auckland-Point">Gladstone - Auckland Point</option>
				<option value="Mount-Isa-The-Gap">Mount Isa - The Gap</option>
				<option value="Mount-Isa-Menzies">Mount Isa - Menzies</option>
				<option value="South-East-Queensland-Flinders-View">South East Queensland - Flinders View</option>
				<option value="South-East-Queensland-North-Maclean">South East Queensland - North Maclean</option>
				<option value="South-East-Queensland-Wynnum">South East Queensland - Wynnum</option>
				<option value="South-East-Queensland-Wynnum-West">South East Queensland - Wynnum West</option>
				<option value="South-East-Queensland-Southport">South East Queensland - Southport</option>
				<option value="South-East-Queensland-Mutdapilly">South East Queensland - Mutdapilly</option>
				<option value="South-East-Queensland-Springwood">South East Queensland - Springwood</option>
				<option value="South-East-Queensland-South-Brisbane">South East Queensland - South Brisbane</option>
				<option value="South-East-Queensland-Brisbane-CBD">South East Queensland - Brisbane CBD</option>
				<option value="South-East-Queensland-Woolloongabba">South East Queensland - Woolloongabba</option>
				<option value="South-East-Queensland-Rocklea">South East Queensland - Rocklea</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Deception-Bay">South East Queensland - Deception Bay</option>
				<option value="South-East-Queensland-Cannon-Hill">South East Queensland - Cannon Hill</option>
				<option value="South-East-Queensland-Lytton">South East Queensland - Lytton</option>
				<option value="South-East-Queensland-Mountain-Creek">South East Queensland - Mountain Creek</option>
				<option value="South-East-Queensland-Hopeland">South East Queensland - Hopeland</option>
				<option value="South-East-Queensland-Miles-Airport">South East Queensland - Miles Airport</option>
				<option value="South-East-Queensland-Upper-Humbug">South East Queensland - Upper Humbug</option>
				<option value="Townsville-Lennon-Drive">Townsville - Lennon Drive</option>
				<option value="Townsville-Coast-Guard">Townsville - Coast Guard</option>
				<option value="Townsville-North-Ward">Townsville - North Ward</option>
				</select>

				<select name="ratings" class="alert-stations">
				<option value="nill">Please Select a Rating</option>
				<option value="1">Very Good</option>
				<option value="2">Good</option>
				<option value="3">Fair</option>
				<option value="4">Poor</option>
				<option value="5">Very Poor</option>
				</select>
				<a href="#" id="save-settings">Save</a>	
			</div>
		</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('#alert-settings').click(function(e){
				e.preventDefault();
				$(this).addClass('active');
				$('#station-info').removeClass('active');
				$('.workspace').css('display','none');
				$('.workspace1').css('display','block');
			});
			$('#station-info').click(function(e){
				e.preventDefault();
				$(this).addClass('active');
				$('#alert-settings').removeClass('active');
				$('.workspace').css('display','block');
				$('.workspace1').css('display','none');
			});
			$('form').on('submit', function(e){
				e.preventDefault();
				var select = document.getElementById("stations");
				var selectedValue = select.options[select.selectedIndex].value;
	
				if(selectedValue == "nill"){
					$('.html-inject').html('<div class="unselected"><img src="res/search.png" alt=""/><p>Please Select a Station to Begin</p></div>');
				}else{
					$.ajax({
					type: "POST",
					url: "server.php",
					data:
					{
						'SelectedValue' :selectedValue
					},
					success: function(data)
					{
						$('.html-inject').html(data);
					}
					});
				}
			});
		});
	</script>
	</body>
</html>
