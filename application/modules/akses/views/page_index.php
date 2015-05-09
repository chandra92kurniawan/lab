<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Manajemen Akses</h5>

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
                    <form class="form-horizontal" method="POST" action="<?php echo base_url()?>akses">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">Role</label>
                        <div class="col-sm-4">
                          <?php echo form_dropdown('role', $role, $id,"class='form-control'");?>
                        </div>
                        <div class="col-sm-2">
                          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Tampilkan</button>
                        </div>
                      </div>
                    </form>
                    <hr>
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Nama Menu</th>
                          <th style="width:50px">Akses</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($akses as $akses){?>
                        <tr>
                          <td><?php echo $akses['nama_menu'];?></td>
                          <td style="text-center">
                            <?php if($akses['akses']==0){
                              ?><input type='checkbox' onclick="inp('<?php echo $akses['id_menu'];?>','<?php echo $id;?>')" id="id_<?php echo $akses['id_menu'];?>" name="id_<?php echo $akses['id_menu'];?>"><?php 
                            }else{?>
                              <input type='checkbox' onclick="inp('<?php echo $akses['id_menu'];?>','<?php echo $id;?>')" id="id_<?php echo $akses['id_menu'];?>" name="id_<?php echo $akses['id_menu'];?>" checked><?php 
                            } ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
          
<script type="text/javascript">
    function inp(id,rol)
    {
      if(document.getElementById('id_'+id).checked)
      {
        
        $.post("<?php echo base_url()?>akses/beri/1/"+id+"/"+rol);
        
      }
      else
      {
        
        $.post("<?php echo base_url()?>akses/beri/0/"+id+"/"+rol);
        
      }
      
    }
</script>
<?php $this->load->view('footer');?>