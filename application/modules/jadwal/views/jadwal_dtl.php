<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Jadwal Detail</h5>

				
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
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
						
						</a> --> 
                        
						
						
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
				  
                    <?php echo $this->session->flashdata('msg');?>
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
 					<div class="body"  >
						
						
            <form onsubmit="return byForm()" action="<?php echo base_url()?>jadwal/tambah_data_detail" method="POST" class="form-horizontal add-edit" id="popup-validation">
				
				 <div class="form-group">
                        <label class="col-sm-1 control-label">Kelas </label> 
                        <label id="d_kelas" class="col-sm-5 control-label">: <?php echo $dt->tingkat_kelas;?>-<?php echo $dt->jurusan;?> - <?php echo $dt->grup_kelas;?></label>
				   </div>                 
					
					<div class="form-group">
                        <label class="col-sm-1 control-label">Nama Guru </label> 
                       <label class="col-sm-5 control-label">:  <?php echo $dt->nama_guru;?></label>
                    </div>

							
				<div class="form-group">
                        <label class="col-sm-1 control-label">Pelajaran </label> 
                       <label class="col-sm-5 control-label">: <?php echo $dt->nama_pelajaran;?></label>
				</div>
					 
					         
					  <div class="form-group">
						<label class="col-sm-1 control-label"></label>
						<div class="col-sm-5">	
						<button type="button" data-toggle="modal" data-target="#tambah"  class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
							<a class="btn btn-danger" type="button" href="<?php echo base_url()?>jadwal/index" method="post" id="kembali"><i class="glyphicon glyphicon-remove"></i> Kembali</a>
						</div>
					</div>
				</div>
			  </div>
			</form>

		  </div>
<table class=" dt_table table table-bordered table-condensed table-hover table-striped">
	<thead>
	
		<tr>
		<th>Hari</th>
		<th>Jam Awal</th>
		<th>Jam Akhir</th>
		<th>Opsi</th>
		</tr>

	</thead>
	<tbody>
		<?php foreach($detail as $dtl){?>
		<tr>
			<td><?php echo $dtl->hari_indonesia;?></td>
			<td><?php echo $dtl->jam_awal;?></td>
			<td><?php echo $dtl->jam_akhir;?></td>
			<td>
			 <a href="#" class="btn btn-warning btn-xs" onclick="edit(
																						'<?php echo $dtl->id_jadwal_dtl;?>',
																						'<?php echo $dtl->id_jadwal;?>',																						
																						'<?php echo $dtl->id_hari;?>',
																						'<?php echo $dtl->jam_awal;?>',																					
																						'<?php echo $dtl->jam_akhir;?>'																					
																						
																						)"><i class="glyphicon glyphicon-edit"></i> Edit</a>
			 <a href="<?php echo base_url()?>jadwal/hapus_dtl/<?php echo $dtl->id_jadwal_dtl;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus ID Jadwal <?php echo $dtl->id_jadwal_dtl ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                          
			
			</td>
		</tr>
		<?php }?>
	</tbody>
		
</table>
<!-- Modal Untuk Edit -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:80%; height:40%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Detail</h4>
      </div>
      <div class="modal-body">
       <form onsubmit="return byForm()" action="<?php echo base_url()?>jadwal/edit_detail" method="POST" class="form-horizontal add-edit" id="popup-validation">
		
	  <input type="hidden" id="d_id_jadwal_edit" name="id_jadwal" value="<?php echo $this->uri->segment(3);?>" >
					         
					 <div style="display:none" class="form-horizontal">
                        <label class="col-sm-1 horizontal-label">ID Jadwal Detail</label>
						  <div class="col-sm-5">                          
                             <input type="text" class="form-control" name="id_jadwal_dtl" id="d_id_jadwal_detail_edit" >
                          </div>
                      </div>
					  
                     <div class="form-group">
                        <label class="col-sm-1 control-label">Hari</label>
                        <div class="col-sm-5">
                         <select name="id_hari" class="form-control" id="d_hari_edit">
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
                        <label class="col-sm-1 control-label">Jam Awal</label>
                         <div class="col-sm-5">
                           <input type="time" class="form-control" name="jam_awal" id="d_jam_awal_edit">
                         </div>
					  </div>
					  
					  <div class="form-group">
                        <label class="col-sm-1 control-label">Jam Akhir</label>
                          <div class="col-sm-5">
							<input type="time" class="form-control" name="jam_akhir" id="d_jam_akhir_edit">
                          </div>
					  </div>
					   
				  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" id="save" class="btn btn-primary">Simpan</button>
					  </div>
					</div><!-- /.modal-content -->
					</form>
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->	
<!-- Tutup modal untuk Edit -->
 		


<!-- Modal Untuk Tambah Detail-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:70%; height:40%">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Detail</h4>
      </div>
      <div class="modal-body">
       <form onsubmit="return byForm()" action="<?php echo base_url()?>jadwal/tambah_data_detail" method="POST" class="form-horizontal add-edit" id="popup-validation">
				
	  <div class="form-group">              
                  <div class="col-sm-5">
							<input type="hidden"  id="d_id_jadwal" name="id_jadwal" value='<?php echo $this->uri->segment(3);?>' >
                        </div>
				 </div>       
						 
				
	                 <div class="form-group">
                        <label class="col-sm-1 control-label">Hari</label>
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
                        <label class="col-sm-1 control-label">Jam Awal</label>
                         <div class="col-sm-5">
                           <input type="time" class="form-control" name="jam_awal" id="d_jam_awal">
                         </div>
					  </div>
					  
					  <div class="form-group">
                        <label class="col-sm-1 control-label">Jam Akhir</label>
                          <div class="col-sm-5">
							<input type="time" class="form-control" name="jam_akhir" id="d_jam_akhir">
                          </div>
					  </div>
					   
				  </div><!-- tutup Body-->
				  
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" id="save" class="btn btn-primary">Tambah</button>
					  </div>
					  </form>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->	

<!-- Tutup modal untuk Tambah -->

					
	    <script type="text/javascript">
      $('#btn-add').click(function(){
        $('#frm-list').toggle();
        $('#frm-add').fadeIn('slow');
		$('#d_id_jadwal').val('');
		$('#d_hari').val('');
        $('#d_jam_awal').val('');
        $('#d_jam_akhir').val('');
        
       
      });
    </script>

	
	 <script>
     function edit(id_jadwal_dtl,id_jadwal,id_hari,jam_awal,jam_akhir)
      {
		$('#d_id_jadwal_detail_edit').val(id_jadwal_dtl);
		$('#d_id_jadwal_edit').val(id_jadwal);
        $('#d_hari_edit').val(id_hari);
        $('#d_jam_awal_edit').val(jam_awal);
		$('#d_jam_akhir_edit').val(jam_akhir);
		$('#judul').html("Edit Jadwal");
		$('#editmodal').modal('toggle');
        $('#frm-add').fadeIn('slow');
      }
	  
    </script>
<?php $this->load->view('footer');?>