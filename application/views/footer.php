          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
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
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
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
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer id="footer">
      <p>2014 &copy; Kelompok Belajar </p> 
    </footer><!-- /#footer -->
    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->
<!--jQuery 2.1.0 -->
    

    <!--Bootstrap -->
    <script src="<?php echo base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Screenfull -->
    <script src="<?php echo base_url()?>assets/lib/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/migrate.js"></script>
    <script src="<?php echo base_url()?>assets/lib/validationEngine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url()?>assets/lib/validationEngine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-validation/src/localization/messages_ja.js"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
    <script src="<?php echo base_url()?>assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/lib/datatables/3/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery.tablesorter/jquery.tablesorter.min.js"></script>
    <script src="<?php echo base_url()?>assets/lib/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/limiter/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script> 
    <script>
      $(function() {
        formValidation();
      });
    </script>
    <script>
      $(function() {
        metisTable();
        metisSortable();
      });
    </script>

    <!-- Metis core scripts -->
    <script src="<?php echo base_url()?>assets/js/main.min.js"></script>
    <!--<script type="text/javascript">
    $('#add').click(function(){
      alert("berhasil");
    });
    </script>-->
    <script type="text/javascript">
$(function(){
    $(".dt_table").dataTable({
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false,
        //"pagingType": "full_numbers",
        "language": {
            "emptyTable":     "Tidak ada data",
            "info":           "_START_ - _END_ Dari _TOTAL_ Data",
            "infoEmpty":      "Showing 0 to 0 of 0 entries",
            "infoFiltered":   "(filtered from _MAX_ total entries)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Show _MENU_ entries",
            "loadingRecords": "Loading...",
            "processing":     "Processing...",
            "search":         "Pencarian: ",
            "zeroRecords":    "No matching records found",
            "paginate": {
                "first":      "Awal",
                "last":       "Terakhir",
                "next":       "Selanjutnya",
                "previous":   "Sebelumnya"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
});
    </script>
    <!--For Demo Only. Not required -->
    <script src="<?php echo base_url()?>assets/js/style-switcher.min.js"></script>
  </body>
</html>