<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Pembelian</h2>
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
      <?php $pemasok = ""; ?>
      <?php $banyak = ""; ?>
      <?php $per_unit = ""; ?>
      <?php $harga_beli_unit = ""; ?>
      <?php $harga_beli_total = ""; ?>
      <?php $harga_jual = ""; ?>
      <?php $dp = ""; ?>
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
        <form action="<?php echo base_url(). 'example/add_pembelian_obat'; ?>" method="post" class="form-horizontal form-label-left" novalidate>

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

          <!-- <div class="item form-group">
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
          </div> -->

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="banyak">Jumlah</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="banyak" name="banyak" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $banyak ?>">
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit">Unit</label>
            <div class="col-md-6 col-sm-6 col-xs-12 ">
              <select  name="unit" id="unit" class="select2_single form-control" tabindex="-1" required="required">
              <option selected="true" value="" disabled ></option>
              <?php 
                if ($unit == 'YES') {
                  ?><option value="Box" selected>Box</option><?php
                  ?><option value="Pcs">Pcs</option><?php
                }
                else if ($unit == 'Pcs') {
                  ?><option value="Box">Box</option><?php
                  ?><option value="Pcs" selected>Pcs</option><?php
                }
                else {
                  ?><option value="Box">Box</option><?php
                  ?><option value="Pcs">Pcs</option><?php
                }
              ?>
            </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="per_unit">Per Unit</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="per_unit" name="per_unit" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $per_unit ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pemasok">Pemasok</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="pemasok" id="pemasok" class="select2_single form-control" tabindex="-1" required="required">
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
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_kadaluwarsa">Tanggal Kadaluwarsa</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type="text" name="tgl_kadaluwarsa" id="tgl_kadaluwarsa" class="form-control" required="required">
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_pembelian">Tanggal Pembelian</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type="text" name="tgl_pembelian" id="tgl_pembelian" class="form-control" required="required">
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_beli_unit">Harga Beli per Unit</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="harga_beli_unit" name="harga_beli_unit" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $harga_beli_unit ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_beli_total">Total Harga Beli</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="harga_beli_total" name="harga_beli_total" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $harga_beli_total ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga_jual">Harga Jual</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="harga_jual" name="harga_jual" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $harga_jual ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pembayaran">Pembayaran</label>
            <div class="col-md-6 col-sm-6 col-xs-12 ">
              <select  name="pembayaran" id="pembayaran" class="select2_single form-control" tabindex="-1" required="required">
              <option selected="true" value="" disabled ></option>
              <?php 
                if ($pembayaran == 'Lunas') {
                  ?><option value="Lunas" selected>Lunas</option><?php
                  ?><option value="Belum Lunas">Belum Lunas</option><?php
                }
                else if ($unit == 'Belum Lunas') {
                  ?><option value="Lunas">Lunas</option><?php
                  ?><option value="Belum Lunas" selected>Belum Lunas</option><?php
                }
                else {
                  ?><option value="Lunas">Lunas</option><?php
                  ?><option value="Belum Lunas">Belum Lunas</option><?php
                }
              ?>
            </select>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dp">Uang Dibayar (DP)</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="dp" name="dp" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $dp ?>">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jatuh_tempo">Jatuh Tempo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class='input-group date' id='myDatepicker2'>
                  <input type="text" name="jatuh_tempo" id="jatuh_tempo" class="form-control" required="required">
                  <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <a href="<?php echo base_url('example/table_pembelian_obat') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              <button id="send" type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
