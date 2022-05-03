<?php $currentPage = (substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1)); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvignette.wikia.nocookie.net%2Fspartaremix%2Fimages%2F1%2F1c%2FMsi_icon_by_drakenji-d9svab9.png%2Frevision%2Flatest%3Fcb%3D20160825192951&f=1&nofb=1" alt="" width="24" height="24" class="d-inline-block align-text-top">Msi</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a <?php if ($currentPage == "index.php") {echo "class='nav-link active' aria-current='page'";} else {echo "class='nav-link'";} ?>href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:void(0)" role="button" data-bs-toggle="modal" data-bs-target="#notReadyModal">Monte seu PC</a>
							<div class="modal fade" id="notReadyModal" tabindex="-1" aria-labelledby="notReadyModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="notReadyModalLabel">Página em Construção
											</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
										</div>
										<div class="modal-body">
											<span>A página ainda está em desenvolvimento! Aguarde mais um pouco</span>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a <?php if ($currentPage == "componentes.php") {echo "class='nav-link dropdown-toggle active' aria-current='page'";} else {echo "class='nav-link dropdown-toggle'";} ?> href="javascript:void(0)" id="navBarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Componentes
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="componentes.php?type=motherboard">Placa Mãe</a></li>
								<li><a class="dropdown-item" href="componentes.php?type=cpu">Processador</a></li>
								<li><a class="dropdown-item" href="componentes.php?type=gpu">Placa de Vídeo</a></li>
								<li><a class="dropdown-item" href="componentes.php?type=ram">Memória</a></li>
								<li><a class="dropdown-item" href="componentes.php?type=ssd">SSD</a></li>
							</ul>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a <?php if ($currentPage == "contato.php") {echo "class='nav-link active' aria-current='page'";} else {echo "class='nav-link'";} ?> href="contato.php">Contato</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>