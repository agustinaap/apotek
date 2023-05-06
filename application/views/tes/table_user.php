<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Lihat Pengguna</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<?php if($this->session->flashdata('user_added')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Berhasil',
                                  text: '<?php echo $this->session->flashdata('user_added'); ?>',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>
                 	</div>
                 	<?php $this->session->set_flashdata('user_added', null); ?>
				<?php endif; ?>

				<a href="<?php echo base_url('example/form_user') ?>"><button type="button" class="btn btn-success" style="margin-bottom: 13px"><span class="fa fa-plus"></span> Tambah Pengguna </button></a>
				
				<table id="datatable-buttons" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Email</th>
							<th>Level</th>
							<th>Aksi</th>
							
						</tr>
					</thead>
						<?php $sn = 1 ?>
					<tbody>
						
						<?php foreach($table_user as $s){ ?>
						<tr>
							<th scope="row"><?= $sn ?></th>
							<td><?php echo $s->nama_pengguna ?></td>
							<td><?php echo $s->email ?></td>
							<td><?php echo $s->level_pengguna ?></td>
							<td style=" text-align: center;">
								<?php echo anchor('example/edit_form_user/'.$s->id_pengguna, '<button class="btn btn-info btn-xs" type="button"><span class="fa fa-pencil"></span></button>'); ?>
								<button class="btn btn-danger btn-xs" onclick="myFunction(<?php echo $s->id_pengguna ?>)" type="button"><span class="fa fa-trash"></span></button>
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
    window.location.href = "<?php echo base_url('example/remove_data/') ?>"+data+'/id_pengguna/tabel_pengguna/user_added/table_user';
  } else {
    
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
