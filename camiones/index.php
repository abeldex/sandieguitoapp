<?php
include('../inc/header.php');
//incluir conexion
include('../inc/conexion.php');
?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
		<div class="m-content">
						<!-- aqui una prueba con ajax-->
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Camiones
											<small>
												Administración
											</small>
										</h3>
									</div>
								</div>
							</div>
							<div class="m-portlet__body">
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<!--<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Buscar..." id="m_form_search">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>-->
										<div class="col-xl-12 order-1 order-xl-2 m--align-right">
											<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="flaticon-truck"></i>
													<span>
														Nuevo Camión
													</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
								<!--begin: Datatable -->
								<table id="dt_scroll" class="table-striped" width="100%">
												<thead>
												<tr>
													<th>Placas</th>
													<th>No.</th>
													<th>Modelo</th>
													<th>Permisionario</th>
													<th>Opciones</th>
												</tr>
												</thead>
												<tbody>
												<?php
																 
																  $sql = "SELECT * FROM camiones inner join permisionarios on camiones.id_permisionario = permisionarios.id_permisionario";
																  $result_scale = mysqli_query($con, $sql)or die(mysqli_error());
																  while($row = mysqli_fetch_array($result_scale)){
																   $placas     = $row['placas_camion'];
																   $numero     = $row['numero_camion'];
																   $modelo     = $row['modelo_camion'];
																   $permiosionario     = $row['nombre_permisionario'];																   
																  
																   // Now for each looped row
																	echo utf8_encode(' <tr>
																		<td>'.$placas.'</td>
																		<td>'.$numero.'</td>
																		<td>'.$modelo.'</td>
																		<td>'.$permiosionario.'</td>
																		<td>
																			<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
																				<i class="la la-edit"></i>
																			</a>
																			<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
																				<i class="la la-trash"></i>
																			</a>
																		</td>
																	</tr>');																												  
																  } // End our scale while loop		
																  
													?>
											   
												</tbody>
											</table>
					
					</div>
						</div>
						
					</div>
				</div>
				
				
<?php
include('../inc/footer.php');
?>