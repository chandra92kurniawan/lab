<?php $this->load->view('top');?>
<!--Begin Datatables-->
            <div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Role</h5>

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
                        <a href="#" id="btn-add" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs">
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
                          <th>Kode Role</th>
                          <th>Nama Role</th>
                          <th style="width:13%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php foreach($role as $role){?>
                      	<tr>
                      		<td><?php echo $role->id_role;?></td>
                      		<td><?php echo $role->nama_role;?></td>
                      		<td>
                      			<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-xs" onclick="edit('<?php echo $role->id_role;?>','<?php echo $role->nama_role;?>')"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                <a href="<?php echo base_url()?>role/hapus/<?php echo $role->id_role;?>" class="btn btn-danger btn-xs" onclick="if ( !confirm('Apakah anda akan menghapus menu <?php echo $role->nama_role ?> ini ?')) return false;"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                      		</td>
                      	</tr>
                      	<?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->

            <!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <form id="form" class="form-horizontal" action="<?php echo base_url()?>role/add" method="POST" id="popup-validation">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h4 class="modal-title" id="myModalLabel"><b id="judul">Tambah Role</b></h4>
			      </div>
			      <div class="modal-body">
			          <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Role</label>
                        <div class="col-sm-5">
                          <input type="hidden" name="id" id="id">
                          <input type="text" class="validate[required] form-control" required="" name="nama" id="nama" placeholder="Nama Role">
                        </div>
                      </div>
			      </div>
			      <div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Simpan</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			        
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			  </form>
			</div><!-- /.modal -->
            
<script type="text/javascript">
	$('#btn-add').click(function(){
		$('#nama').val('');
		$('#form').attr('action',"<?php echo base_url()?>role/add");
		$('#judul').html("Tambah Role");
	});
	function edit(id,nma)
	{
		$('#nama').val(nma);
		$('#id').val(id);
		$('#judul').html("Edit Role");
		$('#form').attr('action',"<?php echo base_url()?>role/edit");
	}
</script>   
<?php $this->load->view('footer');?>