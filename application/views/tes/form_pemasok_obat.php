<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Pemasok Obat</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php $nama = ""; ?>
      <?php $alamat = ""; ?>
      <?php $telepon = ""; ?>
        <?php if($this->session->flashdata('failed_save_data')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Gagal',
                                  text: '<?php echo $this->session->flashdata('failed_save_data'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Failed</button>
                 	</div>
                 	<?php $this->session->set_flashdata('failed_save_data', null); ?>
				<?php endif; ?>
        <?php if($this->session->flashdata('add_nama')): ?>
          <?php $nama = $this->session->flashdata('add_nama'); ?>
          <?php $this->session->set_flashdata('add_nama', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_alamat')): ?>
          <?php $alamat = $this->session->flashdata('add_alamat'); ?>
          <?php $this->session->set_flashdata('add_alamat', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_telepon')): ?>
          <?php $telepon = $this->session->flashdata('add_telepon'); ?>
          <?php $this->session->set_flashdata('add_telepon', null); ?>
        <?php endif; ?>
        <form action="<?php echo base_url(). 'example/add_pemasok_obat'; ?>" method="post" class="form-horizontal form-label-left" novalidate>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="alamat" name="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $alamat ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="telepon" name="telepon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $telepon ?>">
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
      </div>
    </div>
  </div>
</div>
