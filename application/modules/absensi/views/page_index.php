<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Presensi</h5>

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
                        </a>  
                        <a href="#" id="btn-add" class="btn btn-success btn-xs">
                          <i class="fa fa-plus"></i> Tambah
                        </a>-->
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <?php echo $this->session->flashdata('msg');?>
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                    	<thead>
                    		<th>No</th>
                    		<th>Hari</th>
                    		<th>Mata Pelajaran</th>
                    		<th>Kelas</th>
                    		<th>Jam</th>
                    		<th>Aksi</th>
                    	</thead>
                    	<tbody>
                    		<?php $no=0;foreach($list as $data){?>
                    		<tr>
                    			<td><?php echo ++$no;?></td>
                    			<td><?php echo $data->hari_indonesia;?></td>
                    			<td><?php echo $data->nama_pelajaran." (".$data->inisial_nama_pelajaran.")";?></td>
                    			<td><?php echo $data->tingkat_kelas."-".$data->jurusan."-".$data->grup_kelas;?></td>
                    			<td><?php echo $data->jam_awal." - ".$data->jam_akhir;?></td>
                    			<td>
                    				<a href="<?php echo base_url()?>absensi/getSiswa/<?php echo $data->id_jadwal_dtl;?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-calendar"></i> Absensi</a>
                    			</td>
                    		</tr>
                    		<?php }?>
                    	</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php $this->load->view('footer');?>