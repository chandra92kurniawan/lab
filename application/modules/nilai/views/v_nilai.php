<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Guru</h5>

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
		
		<th>Mata Pelajaran</th>
		<th>Nama Guru</th>
		<th>Tanggal</th>
		<th>Keterangan</th>
		<th>Opsi</th>
		

		</tr>

	</thead>
			<tbody>
						<?php foreach($list as $data){?>
                        <tr>						 
                          
                          <td><?php echo $this->M_nilai->getnamapelajaran($data->id_mata_pelajaran);?></td>
						  <td><?php echo $this->M_nilai->getnamaguru($data->nik);?></td>
						  <td><?php echo $data->tanggal;?></td>
                          <td><?php echo $data->keterangan;?></td>                        
                          <td>
							  <a href="<?php echo base_url()?>nilai/detail/<?php echo $data->id_nilai;?>"  class="btn btn-success btn-xs"><i class="glyphicon glyphicon-list-alt")> </i> Detail</a>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit(
																						'<?php echo $data->id_nilai;?>',
																						'<?php echo $data->id_mata_pelajaran;?>',																						
																						'<?php echo $data->nik;?>',
																						'<?php echo $data->tanggal;?>'																					
																						'<?php echo $data->keterangan;?>'
																						)"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>nilai/hapus/<?php echo $data->id_nilai;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus  <?php echo $data->id_nilai ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                          </td>
                        </tr>
                        <?php }?>
			</tbody>
 					</table>
 				  </div>
 				</div>
 			</div>
 		</div>
		
				<div class="row" id="frm-add" style="display:none" >
              <div class="col-lg-12">
                <div class="box ">
				
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>  
                    </div>
                    <h5 id="judul">Tambah Data</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        
                      </nav>
                    </div><!-- /.toolbar --> 
                  </header>
					
					
				<div class="body"  >
                    <form onsubmit="return byForm()" class="form-horizontal add-edit" action="<?php echo base_url()?>nilai/tambah_data" method="POST" id="popup-validation">
				
				<div class="form-group" style="display:none">
                        <label class="col-sm-2 control-label">ID Nilai</label>
                        <div class="col-sm-5">
							<input type="text" id="d_id_nilai" name="id_nilai">
                        </div>
				 </div>        
				
                 <div class="form-group">
                        <label class="col-sm-2 control-label">Pelajaran</label>
                        <div class="col-sm-5">
							<?php echo form_dropdown('id_mata_pelajaran',$dt_pelajaran,'',"class='form-control' id='d_mata_pelajaran'"); ?>
                       </div>
					   </div>	             
					
					<div class="form-group">
                        <label class="col-sm-2 control-label">Nama Guru</label>
                        <div class="col-sm-5">
							<?php echo form_dropdown('nik',$dt_nik,'',"class='form-control' id='d_nik'"); ?>
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
        $('.add-edit').attr('action',"<?php echo base_url()?>jadwal/tambah_data");
        $('#d_id_kelas').val('');
		$('#d_nik').val('');
		$('#d_id_mata_pelajaran').val('');
		
      });
	  
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
	  </script>
	  
	  <script>
     function edit(id_kelas,id_jadwal,nik,id_mata_pelajaran)
      {
        $('#judul').html("Edit Jadwal");
	   $('#d_id_kelas').val(id_kelas);
	   $('#d_id_jadwal').val(id_jadwal);
	   $('#d_nik').val(nik);
		$('#d_id_mata_pelajaran').val(id_mata_pelajaran);
        $('.add-edit').attr('action',"<?php echo base_url()?>jadwal/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      }      
	  
    </script>
<?php $this->load->view('footer');?>