<?php $this->load->view('top');?>
<br>
<?php if($status!='1'){?>
<?php echo $this->session->flashdata('msg');?>
<div class="row">
	<div class="col-md-9">
		<div id="container"></div>		
	</div>
	<!--<div class="col-md-1">
		
	</div>-->
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12">
				<div class="well well-small dark">
		          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
		          </div>
		          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
		          </div>
		          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
		          </div>
		          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
		          </div>
		        </div>
			</div>
			<div class="col-md-12">
				<div class="well well-small dark">
		          <ul class="list-unstyled">
		            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
		            </li>
		            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
		            </li>
		            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
		            </li>
		            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
		            </li>
		          </ul>
		        </div>
			</div>
		</div>
		
	</div>
</div>
<?php }else{?>
            <div class="row" id="frm-add">
              <div class="col-lg-12">
                <div class="box ">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5 id="judul">Update Data Siswa</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div class="body">
                    <form onsubmit="return byForm()" class="form-horizontal add-edit" action="<?php echo base_url()?>dashboard/update_siswa" method="POST" id="popup-validation">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">NIS</label>
                        <div class="col-sm-5">                          
                          <input type="text" readonly="" class="validate[required] form-control" name="nis" value="<?php echo $this->session->userdata('username');?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Siswa</label>
                        <div class="col-sm-5">
                          <input type="text" readonly="" value="<?php echo $this->session->userdata('nama_user');?>" name="nama_siswa" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-5">
                          <input class="form-control" type="text" name="kelas" value="<?php echo $siswa->tingkat_kelas.'-'.$siswa->jurusan.'-'.$siswa->grup_kelas;?>" readonly="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-5">
                          <?php $jk['']="- Pilih Jenis Kelamin -";$jk['L']="laki-laki";$jk['P']="Perempuan";
                                echo form_dropdown('jk', $jk, $siswa->jenis_kelamin,"class='form-control validate[required]' id='jk' readonly=''");?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <hr><hr>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Password baru</label>
                        <div class="col-sm-5">
                          <input type="password" id="password" name="password" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Ulangi Password</label>
                        <div class="col-sm-5">
                          <input type="password" id="password1" name="password1" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Orang Tua</label>
                        <div class="col-sm-5">
                          <input type="text" name="nama_orang_tua" value="<?php echo $siswa->nama_orang_tua;?>" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor handphone Orang tua</label>
                        <div class="col-sm-5">
                          <input type="text" onkeypress="return isNumberKey(event)" name="nomor_hp" value="<?php echo $siswa->no_orang_tua;?>" class="form-control validate[required]">
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat Orang tua</label>
                        <div class="col-sm-5">
                          <textarea type="text" name="alamat" id="alamat" class="form-control validate[required]"><?php echo $siswa->alamat;?></textarea>
                        </div> 
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-5">
                          <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Update</button> <button class="btn btn-danger" type="button" id="back"><i class="glyphicon glyphicon-remove"></i> Batal</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

    <?php }?>
<br><br><br>
<pre>
	<?php print_r($this->session->all_userdata())?>
