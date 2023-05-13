<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lihat Pemasok Obat</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php if($this->session->flashdata('success')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('success'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	<?php $this->session->set_flashdata('success', null); ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('failed')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Gagal',
                                  text: '<?php echo $this->session->flashdata('failed'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	<?php $this->session->set_flashdata('failed', null); ?>
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_pemasok_obat') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Pemasok Obat </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pemasok</th>
							<th>Alamat</th>
							<th>No. Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
						<?php $sn = 1 ?>
					<tbody>
						
						<?php foreach($table_pemasok_obat as $s){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $s->nama_pemasok ?></td>
							<td><?php echo $s->alamat ?></td>
							<td><?php echo $s->no_telepon ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_pemasok_obat/'.$s->id_pemasok, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<button class="btn btn-danger btn-xs" onclick="myFunction(<?php echo $s->id_pemasok ?>)" type="button"><span class="fa fa-trash"></span></button>
					         </td>
						</tr>
						<?php $sn++; ?>

						<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
function myFunction(data) {
  let text = "Apakah anda yakin ingin menghapus?";
  if (confirm(text) == true) {
    window.location.href = "<?php echo base_url('example/remove_data/') ?>"+data+'/id_pemasok/tabel_pemasok/table_pemasok_obat';
  } else {
    
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
