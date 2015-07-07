<?php $this->load->view('top');?>
<br>

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
		          <span>Absensi</span> <span class="pull-right"><small>20%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
		          </div>
		          <span>Presensi</span> <span class="pull-right"><small>40%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
		          </div>
		          <span>Izin</span> <span class="pull-right"><small>60%</small> </span> 
		          <div class="progress xs">
		            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
		          </div>
		          <span>Sakit</span> <span class="pull-right"><small>80%</small> </span> 
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

<br><br><br>
<pre>
	<?php print_r($this->session->all_userdata())?>
</pre>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Grafik Pengiriman SMS Bulanan',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [
                <?php 
                foreach($arr as $d=>$dd){
                    foreach($dd as $val=>$value){
                        if($val=='bulan'){
                            echo '"'.$value.'",';
                        }
                    }
                }
                ?>
            ]
        },
        yAxis: {
            title: {
                text: 'Jumlah Pengiriman'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Data SMS',
            data: [<?php 
                foreach($arr as $d=>$dd){
                    foreach($dd as $val=>$value){
                        if($val=='jumlah'){
                            echo "'.$value.',";
                        }
                    }
                }
                ?>]
        }]
    });
});
</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/highchart.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/highchart/exporting.js"></script>
<?php $this->load->view('footer');?>