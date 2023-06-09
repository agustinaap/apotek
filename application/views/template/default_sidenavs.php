<div class="col-md-3 left_col menu_fixed">
	<div class="left_col scroll-view">
 		<div class="navbar nav_title" style="border: 0;">
 			<!-- logo info -->
 			<div class="logo_pic">
 				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/swa.png') ?>" alt="..." class="img-circle logo_img"></a>
 			</div>
			
		</div>
		<div class="profile">
		<a href="<?php echo base_url(); ?>" class="site_title"><span style="font-size: 20px;"><?php echo 'Klinik Pratama SWA' ?></span></a>
		</div>

		
		<div class="clearfix"></div>

		
		<!-- /menu profile quick info -->
		<br>
		<!-- Sidebar Menu -->
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
				<h3></h3>
				<ul class="nav side-menu">

					<li><a href="<?php echo base_url('') ?>"><i class="fa fa-home"></i> Beranda </a></li>
					<li><a><i class="fa fa-medkit"></i>Obat<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_obat') ?>">Tambah Obat</a></li>
							<li><a href="<?php echo base_url('example/table_obat') ?>">Lihat Obat</a></li>
							<!-- <li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kedaluwarsa</a></li>
							<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li> -->
							
						</ul>
					</li>
					<li><a><i class="fa fa-stethoscope"></i>Bahan Habis Pakai<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_bhp') ?>">Tambah BHP</a></li>
							<li><a href="<?php echo base_url('example/table_bhp') ?>">Lihat BHP</a></li>
							<!-- <li><a href="<?php echo base_url('example/table_exp') ?>">Obat Kedaluwarsa</a></li>
							<li><a href="<?php echo base_url('example/table_stock') ?>">Obat Habis</a></li> -->
							
						</ul>
					</li>
					<!-- <li><a><i class="fa fa-hospital-o"></i> Kategori & Unit <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_cat') ?>">Tambah Kategori</a></li>
							<li><a href="<?php echo base_url('example/table_cat') ?>">Lihat Kategori</a></li>
							<li><a href="<?php echo base_url('example/form_unit') ?>">Tambah Unit</a></li>
							<li><a href="<?php echo base_url('example/table_unit') ?>">Lihat Unit</a></li>
							
						</ul>
					</li>

					<li><a><i class="fa fa-users"></i> Pemasok <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_sup') ?>">Tambah Pemasok</a></li>
                    		<li><a href="<?php echo base_url('example/table_sup') ?>">Lihat Pemasok</a></li>
						</ul>
					</li> -->

					<li><a><i class="fa fa-list-alt"></i>Jenis Obat / BHP<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_jenis_obat') ?>">Tambah Jenis Obat</a></li>
                    		<li><a href="<?php echo base_url('example/table_jenis_obat') ?>">Lihat Jenis Obat</a></li>
							<li><a href="<?php echo base_url('example/form_jenis_bhp') ?>">Tambah Jenis BHP</a></li>
                    		<li><a href="<?php echo base_url('example/table_jenis_bhp') ?>">Lihat Jenis BHP</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-truck"></i>Pemasok Obat<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_pemasok_obat') ?>">Tambah Pemasok Obat</a></li>
							<li><a href="<?php echo base_url('example/table_pemasok_obat') ?>">Lihat Pemasok Obat</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-money"></i>Hutang<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_hutang') ?>">Tambah Hutang</a></li>
							<li><a href="<?php echo base_url('example/table_hutang') ?>">Lihat Hutang</a></li>
						</ul>
					</li>

					<li><a><i class="fa fa-users"></i>User<span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_user') ?>">Tambah User</a></li>
                    		<li><a href="<?php echo base_url('example/table_user') ?>">Lihat User</a></li>
						</ul>
					</li>

				
					<!-- <li><a><i class="fa fa-edit"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    	<li><a href="<?php echo base_url('example/form_invoice') ?>">Tambah Penjualan</a></li>
                    	<li><a href="<?php echo base_url('example/table_invoice') ?>">Lihat Penjualan</a></li>
                    	<li><a href="<?php echo base_url('example/invoice_report') ?>">Grafik Penjualan</a></li>
                    </ul>
                  </li>-->


                  <li><a><i class="fa fa-shopping-cart"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu">
							<li><a href="<?php echo base_url('example/form_pembelian_obat') ?>">Tambah Pembelian Obat</a></li>
							<li><a href="<?php echo base_url('example/table_purchase') ?>">Lihat Pembelian Obat</a></li>
							<li><a href="<?php echo base_url('example/form_pembelian_obat') ?>">Tambah Pembelian BHP</a></li>
							<li><a href="<?php echo base_url('example/table_purchase') ?>">Lihat Pembelian BHP</a></li>
						</ul>
					</li>


					<!-- <li><a href="<?php echo base_url('example/report') ?>"><i class="fa fa-bar-chart"></i> Laporan </a></li> -->

				</ul>
			</div>
		</div>
		

	</div>
</div>