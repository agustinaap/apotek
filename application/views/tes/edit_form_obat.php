<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Jenis Obat</h2>
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

        <?php foreach($tabel_obat as $s){ ?>
        <form action="<?php echo base_url(). 'example/update_jenis_obat'; ?>" method="post" class="form-horizontal form-label-left" novalidate >
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_obat">Id Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_obat" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="id_obat" required="required" type="text" value="<?php echo $s->id_obat ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_obat">Nama Obat</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama_obat" name="nama_obat" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $s->nama_obat ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="merk">Merk</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="merk" name="merk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $s->nama_merk ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="jenis" id="jenis" class="select2_single form-control" tabindex="-1" required="required">
                <option selected="true" value="" disabled ></option>
                <?php foreach($table_jenis_obat as $jo){ 
                  if ($jo->id == $s->jenis_obat) {
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
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select  name="bpjs" id="bpjs" class="select2_single form-control" tabindex="-1" required="required">
              <option selected="true" value="" disabled ></option>
              <?php 
                if ($s->bpjs == 'YES') {
                  ?><option value="YES" selected>YES</option><?php
                  ?><option value="NO">NO</option><?php
                }
                else if ($s->bpjs == 'NO') {
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
     

     <?php } ?>
      </div>
    </div>
  </div>
</div>
