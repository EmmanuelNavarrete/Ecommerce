<?php include 'header.php'?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Grandes ofertas en <span>Sudaderas</span> de hasta <i>35% de descuento</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a> <i>/</i></li>
				<li>Productos</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">

				<div class="col-md-12 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/short.png" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>Shorts<span>Hasta</span> 15% de descuento</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="images/vestido.png" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Vestidos<span>Hasta</span>35% de descuento</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
                        <?php $mobile = $allCategoryObject->loadAllProduct(); if ($mobile): $j = 0; ?>
                            <?php while ($allMobile = $mobile->fetch_assoc()): $j++; ?>
                                <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                    <div class="agile_ecommerce_tab_left mobiles_grid">
                                        <div class="hs-wrapper hs-wrapper2">
                                            <?php for($i = 1; $i <= 5; ++$i):  ?>
                                            <img src="admin/<?php echo $allMobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $allMobile['proid'];?>" target="_blank" ><?php echo $allMobile['proname'];?></a></h5>
                                            <h3> $ <?php echo $allMobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px; margin-bottom: 10px">
                                            <a href="single.php?proid=<?php echo $allMobile['proid'];?>" target="_blank" class="btn btn-info">Detalles</a>
                                        </div>
                                        <?php if($j <= 2 ):  ?>
                                            <div class="mobiles_grid_pos">
                                                <h6>New</h6>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- Related Products -->
	<!-- //Related Products -->
	<!-- newsletter -->
	<?php include 'footer.php'; ?>