</pre>
<script type="text/javascript">
    function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
      }   
	$(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Jumlah Pengiriman SMS Absensi Siswa'
        },
        subtitle: {
            text: 'Jumlah Pengiriman SMS Absensi Siswa'
        },
        xAxis: {
            type: '',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: ''
            }
        },
        yAxis: {
            title: {
                text: ''
            },
            min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
        },

        series: [{
            name: 'Winter 2007-2008',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
                [Date.UTC(1970,  9, 27), 0   ],
                [Date.UTC(1970, 10, 10), 0.6 ],
                [Date.UTC(1970, 10, 18), 0.7 ],
                [Date.UTC(1970, 11,  2), 0.8 ],
                [Date.UTC(1970, 11,  9), 0.6 ],
                [Date.UTC(1970, 11, 16), 0.6 ],
                [Date.UTC(1970, 11, 28), 0.67],
                [Date.UTC(1971,  0,  1), 0.81],
                [Date.UTC(1971,  0,  8), 0.78],
                [Date.UTC(1971,  0, 12), 0.98],
                [Date.UTC(1971,  0, 27), 1.84],
                [Date.UTC(1971,  1, 10), 1.80],
                [Date.UTC(1971,  1, 18), 1.80],
                [Date.UTC(1971,  1, 24), 1.92],
                [Date.UTC(1971,  2,  4), 2.49],
                [Date.UTC(1971,  2, 11), 2.79],
                [Date.UTC(1971,  2, 15), 2.73],
                [Date.UTC(1971,  2, 25), 2.61],
                [Date.UTC(1971,  3,  2), 2.76],
                [Date.UTC(1971,  3,  6), 2.82],
                [Date.UTC(1971,  3, 13), 2.8 ],
                [Date.UTC(1971,  4,  3), 2.1 ],
                [Date.UTC(1971,  4, 26), 1.1 ],
                [Date.UTC(1971,  5,  9), 0.25],
                [Date.UTC(1971,  5, 12), 0   ]
            ]
        }, {
            name: 'Winter 2008-2009',
            data: [
                [Date.UTC(1970,  9, 18), 0   ],
                [Date.UTC(1970,  9, 26), 0.2 ],
                [Date.UTC(1970, 11,  1), 0.47],
                [Date.UTC(1970, 11, 11), 0.55],
                [Date.UTC(1970, 11, 25), 1.38],
                [Date.UTC(1971,  0,  8), 1.38],
                [Date.UTC(1971,  0, 15), 1.38],
                [Date.UTC(1971,  1,  1), 1.38],
                [Date.UTC(1971,  1,  8), 1.48],
                [Date.UTC(1971,  1, 21), 1.5 ],
                [Date.UTC(1971,  2, 12), 1.89],
                [Date.UTC(1971,  2, 25), 2.0 ],
                [Date.UTC(1971,  3,  4), 1.94],
                [Date.UTC(1971,  3,  9), 1.91],
                [Date.UTC(1971,  3, 13), 1.75],
                [Date.UTC(1971,  3, 19), 1.6 ],
                [Date.UTC(1971,  4, 25), 0.6 ],
                [Date.UTC(1971,  4, 31), 0.35],
                [Date.UTC(1971,  5,  7), 0   ]
            ]
        }, {
            name: 'Winter 2009-2010',
            data: [
                [Date.UTC(1970,  9,  9), 0   ],
                [Date.UTC(1970,  9, 14), 0.15],
                [Date.UTC(1970, 10, 28), 0.35],
                [Date.UTC(1970, 11, 12), 0.46],
                [Date.UTC(1971,  0,  1), 0.59],
                [Date.UTC(1971,  0, 24), 0.58],
                [Date.UTC(1971,  1,  1), 0.62],
                [Date.UTC(1971,  1,  7), 0.65],
                [Date.UTC(1971,  1, 23), 0.77],
                [Date.UTC(1971,  2,  8), 0.77],
                [Date.UTC(1971,  2, 14), 0.79],
                [Date.UTC(1971,  2, 24), 0.86],
                [Date.UTC(1971,  3,  4), 0.8 ],
                [Date.UTC(1971,  3, 18), 0.94],
                [Date.UTC(1971,  3, 24), 0.9 ],
                [Date.UTC(1971,  4, 16), 0.39],
                [Date.UTC(1971,  4, 21), 0   ]
            ]
        }]
    });
});
</script>
<script type="text/javascript">
    function byForm()
    {
        var pass1=$('#password').val();
        var pass2=$('#password1').val();
        if(pass1==pass2){
            return true;
        }else{
            alert("Ulangi password, password tidak cocok");
            return false;
        }
    }
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/highchart.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/exporting.js"></script>
<?php $this->load->view('footer');?>