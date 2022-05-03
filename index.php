<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<title>Página Inicial</title>
</head>
<body>
	<header>
		<?php include_once "navbar.php" ?>
	</header>
	<div>
		<div class="accordion">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne">
					<button class="accordion-button text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Notebooks em destaque</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
					<div class="accordion-body bg-light scrollx">
						<div class="row" id="cards-note">
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo">
					<button class="accordion-button text-white bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">GPUS em promoção <span class="badge bg-danger mx-2 my-auto">HOT</span></button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
					<div class="accordion-body bg-light scrollx">
						<div class="row" id="cards-gpu">
						</div>
					</div>
				</div>
			</div>
		</div>
	<div>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/functions.js"></script>
<script>
	jQuery(function(){
		$.ajax({
			type: "GET",
			dataType: "json",
			url: "json/list.json",
			success: function(data, status, xhr){
				for(i in data.notebook.sort(sortDesc("price"))){
					$('#cards-note').append(
						'<div class="col-12 col-md-6 col-lg-3 card-container mb-3"><div class="card mx-auto text-center h-100"><h5 class="card-header bg-transparent">'+data.notebook[i].name+'</h5><div class="card-body d-flex align-items-center"><img class="card-img-top w-75 mx-auto" src="'+data.notebook[i].img+'"></div><div class="card-footer bg-transparent"><ul class="list-group list-group-flush"><li class="list-group-item"><p class="card-text">'+data.notebook[i].desc+'</p></li><li class="list-group-item"><p class="card-text"><small class="text-muted">'+priceFormat(data.notebook[i].price)+'</small></p></li></ul></div></div></div>'
					)
				}
				for (i in data.gpu.sort(sortDesc("price"))){
					$('#cards-gpu').append(
						'<div class="col-12 col-md-6 col-lg-3 card-container mb-3"><div class="card w-80 h-100 mx-auto text-center"><h5 class="card-header bg-transparent">'+data.gpu[i].name+'</h5><div class="card-body d-flex align-items-center"><img class="card-img-top w-75 mx-auto" src="'+data.gpu[i].img+'"></div><div class="card-footer bg-transparent"><ul class="list-group list-group-flush"><li class="list-group-item"><p class="card-text">'+data.gpu[i].desc+'</p></li><li class="list-group-item"><p class="card-text"><small class="text-muted">'+priceFormat(data.gpu[i].price)+'</small></p></li></ul></div></div></div>'
					)
				}
			}
		});
	});
</script>
</body>
</html>