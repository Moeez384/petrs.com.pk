<?php

//Load models
// $this->load->model('EventModel', 'obj_link');
?>

<?php $this->load->view('admin/layouts/htmlheader');?>
<body class="hrsale-layout hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Top menu header -->
  <?php $this->load->view('admin/layouts/header');?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php $this->load->view('admin/layouts/left_menu'); ?>
   
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
  
    <!-- Main content -->
    <section class="content">
      <!-- Check if flash has message -->
        <?php if ($this->session->flashdata('linksuccess') ) { ?>

            <div class="alert alert-success"><?= $this->session->flashdata('linksuccess') ?></div>
        <?php } ?>
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <?php // get the required layout..?>
	   <?php echo $subview;

     $event_link = $this->obj_link->geteventlink();
     $link=$event_link->row_array();
     ?>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->
<!--  Event Link Model -->
  <div class="modal" id="modal_event">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title h-filters">Event Link</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="/Dashboard/saveeventlink">
            <div class="row">
              <div class="col-md-2">
                <label>Event Link:</label>
              </div>
              <div class="col-md-10">
                <input type="text" value="<?= $link['event_url'] ?>" type="url" class="form-control" name="event-link" id="txt-link"></input>
                <span class="spn-err" id="err-link">Please provide Link</span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <br>
                <input type="submit" value="Save" onclick="return SaveReward()"type="submit" class="btn btn-xs btn-primary" id="btn-save" value=""Save></input>
                <a class="btn btn-xs btn-secondary" data-dismiss="modal">Close</a>
              </div>
            </div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
  <!-- End Event Link Model -->
</body>
</html>