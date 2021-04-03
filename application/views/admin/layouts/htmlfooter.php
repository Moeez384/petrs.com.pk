
<!-- jQuery 3 -->
<script type="text/javascript" src="/skin/hrsale_assets/vendor/jquery/jquery-3.2.1.min.js"></script> 
<script src="/skin/hrsale_assets/theme_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.7 -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/raphael/raphael.min.js"></script>
<script src="/skin/hrsale_assets/theme_assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/skin/hrsale_assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="/skin/hrsale_assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="/skin/hrsale_assets/vendor/select2/dist/js/select2.min.js"></script>
<!--<script type="text/javascript" src="/skin/hrsale_assets/vendor/Trumbowyg/dist/trumbowyg.min.js"></script>-->
<script type="text/javascript" src="/skin/hrsale_assets/vendor/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/vendor/toastr/toastr.min.js"></script>
<!-- Slimscroll -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/skin/hrsale_assets/theme_assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="/skin/hrsale_assets/theme_assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- App -->
<script src="/skin/hrsale_assets/theme_assets/dist/js/adminlte.min.js"></script>

<script src="/skin/hrsale_assets/theme_assets/dist/js/demo.js"></script>

<script src="/skin/hrsale_assets/theme_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/skin/hrsale_assets/theme_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script type="text/javascript"></script>
<script type="text/javascript"></script>
<script type="text/javascript"></script>
<script type="text/javascript">var site_url = '<?php echo site_url() . "admin/"?>';</script>
<script type="text/javascript"></script>
<script type="text/javascript"></script>
<script type="text/javascript"></script>
<script src="/skin/hrsale_assets/js/bootstrap-checkbox.min.js" type="text/javascript"></script>

<?php if($this->router->fetch_method() =='attendance' || $this->router->fetch_method() =='date_wise_attendance' || $this->router->fetch_method() =='update_attendance'){?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $system[0]->google_maps_api_key;?>&sensor=false"></script>
<?php } ?>
<script type="text/javascript" src="/skin/hrsale_assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/jszip.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/pdfmake.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/vfs_fonts.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="/skin/hrsale_assets/js/buttons.print.min.js"></script>


