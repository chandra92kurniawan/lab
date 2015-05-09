<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Diskon</h5>

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
		<th>ID Jadwal Detail</th>
		<th>Hari</th>
		<th>Jam Awal </th>
		<th>Jam Akhir</th>
		<th>Opsi</th>
		</tr>

	</thead>
	<tbody>
		 <?php $no=0;foreach($list as $data){?>
                        <tr>
                          <td><?php echo $data->id_jadwal_dtl;?></td>
                          <td><?php echo $this->M_jadwal_dtl->getnamahari($data->id_hari);?></td>
                          <td><?php echo $data->jam_awal;?></td>
                          <td><?php echo $data->jam_akhir;?></td>
                          
                          <td>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit('<?php echo $data->id_jadwal_dtl;?>',
                                                                                        '<?php echo $data->id_hari;?>',                                                                                       
                                                                                        '<?php echo $data->jam_akhir;?>',                                                                                       
                                                                                        '<?php echo $data->jam_awal;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>jadwal_dtl/hapus/<?php echo $data->id_jadwal_dtl;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus Jadwal Detail <?php echo $data->id_jadwal_dtl ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
                     
						<div class="form-group" style="display:none">
                        <label class="col-sm-2 control-label">Id_Jadwal</label>
                        <div class="col-sm-5">
							<input type="text" id="d_id_jadwal" name="id_jadwal">
                        </div>
				 </div>        
				
                 <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-5">
                         <?php echo form_dropdown('id_kelas',$dt_nama,'',"class='form-control' id='d_id_kelas'"); ?>
                        </div>
				   </div>                 
					
					<div class="form-group">
                        <label class="col-sm-2 control-label">Nama Guru</label>
                        <div class="col-sm-5">
							<?php echo form_dropdown('nama_guru',$dt_nik,'',"class='form-control' id='d_nik'"); ?>
                        </div>
                    </div>
							
					<div class="form-group">
                        <label class="col-sm-2 control-label">Pelajaran</label>
                        <div class="col-sm-5">
							<?php echo form_dropdown('nama_pelajaran',$dt_pelajaran,'',"class='form-control' id='d_id_mata_pelajaran'"); ?>
                       </div>
					</div>	

					 <div class="form-group">
                        <label class="col-sm-2 control-label">ID Jadwal Detail</label>
                        <div class="col-sm-5">                          
                          <input type="text" onchange="cekd()" class="validate[required] form-control" name="id_jadwal_dtl" id="d_id_jadwal_detail" placeholder="ID Jadwal Detail">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Hari</label>
                        <div class="col-sm-5">
                          <select name="id_hari" class="form-control" id="d_hari">
						  <option value="1">Senin</option>
						  <option value="2">Selasa</option>
						  <option value="3">Rabu</option>
						  <option value="4">Kamis</option>
						  <option value="5">Jumat</option>
						  <option value="6">Sabtu</option>
						  </select>
                         </div>
						 </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jam Awal</label>
                        <div class="col-sm-5">
                          <input type="time" class="validate[required] form-control" name="jam_awal" id="d_jam_awal">
                          </div>
						  </div>
						  <div class="form-group">
                        <label class="col-sm-2 control-label">Jam Akhir</label>
                        <div class="col-sm-5">
                          <input type="time" class="validate[required] form-control" name="jam_akhir" id="d_jam_akhir">
                          </div>
						  </div>
						  <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button> <button class="btn btn-danger" type="button" id="back"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                        </div>
                      </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        
   
       <script type="text/javascript">
      $('#btn-add').click(function(){
        $('#frm-list').toggle();
        $('#frm-add').fadeIn('slow');
        $('.add-edit').attr('action',"<?php echo base_url()?>jadwal_dtl/tambah_data");
        $('#d_id_jadwal_detail').val('');
        $('#d_hari').val('');
        $('#d_jam_awal').val('');
        $('#d_jam_akhir').val('');
       
      });
	  
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
     function edit(id_jadwal_dtl,id_hari,jam_awal,jam_akhir)
      {
        $('#judul').html("Edit Mata Pelajaran");
        $('#d_id_jadwal_detail').val(id_jadwal_dtl);
        $('#d_hari').val(id_hari);
        $('#d_jam_awal').val(jam_awal);
        $('#d_jam_akhir').val(jam_akhir);
        $('.add-edit').attr('action',"<?php echo base_url()?>jadwal_dtl/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      }      
    </script>
<?php $this->load->view('footer');?>