<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>HTML5 Demo</title>
		<meta name="description" content="HTML5 demonstration">
		<meta name="author" content="Sheldon Seale">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
	<!-- 
		To display the page, either load the HTML5 folder in the root directory of your server
		(local or remote) or follow Lynda's instructions (below) for making things work in Cloud9.
		To run from Cloud9, the following:
		1. All files in proper directories (I presume she means upload into your project)
		2. Open index.php 
		3. Select Run at the top right with the green arrow 
		4. Window will open below and Apache server will start 
		5. Copy and paste the URL address that shows in the window below where it says that Apache has started. 
		6. Open a new web page and paste the URL.
		That's it.
	-->
		<div class="container">
			<header>
				<h1>HTML5 Demo</h1>
			</header>
			<p>This empty index.php file will be the starting point of the HTML5 demo if you wish to work along.</p>
			<div class="col-sm-6">
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" style="margin-top: 10px;" for="testdate">Try Date</label>
					<input id="testdate" type="date" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="ffdate">Try jQ-UI Datepicker</label>
					<input id="ffdate" type="text" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="date_selected">You selected: </label>
					<input id="date_selected" type="text" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testtime">Try Time</label>
					<input id="testtime" type="time" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testdatetime">Try Date-Time(BS)</label>
					<input id="testdatetime" type="text" value="">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testurl">Try URL</label>
					<input id="testurl" type="url" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testemail">Try email</label>
					<input id="testemail" type="email" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testtel">Try Tel</label>
					<input id="testtel" type="tel" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testsearch">Try Search</label>
					<input class="rounded-corners" id="testsearch" type="search" value="">
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-4 fld-label" for="testnumber">Try Number</label>
					<input id="testnumber" type="number" class="number-padding" value="0">
				</div>
			</div>
			<div class="col-sm-12">
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-2 fld-label" for="rangevalue">Try Range</label>
					<input class="col-sm-1" id="rangevalue" type="text" value="">
					<div class="col-sm-4">
						<input id="testrange" type="range" value="0" max="100" min="-100" step="10" onchange="showRange()">
					</div>
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-2 fld-label" for="testcolor">Try Color</label>
					<input id="testcolor" type="color" value="#0080ff" onchange="colorChange()"><span id="colorspan"></span>
				</div>
				<div class="row" style="margin: 10px 0;">
					<label class="col-sm-2 fld-label" for="color_div">Color Box</label>
					<div id="color_div" class="col-sm-4" style="width: 250px; height: 200px; border: 1px solid black; background-color: #0080ff;"></div>
					<div class="col-sm-6" id="textareadiv">
						<textarea class="text-box" id="testtextarea" rows="9" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
					</div>
				</div>
				<div class="row">
					<label class="col-sm-2 fld-label" for="v_box">Try Video</label>
					<div id="v_box" style="margin-bottom: 15px;">
						<div class="v-box">
							<video width="480px" height="270px" controls><source src="videos/Kelsey-1160.mp4"></video> <!-- file:///C:/Users/Owner/Documents/videos/Demo/video_demo.html -->
						</div>
					</div>
				</div>
				<div class="row">
					<label class="col-sm-2 fld-label" for="v_box">Try Iframe (YouTube)</label>
					<div id="v_box" style="margin-bottom: 15px;">
						<div class="v-box">
							<iframe title="YouTube video player" width="640" height="360" src="//www.youtube.com/embed/vfYqDOlj7AQ?rel=0">Youtube</iframe> <!-- https://www.youtube.com/embed/vfYqDOlj7AQ -->
						</div>
					</div>
				</div>
				<div class="row">
					<label class="col-sm-2 fld-label" for="v_box">Try Iframe (Vimeo)</label>
					<div id="v_box" style="margin-bottom: 15px;">
						<div class="v-box">
							<iframe width="640px" height="360px" src="//player.vimeo.com/video/126100722">Vimeo</iframe> <!-- 17616845 -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
