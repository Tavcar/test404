<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>iDoktor</title>

		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/style.css">
	</head>

<body>


<div class="container-fluid">
<?php include("navbar.php"); ?>

<script type="text/javascript" src="dist/marketcloud.min.js"></script>

<script type="text/javascript">
	var marketcloud = new Marketcloud.Client({
		publicKey : "ca5ce0ac-687e-4edc-abb8-b8726aec527f"
	})
</script>
