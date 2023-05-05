<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Pengguna</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php if($this->session->flashdata('password_not_match')): ?>
                  <button id="melinda" style="display: none;" class="btn btn-default source" onclick="new PNotify({
                                  title: 'Gagal',
                                  text: '<?php echo $this->session->flashdata('password_not_match'); ?>',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Failed</button>
                 	</div>
                 	<?php $this->session->set_flashdata('password_not_match', null); ?>
                 	
				<?php endif; ?>

        <?php foreach($tabel_pengguna as $s){ ?>
        <form action="<?php echo base_url(). 'example/update_user'; ?>" method="post" class="form-horizontal form-label-left" novalidate >

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id_pengguna" value="<?php echo $s->id_pengguna ?>">
              <input type="hidden" name="password" value="<?php echo $s->kata_sandi ?>">
              <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $s->nama_pengguna ?>">
            </div>
          </div>
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $s->email ?>">
            </div>
          </div>
          
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Level</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="level" name="level" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $s->level_pengguna ?>">
            </div>
          </div>
          
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password Lama</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password_old" name="password_old" required="required" class="form-control col-md-7 col-xs-12" placeholder="Masukkan password anda">
            </div>
          </div>

         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password Baru</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password_new" name="password_new" required="required" class="form-control col-md-7 col-xs-12" placeholder="Masukkan password anda">
            </div>
          </div>
        
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Konfirmasi Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password_confirmation" name="password_confirmation" required="required" class="form-control col-md-7 col-xs-12" placeholder="Konfirmasi password anda">
            </div>
          </div>
          

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_user') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
     

     <?php } ?>
      </div>
    </div>
  </div>
</div>
