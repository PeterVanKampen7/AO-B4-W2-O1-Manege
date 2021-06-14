<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manage app</title>	
	<link rel="stylesheet" href="<?= URL ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= URL ?>home">Manage Manager</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/user">Gebruiker Registeren</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/userList">Gebruikers Beheren</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/horse">Paard/Pony Registreren</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/horseList">Paard/Pony Beheren</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/reservation">Reservatie Plaatsen</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= URL ?>home/reservationList">Reservaties Beheren</a>
			</li>
		</ul>
		</div>
	</div>
	</nav>