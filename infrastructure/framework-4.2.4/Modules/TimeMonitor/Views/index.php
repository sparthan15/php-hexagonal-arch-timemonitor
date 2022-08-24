<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
	data-theme="theme-default" data-assets-path="../assets/"
	data-template="vertical-menu-template-free">
<head>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>Time Monitor - Entrada y salida de empleados</title>

<meta name="description" content="" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon"
	href="../assets/img/favicon/favicon.ico" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
	href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
	rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="../assets/vendor/css/core.css"
	class="template-customizer-core-css" />
<link rel="stylesheet" href="../assets/vendor/css/theme-default.css"
	class="template-customizer-theme-css" />
<link rel="stylesheet" href="../assets/css/demo.css" />

<!-- Vendors CSS -->
<link rel="stylesheet"
	href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="../assets/vendor/js/helpers.js"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="../assets/js/config.js"></script>
</head>

<body onload="mueveReloj()">
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<aside id="layout-menu"
				class="layout-menu menu-vertical menu bg-menu-theme">
				<div class="app-brand demo">TIME MONITOR</div>

				<div class="menu-inner-shadow"></div>

				<ul class="menu-inner py-1">
					<!-- Dashboard -->
					<li class="menu-item"><a href="index.html" class="menu-link"> <em
							class="menu-icon tf-icons bx bx-home-circle"></em>
							<div data-i18n="Analytics">Inicio</div>
					</a></li>


				</ul>
			</aside>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				<nav
					class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
					id="layout-navbar">
					<div
						class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4"
							href="javascript:void(0)"> <i class="bx bx-menu bx-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center"
						id="navbar-collapse">
						<!-- Search -->
						<div class="navbar-nav align-items-center">
							<div class="nav-item d-flex align-items-center">
								<i class="bx bx-search fs-4 lh-0"></i> <input type="text"
									class="form-control border-0 shadow-none"
									placeholder="Search..." aria-label="Search..." />
							</div>
						</div>
						<!-- /Search -->

						<ul class="navbar-nav flex-row align-items-center ms-auto">
							<!-- Place this tag where you want the button to render. -->
							<li class="nav-item lh-1 me-3"><a class="github-button"
								href="https://github.com/themeselection/sneat-html-admin-template-free"
								data-icon="octicon-star" data-size="large"
								data-show-count="true"
								aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
							</li>

							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown"><a
								class="nav-link dropdown-toggle hide-arrow"
								href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="../assets/img/avatars/1.png" alt
											class="w-px-40 h-auto rounded-circle" />
									</div>
							</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item" href="#">
											<div class="d-flex">
												<div class="flex-shrink-0 me-3">
													<div class="avatar avatar-online">
														<img src="../assets/img/avatars/1.png" alt
															class="w-px-40 h-auto rounded-circle" />
													</div>
												</div>
												<div class="flex-grow-1">
													<span class="fw-semibold d-block">John Doe</span> <small
														class="text-muted">Admin</small>
												</div>
											</div>
									</a></li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li><a class="dropdown-item" href="#"> <i
											class="bx bx-user me-2"></i> <span class="align-middle">My
												Profile</span>
									</a></li>
									<li><a class="dropdown-item" href="#"> <i
											class="bx bx-cog me-2"></i> <span class="align-middle">Settings</span>
									</a></li>
									<li><a class="dropdown-item" href="#"> <span
											class="d-flex align-items-center align-middle"> <i
												class="flex-shrink-0 bx bx-credit-card me-2"></i> <span
												class="flex-grow-1 align-middle">Billing</span> <span
												class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
										</span>
									</a></li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li><a class="dropdown-item" href="auth-login-basic.html"> <i
											class="bx bx-power-off me-2"></i> <span class="align-middle">Log
												Out</span>
									</a></li>
								</ul></li>
							<!--/ User -->
						</ul>
					</div>
				</nav>

				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						<h4 class="fw-bold py-3 mb-4">
							<span class="text-muted fw-light">Inicio /</span>
						</h4>
						<button type="button" class="btn btn-primary"
							data-bs-toggle="modal" data-bs-target="#basicModal">Registrar
							entrada</button>
						<hr class="my-5" />
						<!-- Basic Bootstrap Table -->
						<div class="card">

							<h5 class="card-header">Registros activos</h5>
							<div class="table-responsive text-nowrap">
								<table class="table" aria-describedby="a">
									<thead>
										<tr>
											<th>Nombre</th>
											<th>Fecha</th>
											<th>Entrada</th>
											<th>Salida</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody class="table-border-bottom-0">
								<?php
								
								foreach($presenter->activeCheckIn as $timeMonitor){

								?>
									<tr>
											<td><em class="fab fa-angular fa-lg text-danger me-3"></em> <strong>Carlos
													Gamboa</strong></td>
											<td><?=$timeMonitor->getCheckInDateFormatted();?></td>
											<td><?=$timeMonitor->getCheckInTimeFormatted();?></td>
											<td><span class="badge bg-label-success me-1">Activo</span></td>
											<td>
												<div class="dropdown">
													<button type="button"
														class="btn p-0 dropdown-toggle hide-arrow"
														data-bs-toggle="dropdown">
														<em class="bx bx-dots-vertical-rounded"></em>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="javascript:void(0);"><i
															class="bx bx-edit-alt me-1"></i> Edit</a> <a
															class="dropdown-item" href="javascript:void(0);"><i
															class="bx bx-trash me-1"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<?php } ?>
										<tr>
											<td>
												<nav aria-label="..." class="m-auto">
													<ul class="pagination justify-content-end">
														<li class="page-item "><span class="page-link">Anterior</span>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item active" aria-current="page"><span
															class="page-link">2</span></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">Siguiente</a>
														</li>
													</ul>
												</nav>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<!--/ Basic Bootstrap Table -->

						<hr class="my-5" />
						<!-- Bootstrap modals -->
						<div class="card mb-4">
							<h5 class="card-header">Mis registros</h5>
							<div class="card-body">
								<div class="row gy-3">
									<!-- Default Modal -->
									<div class="col-lg-4 col-md-6">
										<small class="text-light fw-semibold">Default</small>
										<div class="mt-3">
											<!-- Button trigger modal -->


											<!-- Modal -->
											<div class="modal fade" id="basicModal" tabindex="-1"
												aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel1">Registrar
																entrada</h5>
															<button type="button" class="btn-close"
																data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col mb-3">
																	<label for="nameBasic" class="form-label">Nombre</label>
																	<input type="text" id="nameBasic"
																		value="CARLOS GAMBOA HERNANDEZ" readonly
																		class="form-control" placeholder="Enter Name" />
																</div>
															</div>
															<div class="row g-2">
																<div class="col mb-0">
																	<label for="dobBasic" class="form-label">Fecha y hora
																		de entrada</label>
																	<form name="form_reloj">

																		<input type="text" id="dobBasic"
																			style="font-size: 20px" name="reloj"
																			class="form-control text-center"
																			placeholder="DD / MM / YY" />
																	</form>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-outline-secondary"
																data-bs-dismiss="modal">Cerrar</button>
															<button type="button" class="btn btn-primary">Registrar
																entrada</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ Bootstrap modals -->
						</div>
						<!-- / Content -->

						<!-- Footer -->
						<footer class="content-footer footer bg-footer-theme">
							<div
								class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
								<div class="mb-2 mb-md-0">
									<script>
                    document.write(new Date().getFullYear());
                  </script>

									<a href="https://themeselection.com" target="_blank"
										class="footer-link fw-bolder">ThemeSelection</a>
								</div>
								<div>
									<a href="https://themeselection.com/license/"
										class="footer-link me-4" target="_blank">License</a> <a
										href="https://themeselection.com/" target="_blank"
										class="footer-link me-4">More Themes</a> <a
										href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
										target="_blank" class="footer-link me-4">Documentation</a> <a
										href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
										target="_blank" class="footer-link me-4">Support</a>
								</div>
							</div>
						</footer>
						<!-- / Footer -->

						<div class="content-backdrop fade"></div>
					</div>
					<!-- Content wrapper -->
				</div>
				<!-- / Layout page -->
			</div>

			<!-- Overlay -->
			<div class="layout-overlay layout-menu-toggle"></div>
		</div>
		<!-- / Layout wrapper -->

		<div class="buy-now">
			<a
				href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
				target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
		</div>

		<!-- Core JS -->
		<!-- build:js assets/vendor/js/core.js -->
		<script src="../assets/vendor/libs/jquery/jquery.js"></script>
		<script src="../assets/vendor/libs/popper/popper.js"></script>
		<script src="../assets/vendor/js/bootstrap.js"></script>
		<script
			src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

		<script src="../assets/vendor/js/menu.js"></script>
		<script>
      function mueveReloj(){
        momentoActual = new Date();
        hora = momentoActual.getHours();
        minuto = momentoActual.getMinutes();
        segundo = momentoActual.getSeconds();
        horaImprimible = hora + " : " + minuto + " : " + segundo;
        document.form_reloj.reloj.value = horaImprimible
        setTimeout("mueveReloj()",1000)
    }
 
    </script>
		<!-- endbuild -->

		<!-- Vendors JS -->

		<!-- Main JS -->
		<script src="../assets/js/main.js"></script>

		<!-- Page JS -->
		<script src="../assets/js/ui-modals.js"></script>

		<!-- Place this tag in your head or just before your close body tag. -->
		<script async defer src="https://buttons.github.io/buttons.js"></script>

</body>
</html>