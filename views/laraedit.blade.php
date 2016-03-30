<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>LaraEdit</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron:400,900">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">

		<link rel="stylesheet" href="/vendor/laraedit/css/laraedit.css">

		<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->

	</head>

	<body>
		@include('vendor.laraedit.partial.header')

		<div id="editor"></div>

		<div class="toolbar">
			<a class="toolbar-button" href="#">
				<i class="fa fa-code"></i>
				<span class="tag animated fadeIn">Editor</span>
			</a>
			<a class="toolbar-button" href="#">
				<i class="fa fa-terminal"></i>
				<span class="tag animated fadeIn">Terminal</span>
			</a>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.3/ace.js"></script>
		<script src="/vendor/laraedit/js/ace.laraedit-default.js"></script>
		<script src="/vendor/laraedit/js/laraedit.js"></script>
	</body>
</html>