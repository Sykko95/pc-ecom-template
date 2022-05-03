<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<title>Componentes</title>
</head>
<body>
	<?php 
		$type = $_GET['type'];
	?>
	<header>
		<?php include_once "navbar.php" ?>
	</header>
<div class="container-fluid mt-2">
	<div class="row text-center">
		<div class="col-md-2 d-none d-md-block" style="background-color: white">Menu</div>
		<div class="content col-md-8 px-5">
		</div>
		<div class="col-md-2 d-none d-md-block" style="background-color: white">ADs</div>
	</div>
	
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/functions.js"></script>
<script>
	jQuery(function(){
		$.ajax({
			type: "GET",
			dataType: "json",
			url: "json/list.json",
			success: function(data, status,xhr){
				<?php 
					switch ($type){
						case 'motherboard':
							echo 
								"for(i in data.motherboard.sort(sortDesc('price'))){
									$('.content').append(
										`<div class='card mb-3 mx-auto'><div class='row g-0'><div class='col-md-4'><img src='`+data.motherboard[i].img+`' class='img-fluid rounded-start' alt='...'></div><div class='col-md-8 d-flex'><div class='card-body my-auto d-flex flex-column text-center'><h5 class='card-title fs-3'>`+data.motherboard[i].name+`</h5><p class='card-text fs-5'>`+data.motherboard[i].desc+`</p><p class='card-text'><small class='text-muted fs-6'>`+priceFormat(data.motherboard[i].price)+`</small></p></div></div></div></div></br>`
									)
								}"; 
							break;
						case 'cpu':
							echo 
							"for(i in data.cpu.sort(sortDesc('price'))){
								$('.content').append(
									`<div class='card mb-3 mx-auto'><div class='row g-0'><div class='col-md-4'><img src='`+data.cpu[i].img+`' class='img-fluid rounded-start' alt='...'></div><div class='col-md-8 d-flex'><div class='card-body my-auto d-flex flex-column text-center'><h5 class='card-title fs-3'>`+data.cpu[i].name+`</h5><p class='card-text fs-5'>`+data.cpu[i].desc+`</p><p class='card-text'><small class='text-muted fs-6'>`+priceFormat(data.cpu[i].price)+`</small></p></div></div></div></div></br>`
								)
							}"; 
							break;
						case 'gpu':
							echo 
							"for(i in data.gpu.sort(sortDesc('price'))){
								$('.content').append(
									`<div class='card mb-3 mx-auto'><div class='row g-0'><div class='col-md-4'><img src='`+data.gpu[i].img+`' class='img-fluid rounded-start' alt='...'></div><div class='col-md-8 d-flex'><div class='card-body my-auto d-flex flex-column text-center'><h5 class='card-title fs-3'>`+data.gpu[i].name+`</h5><p class='card-text fs-5'>`+data.gpu[i].desc+`</p><p class='card-text'><small class='text-muted fs-6'>`+priceFormat(data.gpu[i].price)+`</small></p></div></div></div></div></br>`
								)
							}";  
							break;
						case 'ram':
							echo 
							"for(i in data.ram.sort(sortDesc('price'))){
								$('.content').append(
									`<div class='card mb-3 mx-auto'><div class='row g-0'><div class='col-md-4'><img src='`+data.ram[i].img+`' class='img-fluid rounded-start' alt='...'></div><div class='col-md-8 d-flex'><div class='card-body my-auto d-flex flex-column text-center'><h5 class='card-title fs-3'>`+data.ram[i].name+`</h5><p class='card-text fs-5'>`+data.ram[i].desc+`</p><p class='card-text'><small class='text-muted fs-6'>`+priceFormat(data.ram[i].price)+`</small></p></div></div></div></div></br>`
								)
							}"; 
							break;
						case 'ssd':
							echo 
							"for(i in data.ssd.sort(sortDesc('price'))){
								$('.content').append(
									`<div class='card mb-3 mx-auto'><div class='row g-0'><div class='col-md-4'><img src='`+data.ssd[i].img+`' class='img-fluid rounded-start' alt='...'></div><div class='col-md-8 d-flex'><div class='card-body my-auto d-flex flex-column text-center'><h5 class='card-title fs-3'>`+data.ssd[i].name+`</h5><p class='card-text fs-5'>`+data.ssd[i].desc+`</p><p class='card-text'><small class='text-muted fs-6'>`+priceFormat(data.ssd[i].price)+`</small></p></div></div></div></div></br>`
								)
							}"; 
							break;
					}
				?>
			}
		});
	});
</script>
</body>
</html>