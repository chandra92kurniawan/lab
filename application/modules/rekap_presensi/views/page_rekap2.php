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
                        </a>-->  
                        <a href="<?php echo base_url()?>rekap_presensi" id="" class="btn btn-danger btn-xs">
                           Kembali
                        </a> 
                        <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></i> Cetak</a>
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <?php echo $this->session->flashdata('msg');?>
                    <table class="table table-bordered">
                    	<thead>
                    		<tr>
                    			<th colspan="2" style="width:10px"><center>Data Siswa</center></th>                    			
                    			<?php $col=0;foreach($absen as $a){?>
								<?php ++$col;?>
								<?php }?>
								<th colspan="<?php echo $col;?>"><center> Data Kehadiran</center></th>
                    		</tr>
                    		<tr>
                    			<th style="width:10px">NIS</th>
                    			<th style="width:10px">Nama</th>
                    			<?php $no=0;foreach($absen as $a){?>
								<th style="width:10px"><a href="<?php echo base_url()?>rekap_presensi/detail/<?php echo $a->id_jadwal_dtl;?>/<?php echo $a->id_absensi;?>" title="<?php echo $a->tanggal;?>"><?php echo ++$no;?></a> </th>
								<?php }?>
                    		</tr>
                    	</thead>
                    	<tbody>
							<?php $zz=0;foreach($siswa as $siswa){?>
							<tr>
								<td><?php echo $siswa->nis;?></td>
								<td><?php echo $siswa->nama_siswa;?></td>	
							<?php $no=0;foreach($absen as $z){
									echo "<td>".$list[$siswa->nis."-".$z->id_absensi]."</td>";
									if($list[$siswa->nis."-".$z->id_absensi]=="v"){										
										
										$no++;
									}
								?>

								<?php }?>
							</tr>
							<?php $zz++;} $c=$col+2;?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2"><b>Jumlah Kehadiran (Siswa)</b></td>
								<?php $no=0;foreach($absen as $a){?>
								<td><b><?php echo $this->rekap->getJmlMasuk($a->id_absensi);?></b></td>
								<?php }?>
							</tr>
						</tfoot>
                    </table>
                  </div>
                </div>
            </div>
        </div>
<?php $this->load->view('footer');?>