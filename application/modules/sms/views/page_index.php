<?php $this->load->view('top');?>
			<div class="row" id="frm-list">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>SMS</h5>

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
                        <a href="#" class="btn btn-success btn-xs" id="btn-pesan">
                          <i class="fa fa-plus"></i> Kirim Pesan
                        </a>
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <?php echo $this->session->flashdata('msg');?>
                    <table  class=" dt_table table table-bordered table-condensed table-hover table-striped">
                    	<thead>
                    		<th>No</th>
                    		<th>Tanggal</th>
                    		<th>Status</th>
                    		<th>No Telepon</th>
                    		<th>Kepada</th>
                    		<th>Kelas</th>
                    	</thead>
                    	
                    </table>
                  </div>
                </div>
              </div>
            </div>


          <div class="row" id="frm-kirim" style="display:none">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>SMS</h5>

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
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Orang tua dari</label>
                        <div class="col-sm-8">
                          <input type="text" id="search3" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Pesan</label>
                        <div class="col-sm-8">
                          <textarea id="autosize" name="pesan" class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8">
                          <input type="submit" class="btn btn-primary" value="Kirim"> <button type="button" class="btn btn-danger" id="back">Kembali</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
            </div>


<script type="text/javascript">
/*$('#search').typeahead({
	source:function(query,process){
		$.ajax({

		});
	}
});*/
  $('#btn-pesan').click(function(){
    $('#frm-kirim').show('slow');
    $('#frm-list').hide();
  });
  $('#back').click(function(){
    $('#frm-list').show('slow');
    $('#frm-kirim').hide();
  });
	$(function(){
		$('#search3').autocomplete({
			source:'<?php echo base_url()?>sms/get',
			minLength:2,
			items:3,
			autoSelect:true
		})
	});
	$(function(){
		$('#search').autocomplete({
			source:'<?php echo base_url()?>sms/get',
			items:2,
			autoSelect:true
		})
	});
</script>
<script type="text/javascript">
$(function() {
	$('textarea').inputlimiter({
		limit: 160,
		remText: 'sisa karakter %n menunggu',
		remFullText: 'anda telah memasukan lebih dari 160 karakter,',
		limitText: 'Kamu dapat memasukan %n Karakter kedalam field.'
	});
});

</script>
<?php $this->load->view('footer');?>