<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Kelas</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        <!--<a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                          <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                          <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                          <i class="fa fa-times"></i>
                        </a> --> 
                        <a href="#" id="btn-add" class="btn btn-success btn-xs">
                          <i class="fa fa-plus"></i> Tambah
                        </a>
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="row">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url()?>siswa/index">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Tingkat Kelas</label>
                          <div class="col-sm-6">    
                            <?php $tg['']="- Pilih Tingkat Kelas -";$tg['1']='1';$tg['2']='2';$tg['3']='3';
                                  echo form_dropdown('tingkat', $tg, $tingkat,"class='form-control' id='tingkat'");?>
                          </div>                        
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Grup</label>
                          <div class="col-sm-6">
                            <?php $gr['']="- Pilih Grup -";$gr['A']='A';$gr['B']='B';$gr['C']='C';$gr['D']='D';
                                  echo form_dropdown('grup', $gr, $grup,"class='form-control' id='grup'");?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Jurusan</label>
                          <div class="col-sm-6">
                            <?php $jr['']="- Pilih Jurusan -";$jr['IPA']='IPA';$jr['IPS']='IPS';
                                  echo form_dropdown('jurusan', $jr, $jurusan,"class='form-control' id='jurusan'");?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Tampilkan</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    </div><br><hr><br>
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                    	<thead>
                    		<tr>
                    			<th style="width:80px">NIS</th>
                    			<th>Nama Siswa</th>
                    			<th style="width:150px">Kelas</th>
                          <th>Nama OT*</th>
                          <th>No Hp OT*</th>
                          <th style="width:150px">Aksi</th>
                    		</tr>
                    	</thead>
                      <tbody>
                        <?php foreach($list as $data){?>
                        <tr>
                          <td><?php echo $data->nis;?></td>
                          <td><?php echo $data->nama_siswa;?></td>
                          <td><?php echo $data->tingkat_kelas." ".$data->jurusan." ".$data->grup_kelas;?></td>
                          <td><?php echo $data->nama_orang_tua;?></td>
                          <td><?php echo $data->no_orang_tua;?></td>
                          <td>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit('<?php echo $data->nis;?>',
                                                                                        '<?php echo $data->nama_siswa;?>',
                                                                                        '<?php echo $data->jenis_kelamin;?>',
                                                                                        '<?php echo $data->no_orang_tua;?>',
                                                                                        '<?php echo $data->nama_orang_tua;?>',
                                                                                        '<?php echo $data->alamat;?>',
                                                                                        '<?php echo $data->id_kelas;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>siswa/hapus/<?php echo $data->nis;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus siswa <?php echo $data->nama_siswa ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>  
                    <p>Keterangan :<br>*OT : Orangtua</p>
                  </div>
                </div>
            </div>
        </div>
            <div class="row" id="frm-add" style="display:none">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5 id="judul">Tambah Program</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <form onsubmit="return byForm()" class="form-horizontal add-edit" action="<?php echo base_url()?>menu/add" method="POST" id="popup-validation">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">NIS</label>
                        <div class="col-sm-5">                          
                          <input type="text" onchange="cekd()" class="validate[required] form-control" name="nis" id="nis" placeholder="NIS">
                        </div>
                        <div class="col-sm-2">
                          <input type="hidden" id="cek" name="cek" value="0"> <i id="icon"></i>
                        </div>                        
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-5">
                          <input type="text" name="nama_siswa" id="nama_siswa" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-5">
                          <?php echo form_dropdown('kelas', $kelas, '',"class='form-control validate[required]' id='kelas'");?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                          <?php $jk['']="- Pilih Jenis Kelamin -";$jk['L']="laki-laki";$jk['P']="Perempuan";
                                echo form_dropdown('jk', $jk, '',"class='form-control validate[required]' id='jk'");?>
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
                          <input type="text" name="nama_orang_tua" id="nama_orang_tua" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor handphone</label>
                        <div class="col-sm-5">
                          <input type="text" onkeypress="return isNumberKey(event)" name="nomor_hp" id="nomor_hp" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-5">
                          <textarea type="text" name="alamat" id="alamat" class="form-control validate[required]"></textarea>
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button> <button class="btn btn-danger" type="button" id="back"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    <script type="text/javascript">
      $('#btn-add').click(function(){
        $('#frm-list').toggle();
        $('#frm-add').fadeIn('slow');
        $('.add-edit').attr('action',"<?php echo base_url()?>siswa/add");
        $('#nis').val('');
        $('#nama_siswa').val('');
        $('#jk').val('');
        $('#nomor_hp').val('');
        $('#nama_orang_tua').val('');
        $('#alamat').val('');
        $('#kelas').val('');
        $('#cek').val('0');
        $('#nis').removeAttr('readonly');
        $('#judul').html("Tambah Siswa");
      });
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
      function edit(nis,nms,jk,no,nmo,alm,kls)
      {
        $('#judul').html("Edit Siswa");
        $('#nis').attr('readonly','');
        $('#nis').val(nis);
        $('#nama_siswa').val(nms);
        $('#jk').val(jk);
        $('#nomor_hp').val(no);
        $('#nama_orang_tua').val(nmo);
        $('#alamat').val(alm);
        $('#kelas').val(kls);
        $('#cek').val('1');
        $('.add-edit').attr('action',"<?php echo base_url()?>siswa/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      } 
      function cekd()
      {
        var nik=$('#nis').val();
        $.post("<?php echo base_url()?>siswa/cek/"+nik,function(data){
          if(data==0){
            $('#icon').attr('class',"glyphicon glyphicon-ok");
            $('#cek').val('1');
          }else{
            $('#icon').attr('class',"glyphicon glyphicon-remove");
            $('#cek').val('0');
          }
        });
      }
      function byForm()
      {
        var cek=$('#cek').val();
        if(cek==0){
          alert("Maaf NIK telah terdaftar");
          return false;          
        }
      }
      function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
      }     
    </script>
<?php $this->load->view('footer');?>