 <?php $this->load->view('top');?>
         <div class="row" id="frm-list">
         <form role='form' method="POST" action="<?php echo base_url()?>nilai/insert_nilai">
              <input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
              <input type="hidden" name="id_mata_pelajaran" value="<?php echo $id_mata_pelajaran;?>">
              <div class="col-lg-8">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Penilaian Harian</h5>

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
                          <th>NIS</th>
                          <th>Nama Siswa</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0;foreach($list as $data){?>
                        <tr>
                          <td><?php echo $data->nis;?></td>
                          <td><?php echo $data->nama_siswa;?></td>
                          <td>
                              <input type="number" class="validate[required] form-control" name="nilai_<?php echo $data->nis;?>">
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

                 <div class="form-group">
                        <label for="exampleInputEmail1">Materi Pembelajaran</label>
        <textarea name="materi" class="validate[required] form-control" placeholder="Materi Pembelajaran"><?php //if($ket){echo $ket->keterangan;}?></textarea>
                 </div>

                  <div class="body">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
<?php $this->load->view('footer');?>