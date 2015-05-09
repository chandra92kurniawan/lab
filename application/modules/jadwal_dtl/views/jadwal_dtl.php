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
		
					<th>ID Kelas</th>
					<th>Nama Guru</th>
					<th>ID Pelajaran</th>
					<th>Opsi</th>
					
				</tr>

	</thead>
	<tbody>
		 <?php foreach($list_dtl as $data){?>
                        <tr>
                         
                          <td><?php echo $data->id_hari;?></td>
						  <td><?php echo $data->jam_awal;?></td>
						  <td><?php echo $data->jam_akhir;?></td>
                          
                          <td>
							  <a href="#" class="btn btn-success btn-xs"  data-toggle="modal" data-target="#basicModal" onclick="viewdetail(<?php echo $data->id_hari; ?>);"><i class="glyphicon glyphicon-user"></i>Detail</a>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit( 
																						'<?php echo $data->id_hari;?>',                                                                                       
                                                                                        '<?php echo $data->jam_awal;?>',                                                                                       
                                                                                        '<?php echo $data->jam_akhir;?>'
																						
																						)"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>jadwal/hapus/<?php echo $data->id_hari;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus ID Jadwal <?php echo $data->id_jadwal ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                          </td>
                        </tr>
                        <?php }?>
			
 					</table>
 				  </div>
 				</div>
 			</div>
 		</div>		
		
		
		</a>
					
				<div class="row" id="frm-add" style="display:none" >
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
					
					
					<div class="body"  >
                    <form onsubmit="return byForm()" class="form-horizontal add-edit" action="<?php echo base_url()?>menu/add" method="POST" id="popup-validation">
                      
						
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
	 


<?php $this->load->view('footer');?>