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
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                    	<thead>
                    		<tr>
                    			<th style="width:80px">No</th>
                    			<th>Nama Kelas</th>
                    			<th style="width:150px">Aksi</th>
                    		</tr>
                    	</thead>
                      <tbody>
                        <?php $no=0;foreach($list as $data){?>
                        <tr>
                          <td><?php echo ++$no;?></td>
                          <td><?php echo $data->tingkat_kelas." ".$data->jurusan." ".$data->grup_kelas;?></td>
                          <td>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit('<?php echo $data->id_kelas;?>',
                                                                                        '<?php echo $data->tingkat_kelas;?>',
                                                                                        '<?php echo $data->jurusan;?>',
                                                                                        '<?php echo $data->grup_kelas;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>kelas/hapus/<?php echo $data->id_kelas;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus kelas <?php echo $data->tingkat_kelas." ".$data->jurusan." ".$data->grup_kelas; ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
                        <label class="col-sm-2 control-label">Tingkat Kelas</label>
                        <div class="col-sm-5">    
                          <input type="hidden" name="id_kelas" id="id_kelas">                      
                          <?php $tg['']="- Pilih Tingkat Kelas -";$tg['1']='1';$tg['2']='2';$tg['3']='3';
                                echo form_dropdown('tingkat', $tg, '',"class='form-control  validate[required]' id='tingkat'");?>
                        </div>                        
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jurusan</label>
                        <div class="col-sm-5">
                          <?php $jr['']="- Pilih Jurusan -";$jr['IPA']='IPA';$jr['IPS']='IPS';
                                echo form_dropdown('jurusan', $jr, '',"class='form-control validate[required]' id='jurusan'");?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Grup</label>
                        <div class="col-sm-5">
                          <?php $gr['']="- Pilih Grup -";$gr['A']='A';$gr['B']='B';$gr['C']='C';$gr['D']='D';
                                echo form_dropdown('grup', $gr, '',"class='form-control validate[required]' id='grup'");?>
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
        $('.add-edit').attr('action',"<?php echo base_url()?>kelas/add");
        $('#tingkat').val('');
        $('#jurusan').val('');
        $('#grup').val('');
        $('#judul').html("Tambah Kelas");
      });
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
      function edit(id,tingkat,jur,grup)
      {
        $('#judul').html("Edit Kelas");
        $('#id_kelas').val(id);
        $('#tingkat').val(tingkat);
        $('#jurusan').val(jur);
        $('#grup').val(grup);
        $('.add-edit').attr('action',"<?php echo base_url()?>kelas/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      }      
    </script>
<?php $this->load->view('footer');?>