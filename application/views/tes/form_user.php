<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Pengguna</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php $username = ""; ?>
      <?php $email = ""; ?>
      <?php $level = ""; ?>
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
        <?php if($this->session->flashdata('add_username')): ?>
          <?php $username = $this->session->flashdata('add_username'); ?>
          <?php $this->session->set_flashdata('add_username', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_email')): ?>
          <?php $email = $this->session->flashdata('add_email'); ?>
          <?php $this->session->set_flashdata('add_email', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_level')): ?>
          <?php $level = $this->session->flashdata('add_level'); ?>
          <?php $this->session->set_flashdata('add_level', null); ?>
        <?php endif; ?>
        <form action="<?php echo base_url(). 'example/add_user'; ?>" method="post" class="form-horizontal form-label-left" novalidate>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="nama_pengguna" name="nama_pengguna" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" required="required" value="<?php echo $username ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $email ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="level">Level</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select  name="level" id="level" class="select2_single form-control" tabindex="-1" required="required">
              <option selected="true" value="" disabled ></option>
              <?php 
                if ($level == '1') {
                  ?><option value="1" selected>1</option><?php
                  ?><option value="2">2</option><?php
                  ?><option value="3">3</option><?php
                }
                else if ($level == '2') {
                  ?><option value="1">1</option><?php
                  ?><option value="2" selected>2</option><?php
                  ?><option value="3">3</option><?php
                }
                else if ($level == '3') {
                  ?><option value="1">1</option><?php
                  ?><option value="2">2</option><?php
                  ?><option value="3" selected>3</option><?php
                }
                else {
                  ?><option value="1">1</option><?php
                  ?><option value="2">2</option><?php
                  ?><option value="3">3</option><?php
                }
              ?>
            </select>
            </div>
          </div>
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
         
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Konfirmasi Password</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="password_confirmation" name="password_confirmation" required="required" class="form-control col-md-7 col-xs-12">
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
      </div>
    </div>
  </div>
</div>
