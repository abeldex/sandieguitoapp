<?php
include('inc/header.php');
?>
			
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Estadisticas
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Main Portlet-->

						<!--End::Main Portlet-->
						<!--Begin::Main Portlet-->
						<div class="m-portlet">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-xl-4">
										<!--begin:: Widgets/Stats2-1 -->
										<div class="m-widget1">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Prestamos
														</h3>
														<span class="m-widget1__desc">
															Prestamos activos de los clientes
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															+$17,800
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Abonos
														</h3>
														<span class="m-widget1__desc">
															Abonos de los clientes
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
															+1,800
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Ganancias
														</h3>
														<span class="m-widget1__desc">
															
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															+1800
														</span>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Stats2-1 -->
									</div>
									<div class="col-xl-4">
										<!--begin:: Widgets/Daily Sales-->
										<div class="m-widget14">
											<div class="m-widget14__header m--margin-bottom-30">
												<h3 class="m-widget14__title">
													Abonos Semanales
												</h3>
												<span class="m-widget14__desc">
													Gráfica de los abonos semanales de todos los clientes
												</span>
											</div>
											<div class="m-widget14__chart" style="height:120px;">
												<canvas  id="m_chart_daily_sales"></canvas>
											</div>
										</div>
										<!--end:: Widgets/Daily Sales-->
									</div>
									<div class="col-xl-4">
										<!--begin:: Widgets/Profit Share-->
										<div class="m-widget14">
											<div class="m-widget14__header">
												<h3 class="m-widget14__title">
													Tipos de abonos
												</h3>
												<span class="m-widget14__desc">
													Profit Share between customers
												</span>
											</div>
											<div class="row  align-items-center">
												<div class="col">
													<div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
														<div class="m-widget14__stat">
															45
														</div>
													</div>
												</div>
												<div class="col">
													<div class="m-widget14__legends">
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-accent"></span>
															<span class="m-widget14__legend-text">
																37% Sport Tickets
															</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-warning"></span>
															<span class="m-widget14__legend-text">
																47% Business Events
															</span>
														</div>
														<div class="m-widget14__legend">
															<span class="m-widget14__legend-bullet m--bg-brand"></span>
															<span class="m-widget14__legend-text">
																19% Others
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end:: Widgets/Profit Share-->
									</div>
								</div>
							</div>
						</div>
						<!--End::Main Portlet-->
					</div>
				</div>
<?php
include('inc/footer.php');
?>