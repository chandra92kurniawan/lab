 <?php $this->load->view('top');?>
      <div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Penilaian</h5>

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
    	<th>Kelas</th>
      <th>Keterangan</th>
		<th>Opsi</th>
		

	</tr>

	</thead>
			<tbody>
						<?php foreach($list as $data){?>
<tr>						 
                          
              <td><?php echo $data->nama_pelajaran;?></td>
			        <td><?php echo $data->nama_guru;?></td>
			        <td><?php echo $data->id_kelas;?></td>
              <td><?php echo $data->keterangan;?></td>
                                      
              <td>
							  <a href="<?php echo base_url()?>info_sms/detail/<?php echo $data->id_kelas;?>/<?php echo $data->id_mata_pelajaran;?>/<?php echo $data->id_nilai;?>"  class="btn btn-success btn-xs"><i class="glyphicon glyphicon-list-alt")> </i> Lihat Status</a>
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
					
				
        </div>
      </form>
      </div>
    </div>

<?php $this->load->view('footer');?>