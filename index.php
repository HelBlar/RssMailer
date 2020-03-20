<?php
use includes\ViewRss;
use includes\RssMerge;
include_once 'includes/Dbconf.inc.php';
include_once 'includes/Database.inc.php';
include_once 'includes/ViewRss.inc.php';
include_once 'includes/RssMerge.inc.php';
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta lang="pl-PL">
<meta charset="UTF-8">
<meta name="viewport"
	content="width = device-width, initial-scale = 1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="style/style.css">

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
	
<title>RssMailer</title>
</head>

<body class="bg-dark">
<div id="inputs" class="navbar bg-primary navbar-dark">
<?php
include_once 'view/main.view.php';
?>
</div>
	<div class="container my-5  " id="container">
		<div class="row bg-light border rounded ">
			<div class="col-md-6  p-4 border-right border-dark " id="mail">
				<div class="bg-info text-center mb-3 border rounded">e-Mail content:</div>
				<?php			
				$html = new RssMerge();
				$html->merge($_SESSION['user']);
				?>
			</div>
			<div class=" col-md-6 p-4 border-left border-dark" id="rsslist">
			<div class="bg-info text-center mb-4 border rounded">Rss List:</div>
<?php
$list = new ViewRss();
$list->viewRssList($_SESSION['user']);
?>
</div>

		</div>
		<a href="control/mail.con.php"><div class="btn btn-success m-3">SEND</div></a>
  		<a href="control/killsession.con.php"><button class="btn btn-warning m-3">KillSession</button></a>
	</div>


</body>
</html>