<script src="/skin/hrsale_assets/hrsale_scripts/custom.js"></script>
<?php if($this->router->fetch_class() =='roles') { ?>
<script type="text/javascript" src="/skin/hrsale_assets/vendor/kendo/kendo.all.min.js"></script>
<?php $this->load->view('admin/roles/role_values');?>
<?php } ?>
<?php if($this->router->fetch_class() =='organization'){?>
<?php $this->load->view('admin/components/vendors/organization_chart');?>
<?php } ?>
<?php if($this->router->fetch_class() =='goal_tracking' || $this->router->fetch_method() =='task_details' || $this->router->fetch_class() =='project' || $this->router->fetch_method() =='project_details'){?>
<script type="text/javascript" src="/skin/hrsale_assets/vendor/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<?php }?>
<?php if($this->router->fetch_method() =='task_details' || $this->router->fetch_method() =='project_details' || $this->router->fetch_class() =='project'){?>
<script type="text/javascript">
$(document).ready(function(){	
	$("#range_grid").ionRangeSlider({
		type: "single",
		min: 0,
		max: 100,
		from: '<?php echo $progress;?>',
		grid: true,
		force_edges: true,
		onChange: function (data) {
			$('#progres_val').val(data.from);
		}
	});
});
</script>
<?php } ?>
<script src="/skin/hrsale_assets/vendor/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<?php if($this->router->fetch_class() =='invoices' || $this->router->fetch_class() =='quotes' && ($this->router->fetch_method() =='create' || $this->router->fetch_method() =='edit')) { ?>

<script type="text/javascript">
$(document).ready(function(){
	$('#add-invoice-item').click(function () {
        var invoice_items = '<div class="row item-row">'
					+'<hr>'
					+'<div class="form-group mb-1 col-sm-12 col-md-3">'
					+'<label for="item_name"><?php echo $this->lang->line('xin_title_item');?></label>'
					+'<br>'
					+'<input type="text" class="form-control item_name" name="item_name[]" id="item_name" placeholder="Item Name">'
					+'</div>'
					+'<div class="form-group mb-1 col-sm-12 col-md-2">'
					+'<label for="tax_type"><?php echo $this->lang->line('xin_invoice_tax_type');?></label>'
					+'<br>'
					+'<select class="form-control tax_type" name="tax_type[]" id="tax_type">'
					<?php foreach($all_taxes as $_tax){?>
					<?php
						if($_tax->type=='percentage') {
							$_tax_type = $_tax->rate.'%';
						} else {
							$_tax_type = $this->Xin_model->currency_sign($_tax->rate);
						}
					?>
					+'<option tax-type="<?php echo $_tax->type;?>" tax-rate="<?php echo $_tax->rate;?>" value="<?php echo $_tax->tax_id;?>"> <?php echo $_tax->name;?> (<?php echo $_tax_type;?>)</option>'
					<?php } ?>
				  	+'</select>'
					+'</div>' 
					+'<div class="form-group mb-1 col-sm-12 col-md-1">'
					+'<label for="tax_type"><?php echo $this->lang->line('xin_title_tax_rate');?></label>'
					+'<br>'
					+'<input type="text" readonly="readonly" class="form-control tax-rate-item" name="tax_rate_item[]" value="0" />'
					+'</div>'
					+'<div class="form-group mb-1 col-sm-12 col-md-1">'
					+'<label for="qty_hrs" class="cursor-pointer"><?php echo $this->lang->line('xin_title_qty_hrs');?></label>'
					+'<br>'
					+'<input type="text" class="form-control qty_hrs" name="qty_hrs[]" id="qty_hrs" value="1">'
					+'</div>'
					+'<div class="skin skin-flat form-group mb-1 col-sm-12 col-md-2">'
					+'<label for="unit_price"><?php echo $this->lang->line('xin_title_unit_price');?></label>'
					+'<br>'
					+'<input class="form-control unit_price" type="text" name="unit_price[]" value="0" id="unit_price" />'
					+'</div>'
					+'<div class="form-group mb-1 col-sm-12 col-md-2">'
					+'<label for="profession"><?php echo $this->lang->line('xin_title_sub_total');?></label>'
					+'<input type="text" class="form-control sub-total-item" readonly="readonly" name="sub_total_item[]" value="0" />'
					+'<p style="display:none" class="form-control-static"><span class="amount-html">0</span></p>'
					+'</div>'
					+'<div class="form-group col-sm-12 col-md-1 text-xs-center mt-2">'
					+'<label for="profession">&nbsp;</label><br><button type="button" class="btn icon-btn btn-xs btn-danger waves-effect waves-light remove-invoice-item" data-repeater-delete=""> <span class="fa fa-trash"></span></button>'
					+'</div>'
				  	+'</div>'

        $('#item-list').append(invoice_items).fadeIn(500);

    });
});	

</script>
<?php } ?>
<?php if($this->router->fetch_class() =='invoices' || $this->router->fetch_class() =='quotes' && $this->router->fetch_method() =='view') { ?>
<script type="text/javascript" src="/skin/hrsale_assets/vendor/printThis.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.print-invoice').click(function () {
		$("#print_invoice_hr").printThis();
	});	
});
</script>
<?php } ?>
<?php if($this->router->fetch_class() =='calendar' || $this->router->fetch_class() =='dashboard' || $this->router->fetch_method() =='timecalendar'){?>
	<script src="/skin/hrsale_assets/theme_assets/bower_components/moment/moment.js"></script>
	<script src="/skin/hrsale_assets/theme_assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<?php } ?>
<?php if($this->router->fetch_method() =='timecalendar'){?>
	<?php $this->load->view('admin/components/vendors/calendar_time');?>
<?php }?>
<?php if($this->router->fetch_class() =='calendar' || $this->router->fetch_class() =='dashboard'){?>
	
    
    <script src="/skin/hrsale_assets/vendor/charts/chart.min.js" type="text/javascript"></script>    
    <script src="/skin/hrsale_assets/hrsale_scripts/xchart/employee_department.js" type="text/javascript"></script>
    <script src="/skin/hrsale_assets/hrsale_scripts/xchart/employee_designation.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/js/eventlink/eventlink.js"></script>
    
<?php }?>

 <script type="text/javascript">
 $(document).ready(function(){
   //setTimeout(refreshChatMsgs, 5000);
});


</script>
<?php if($this->router->fetch_class() =='theme'){?>
<script>
  function testAnim(x) {
    $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
    });
  };

  $(document).ready(function(){
    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });
  });
</script>
<?php } ?>