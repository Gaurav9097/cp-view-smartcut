<!DOCTYPE html>
<html>
<head>
	<title>cp-Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assest/css/bootstrap.min.css');?>">
	<style type="text/css">

		*{
			font-family: "Lato";
		}
		.body{
			max-height: 100%;
			min-width: 100%;
		}
		.sidebar{
			min-height:100%;
			min-width: 200px;
		}

		.pages{
			margin-top: 10px;
			margin-left: 200px;
		}
	</style>
</head>
<body>
	<div class="container-fuild">
		<div class="body">
			<div class="sidebar">
				<?php require_once ('sidebar.php');?>				
			</div>

			<div class="pages">
				<H1>Dasboard</H1>
			</div>
		</div>
	</div>
</body>
</html>