<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Obat</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
         
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php $id_obat = ""; ?>
      <?php $nama_obat = ""; ?>
      <?php $merk_obat = ""; ?>
      <?php $jenis = ""; ?>
      <?php $bpjs = ""; ?>
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
        <?php if($this->session->flashdata('add_id_obat')): ?>
          <?php $id_obat = $this->session->flashdata('add_id_obat'); ?>
          <?php $this->session->set_flashdata('add_id_obat', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_nama_obat')): ?>
          <?php $nama_obat = $this->session->flashdata('add_nama_obat'); ?>
          <?php $this->session->set_flashdata('add_nama_obat', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_merk_obat')): ?>
          <?php $merk_obat = $this->session->flashdata('add_merk_obat'); ?>
          <?php $this->session->set_flashdata('add_merk_obat', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_jenis')): ?>
          <?php $jenis = $this->session->flashdata('add_jenis'); ?>
          <?php $this->session->set_flashdata('add_jenis', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_bpjs')): ?>
          <?php $bpjs = $this->session->flashdata('add_bpjs'); ?>
          <?php $this->session->set_flashdata('add_bpjs', null); ?>
        <?php endif; ?>
        <form action="<?php echo base_url(). 'example/add_obat'; ?>" method="post" class="form-horizontal form-label-left" novalidate>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_obat">Id Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_obat" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="id_obat" required="required" type="text" value="<?php echo $id_obat ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_obat">Nama Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama_obat" name="nama_obat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nama_obat ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="merk">Merk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="merk" name="merk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $merk_obat ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="jenis" id="jenis" class="select2_single form-control" tabindex="-1" required="required">
                <option selected="true" value="" disabled ></option>
                <?php foreach($table_jenis_obat as $jo){ 
                  if ($jo->id == $jenis) {
                    ?><option value="<?php echo $jo->id; ?>" selected><?php echo $jo->nama; ?></option><?php
                  }
                  else {
                    ?><option value="<?php echo $jo->id; ?>"><?php echo $jo->nama; ?></option><?php
                  }
                  ?>
               <?php  }?>
              </select>
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bpjs">BPJS</label>
            <div class="col-md-6 col-sm-6 col-xs-12 ">
              <select  name="bpjs" id="bpjs" class="select2_single form-control" tabindex="-1" required="required">
              <option selected="true" value="" disabled ></option>
              <?php 
                if ($bpjs == 'YES') {
                  ?><option value="YES" selected>YES</option><?php
                  ?><option value="NO">NO</option><?php
                }
                else if ($bpjs == 'NO') {
                  ?><option value="YES">YES</option><?php
                  ?><option value="NO" selected>NO</option><?php
                }
                else {
                  ?><option value="YES">YES</option><?php
                  ?><option value="NO">NO</option><?php
                }
              ?>
            </select>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_obat') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
