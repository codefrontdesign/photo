<html>
<head>

	<title>Photo Site</title>
	<link rel='shortcut icon' href='res/icon.png' />

	<link rel='stylesheet' type='text/css' href='css/index.css' />

</head>
<body>

	<!-- main view -->
	<div id='doc'>
	doc
		<div id='header'>
		header
			<div id='banner'>
			banner
				<div id='banner_slides'>Banner Slides</div>		
			</div>
			<div id='title'>PHOTO STUDIO WEBSITE</div>
			<div id='member'>
			member
				<div id='member_form'>
					<!-- members login form and functions -->
					Member Login<br />
					Member functions
				</div>
			</div>
			<div id='links'> link / link / link / link</div>
		</div>
		<div id='body'>
			<div id='galleries'>
				<div class='my_galleries'><!-- private -->
					my galleries
					<div class='my_requested_photos'>my requested photos</div>
				</div>
				<div class='sample_gallery'>sample gallery</div><!-- public -->
			</div>
			<div id='feed'>feed
				<div id='feed_container'>feed container
					<!-- feed is populated by PHP, included here -->
				</div>
			</div>
			<div id='info'>info
				<div id='about'>about
					<!-- PHP -->
				</div>
				<div id='contact'>contact
					<!-- PHP -->
				</div>
			</div>
			<div id='public_schedule'>public schedule</div><!-- schedule will show occupied dates and times, but no specific customer information. -->
		</div>
		<div id='footer'>Citations/Links/Footer</div>
	</div>

	<!-- administrative panel -->
	<div id='admin'>
		<!-- This is going to need some serious protection, VWS was lacking in actual security -->
		<!-- Firebug could pull up that panel if someone really wanted to use it. -->
		<!-- Panel functions all need to be walled off by a session check. -->
		<!-- start session on login, if session==admin allow panel visibility and functions. -->
		<div id='admin_panel'>
			<div id='admin_post'>
				<div id='admin_post_schedule'></div>
				<div id='admin_post_feed'></div>
				<div id='admin_post_image'></div>
			</div>
			<div id='admin_edit'>
				<div id='admin_edit_schedule'></div>
				<div id='admin_edit_feed'></div>
				<div id='admin_edit_gallery'></div>
				<div id='admin_edit_about'></div>
				<div id='admin_edit_contact'></div>
			</div>
		</div>
	</div>

	<!-- scripts -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/index.js'></script>

</body>
</html>
