<?php $this->load->view('top');?>
			   <div class="row" id="frm-list">
         <form role='form' method="POST" action="<?php echo base_url()?>absensi/presensi/<?php echo $this->uri->segment(3);?>">
              <div class="col-lg-8">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Absensi</h5>

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
                    <table  class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama Siswa</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0;foreach($list as $list){?>
                        <tr>
                          <td><?php echo ++$no;?></td>
                          <td><?php echo $list->nis;?></td>
                          <td><?php echo $list->nama_siswa;?></td>
                          <td>
                              <input type="radio" name="id_<?php echo $list->id_absensi_dtl;?>" <?php if($list->absensi==1){?> checked="" <?php }?> value='1'> Hadir
                              <input type="radio" name="id_<?php echo $list->id_absensi_dtl;?>" <?php if($list->absensi==2){?> checked="" <?php }?> value='2'> Ijin
                              <input type="radio" name="id_<?php echo $list->id_absensi_dtl;?>" <?php if($list->absensi==3){?> checked="" <?php }?> value='3'> Alpha
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Keterangan</h5>

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
                      <div class="form-group">
                        <label for="exampleInputEmail1">Materi Pembelajaran</label>
                        <textarea name="materi" class="form-control" placeholder="Materi Pembelajaran"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kirim</label>
                        <?php 
                              $k['0']="- Tidak ada pemberitahuan kepada orangtua -";
                              $k['1']="- Beritahu Orangtua bagi yang <b>Alpha</b> -";
                              $k['2']="- Beritahu Orangtua bagi yang <b>Ijin</b> -";
                              $k['3']="- Beritahu Orangtua untuk semua kondisi -";
                              echo form_dropdown('kirim', $k, '',"class='form-control' id='kirim' ");?>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
<?php $this->load->view('footer');?>