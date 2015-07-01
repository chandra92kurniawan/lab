<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Mata Pelajaran</h5>

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
		
		<th>Nama Pelajaran</th>
		<th>Inisial </th>
		<th>Opsi</th>
		

		</tr>

	</thead>
	<tbody>
		 <?php $no=0;foreach($list as $data){?>
                        <tr>
                          
                          <td><?php echo $data->nama_pelajaran;?></td>
                          <td><?php echo $data->inisial_nama_pelajaran;?></td>
                          
                          <td>
                              <a href="#" class="btn btn-warning btn-xs" onclick="edit('<?php echo $data->id_mata_pelajaran;?>',
                                                                                        '<?php echo $data->nama_pelajaran;?>',                                                                                       
                                                                                        '<?php echo $data->inisial_nama_pelajaran;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                              <a href="<?php echo base_url()?>mata_pelajaran/hapus/<?php echo $data->id_mata_pelajaran;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus Mata Pelajaran <?php echo $data->nama_pelajaran ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
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
                      <div class="form-group">
                        <label class="col-sm-2 control-label">ID Mata Pelajaran</label>
                        <div class="col-sm-5">                          
                          <input type="text" onchange="cekd()" class="validate[required] form-control" name="id_mata_pelajaran" id="d_id_mata_pelajaran" placeholder="ID Mata Pelajaran">
                        </div>
                        <div class="col-sm-2">
                          <input type="hidden" id="cek" name="cek" value="0"> <i id="icon"></i>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Pelajaran</label>
                        <div class="col-sm-5">
                          <input type="text" class="validate[required] form-control" name="nama_pelajaran" id="d_nama_pelajaran" placeholder="Nama Pelajaran">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Inisial Nama Pelajaran</label>
                        <div class="col-sm-5">
                          <input type="text" class="validate[required] form-control" name="inisial_nama_pelajaran" id="d_inisial_nama_pelajaran" placeholder="Inisial Nama Pelajaran">
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
        </div>
   
       <script type="text/javascript">
      $('#btn-add').click(function(){
        $('#frm-list').toggle();
        $('#frm-add').fadeIn('slow');
        $('.add-edit').attr('action',"<?php echo base_url()?>mata_pelajaran/tambah_data");
        $('#d_id_mata_pelajaran').val('');
        $('#d_nama_pelajaran').val('');
        $('#d_inisial_nama_pelajaran').val('');
       
      });
	  
      $('#back').click(function(){
        $('#frm-add').toggle();
        $('#frm-list').fadeIn('slow');        
      });
     function edit(id_mata_pelajaran,nama_pelajaran,inisial_nama_pelajaran)
      {
        $('#judul').html("Edit Mata Pelajaran");
        $('#d_id_mata_pelajaran').val(id_mata_pelajaran);
        $('#d_nama_pelajaran').val(nama_pelajaran);
        $('#d_inisial_nama_pelajaran').val(inisial_nama_pelajaran);
        $('.add-edit').attr('action',"<?php echo base_url()?>mata_pelajaran/edit");
        $('#frm-list').toggle();
       
        $('#frm-add').fadeIn('slow');
      }      
    </script>
<?php $this->load->view('footer');?>