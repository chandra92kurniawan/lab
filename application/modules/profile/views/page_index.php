<?php $this->load->view('top');?>
<br>
<?php echo $this->session->flashdata('msg');?>

            <div class="row" id="frm-add">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5 id="judul">Update Data Siswa</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <form onsubmit="return byForm()" class="form-horizontal add-edit" action="<?php echo base_url()?>profile/update_siswa" method="POST" id="popup-validation">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">NIS</label>
                        <div class="col-sm-5">                          
                          <input type="text" readonly="" class="validate[required] form-control" name="nis" value="<?php echo $this->session->userdata('username');?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-5">
                          <input type="text" readonly="" value="<?php echo $this->session->userdata('nama_user');?>" name="nama_siswa" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" name="kelas" value="<?php echo $siswa->tingkat_kelas.'-'.$siswa->jurusan.'-'.$siswa->grup_kelas;?>" readonly="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                          <?php $jk['']="- Pilih Jenis Kelamin -";$jk['L']="laki-laki";$jk['P']="Perempuan";
                                echo form_dropdown('jk', $jk, $siswa->jenis_kelamin,"class='form-control validate[required]' id='jk' readonly=''");?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <hr><hr>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Orang Tua</label>
                        <div class="col-sm-5">
                          <input type="text" name="nama_orang_tua" value="<?php echo $siswa->nama_orang_tua;?>" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor handphone Orang tua</label>
                        <div class="col-sm-5">
                          <input type="text" onkeypress="return isNumberKey(event)" name="nomor_hp" value="<?php echo $siswa->no_orang_tua;?>" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Orang tua</label>
                        <div class="col-sm-5">
                          <textarea type="text" name="alamat" id="alamat" class="form-control validate[required]"><?php echo $siswa->alamat;?></textarea>
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Update</button> <button class="btn btn-danger" type="button" id="back"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

<br><br><br>

<script type="text/javascript">
    function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
      }
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/highchart.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/exporting.js"></script>
<?php $this->load->view('footer');?>