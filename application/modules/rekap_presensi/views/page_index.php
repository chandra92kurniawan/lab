<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Rekap Presensi</h5>

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
                    		<tr>
                    			<th style="width:50px">No</th>
                          <th>Kelas</th>
                          <th>Mata pelajaran</th>
                          <th>Aksi</th>
                    		</tr>
                    	</thead>
                      <tbody>
                        <?php $no=0;foreach($list as $list){?>
                        <tr>
                          <td><?php echo ++$no;?></td>
                          <td><?php echo $list->tingkat_kelas." ".$list->jurusan." ".$list->grup_kelas;?></td>
                          <td><?php echo $list->nama_pelajaran;?></td>
                          <td>
                            <a href="<?php echo base_url()?>rekap_presensi/rekap/<?php echo $list->id_jadwal;?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-calendar"></i> Rekap</a>
                            
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