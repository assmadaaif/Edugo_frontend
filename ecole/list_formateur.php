<?php  include("../include/header.php");
include("../include/menu.php"); 
?>
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Table coloring</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Table coloring</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-12">
					<div class="box">
						<div class="box-body">
							<div class="table-responsive">
								<table class="text-fade table">
									<thead class="bg-success">
										<tr>
											<th>#</th>
											<th>Nom</th>
											<th>Prenom</th>
											<th>Email</th>
											<th>action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Nigam</td>
											<td>Eichmann</td>
											<td>Sonu@gmail.com</td>
											<td class="table-action">
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="edit-2"></i></a>
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Deshmukh</td>
											<td>Prohaska</td>
											<td>@gmail.com</td>
											<td class="table-action">
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="edit-2"></i></a>
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Roshan</td>
											<td>Rogahn</td>
											<td>@gmail.com</td>
											<td class="table-action">
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="edit-2"></i></a>
												<a href="#" class="text-fade hover-primary"><i class="align-middle"
														data-feather="trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
</div>
<?php include("../include/footer.php");  ?>