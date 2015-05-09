<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Staff Administrasi</h5>

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
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                    	<thead>
                    		<tr>
                    			<th>NIK</th>
                    			<th>Nama</th>
                    			<th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>No Handphone</th>
                          <th>Aksi</th>
                    		</tr>
                    	</thead>
                      <tbody>
                        <?php $no=0;foreach($list as $data){?>
                        <tr>
                          <td><?php echo $data->nik;?></td>
                          <td><?php echo $data->nama_admin;?></td>
                          <td><?php echo $data->alamat;?></td>
                          <td><?php if($data->jenis_kelamin=='L'){echo"Laki-laki";}else{echo"Perempuan";} ?></td>
                          <td><?php echo $data->no_hp;?></td>
                          <td>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit('<?php echo $data->nik;?>',
                                                                                        '<?php echo $data->nama_admin;?>',
                                                                                        '<?php echo $data->alamat;?>',
                                                                                        '<?php echo $data->no_hp;?>',
                                                                                        '<?php echo $data->jenis_kelamin;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>admin/hapus/<?php echo $data->nik;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus karyawan <?php echo $data->nama_admin ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
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
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-5">                          
                          <input type="text" onchange="cekd()" class="validate[required] form-control" name="nik" id="nik" placeholder="NIK">
                        </div>
                        <div class="col-sm-2">
                          <input type="hidden" id="cek" name="cek" value="0"> <i id="icon"></i>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Admin</label>
                        <div class="col-sm-5">
                          <input type="text" class="validate[required] form-control" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-5">
                          <textarea class="validate[required] form-control" name="alamat" id="alamat" placeholder="Alamat">
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-sm-5">
                          <input onkeypress="return isNumberKey(event)" type="text" class="validate[required] form-control" name="no_hp" id="no_hp" placeholder="No Handphone">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                          <?php 
                          $jk['']="- Pilih Jenis Kelamin -";$jk['L']="Laki-laki";$jk['P']="Perempuan";
                          echo form_dropdown('jk', $jk, '',"id='jk' class='validate[required] form-control'");?>
                          
                        </div>
                      </div>
                      <div id="pass">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-5">
                          <input type="password" class="validate[required] form-control" name="password" id="password1" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Re-Password</label>
                        <div class="col-sm-5">
                          <input type="password" class="validate[required] form-control" id="password2" placeholder="Password">
                        </div>
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
        $('.add-edit').attr('action',"<?php echo base_url()?>admin/add");
        $('#nik').val('');
        $('#nama_karyawan').val('');
        $('#alamat').val('');
        $('#no_hp').val('');
        $('#cek').val('0');
        $('#nik').removeAttr('readonly');
        $('#judul').html("Tambah Admin");
        $('#password1').val('');
        $('#password2').val('');
        $('#pass').show();
      });
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
      function edit(id,nma,alm,tlp,jk)
      {
        $('#pass').hide();
        $('#judul').html("Edit Admin");
        $('#nik').val(id);
        $('#nik').attr('readonly',"");
        $('#cek').val('1');
        $('#nama_karyawan').val(nma);
        $('#alamat').val(alm);
        $('#no_hp').val(tlp);
        $('#jk').val(jk);
        $('.add-edit').attr('action',"<?php echo base_url()?>admin/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      }
      function cekd()
      {
        var nik=$('#nik').val();
        $.post("<?php echo base_url()?>admin/cek/"+nik,function(data){
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
        var pass1=$('#password1').val();
        var pass2=$('#password2').val();
        if(cek==0){
          alert("Maaf NIK telah terdaftar");
          return false;          
        }else{
          if(pass1!=pass2){
            alert("Maaf password anda tidak cocok");
            return false;
          }else{
            return true;
          }
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