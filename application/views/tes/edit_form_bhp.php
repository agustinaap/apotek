<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah BHP</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
      <?php foreach($tabel_bhp as $s){ ?>
      <?php $id_bhp = $s->id_bhp; ?>
      <?php $nama_bhp = $s->nama_bhp; ?>
      <?php $jenis = $s->jenis_bhp; ?>
      <?php $keterangan = $s->keterangan; ?>
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
        <?php if($this->session->flashdata('add_id_bhp')): ?>
          <?php $id_bhp = $this->session->flashdata('add_id_bhp'); ?>
          <?php $this->session->set_flashdata('add_id_bhp', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_nama_bhp')): ?>
          <?php $nama_bhp = $this->session->flashdata('add_nama_bhp'); ?>
          <?php $this->session->set_flashdata('add_nama_bhp', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_jenis')): ?>
          <?php $jenis = $this->session->flashdata('add_jenis'); ?>
          <?php $this->session->set_flashdata('add_jenis', null); ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('add_ket')): ?>
          <?php $keterangan = $this->session->flashdata('add_ket'); ?>
          <?php $this->session->set_flashdata('add_ket', null); ?>
        <?php endif; ?>

        <form action="<?php echo base_url(). 'example/update_bhp'; ?>" method="post" class="form-horizontal form-label-left" novalidate >
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_bhp">Id BHP</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="id_asli" value="<?php echo $s->id_bhp ?>">
              <input id="id_bhp" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="id_bhp" required="required" type="text" value="<?php echo $id_bhp ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_bhp">Nama BHP</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama_bhp" name="nama_bhp" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nama_bhp ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="jenis" id="jenis" class="select2_single form-control" tabindex="-1" required="required">
                <option selected="true" value="" disabled ></option>
                <?php foreach($table_jenis_bhp as $jb){ 
                  if ($jb->id == $jenis) {
                    ?><option value="<?php echo $jb->id; ?>" selected><?php echo $jb->nama; ?></option><?php
                  }
                  else {
                    ?><option value="<?php echo $jb->id; ?>"><?php echo $jb->nama; ?></option><?php
                  }
                  ?>
               <?php  }?>
              </select>
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="keterangan" name="keterangan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $keterangan ?>">
            </div>
          </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_bhp') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
     

     <?php } ?>
      </div>
    </div>
  </div>
</div>
