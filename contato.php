<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<title>Contato</title>
</head>
<body>
	<header>
		<?php include_once "navbar.php" ?>
	</header>
<div class="container mt-2">
	<div class="row">
		<div class="col-md-8 my-2 mx-auto">
			<div class="card w-95">
				<h5 class="card-header bg-transparent text-center">Envie uma mensagem para nós!</h5>	
			
				<div class="card-body text-center row">
					<div class="col-md-6 align-self-center mx-auto">
						<form>
		                    <div class="form-floating mb-3">
		                        <input type="email" class="form-control" id="email" name="email"
		                            placeholder="email">
		                        <label for="email" class="form-label">Email</label>
		                    </div>
		                    <div class="mb-3">
								<textarea class="form-control" rows="5" id="msg" name="msg" placeholder="Mensagem..."></textarea>
		                    </div>
		                    <input type="submit" class="btn btn-dark" value="Enviar">
		                </form>
		            </div>		
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>