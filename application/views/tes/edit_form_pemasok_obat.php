<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Pemasok Obat</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php if($this->session->flashdata('failed')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Gagal',
                                  text: '<?php echo $this->session->flashdata('failed'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Failed</button>
                 	</div>
                 	<?php $this->session->set_flashdata('failed', null); ?>
                 	
				<?php endif; ?>

        <?php foreach($tabel_pemasok as $s){ ?>
        <form action="<?php echo base_url(). 'example/update_pemasok_obat'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id" value="<?php echo $s->id_pemasok ?>">
              <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $s->nama_pemasok ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id" value="<?php echo $s->id_pemasok ?>">
              <input type="text" id="alamat" name="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $s->alamat ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id" value="<?php echo $s->id_pemasok ?>">
              <input type="text" id="telepon" name="telepon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $s->no_telepon ?>">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_pemasok_obat') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
     

     <?php } ?>
      </div>
    </div>
  </div>
</div>
