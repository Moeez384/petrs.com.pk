<style type="text/css">

  .course_listing li.location {

    width: 212px;
    padding-left: 13px;
    border-right: 0px;

}

.course_listing li.code {

    width: 50px;
    text-align: center;

}

.course_listing li.location {

    width: 212px;
    padding-left: 13px;
    border-right: 0px;

}



.course_listing li.time {

    width: 152px;
    padding-left: 13px;

}

.course_listing li.coursename {

    width: 252px;
    padding-left: 13px;

}



.sheadings {

    padding-bottom: 4px;
    padding-top: 20px;

}

.dis-top{

    float:right;

}

.rtable {

 

  vertical-align: top;

  max-width: 100%;

  overflow-x: auto;

  white-space: nowrap;

  border-collapse: collapse;

  border-spacing: 0;

      margin-top: 20px;

    margin-bottom: 20px;

    width:100%;

}

.pz-rtable {

 width:auto;

  display: inline-block;

  

}

.rtable,

.rtable--flip tbody {



  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,

              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;

  background-size: 10px 100%, 10px 100%;

  background-attachment: scroll, scroll;

  background-repeat: no-repeat;

}



.rtable td:first-child,

.rtable--flip tbody tr:first-child {

  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);

  background-repeat: no-repeat;

  background-size: 20px 100%;

}



.rtable td:last-child,

.rtable--flip tbody tr:last-child {

  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);

  background-repeat: no-repeat;

  background-position: 100% 0;

  background-size: 20px 100%;

}



.rtable th {

  font-size: 12px;

  text-align:center !important;

  text-align: left;

  text-transform: uppercase;

  background: #f2f0e6;

}



.rtable th,

.rtable td {

  padding: 6px 12px;

  border: 1px solid #d9d7ce;

}



.rtable--flip {

  display: flex;

  overflow: hidden;

  background: none;

}



.rtable--flip thead {

  display: flex;

  flex-shrink: 0;

  min-width: min-content;

}



.rtable--flip tbody {

  display: flex;

  position: relative;

  overflow-x: auto;

  overflow-y: hidden;

}



.rtable--flip tr {

  display: flex;

  flex-direction: column;

  min-width: min-content;

  flex-shrink: 0;

}



.rtable--flip td,

.rtable--flip th {

  display: block;

}





.tab {

  float: left;

  border: 1px solid #ccc;

  background-color: #f1f1f1;

  width: 20%;



}





.tab button {

  display: block;

  background-color: inherit;

  color: black;

  padding: 22px 16px;

  width: 100%;

  border: none;

  outline: none;

  text-align: left;

  cursor: pointer;

  transition: 0.3s;

  font-size: 15px;

  border-bottom: 1px solid #80808026;

}





.tab button:hover {

  background-color: #01411c;

  color:#fff;

}





.tab button.active {

  background-color: #01411c;

  color:#fff;

}





.tabcontent {

  float: left;

  padding: 6px 0px 20px 20px;

  border: 0px solid #ccc;

  width: 77%;

  border-left: none;

}

.red-text{

    color:red;

    font-size:13px;

}

.pz-tab-main{

    margin-top: 35px;

}

p {

    line-height: 19px;

    font-size: 12px;

}

.table2 thead > tr > th span.small2 {

    font-size: 9px;

}

ul.bullet_list {

    float: unset;

    margin-top: 8px;

    padding-left: 6px;

}







code {

  background: #fffbcc;

  font-size: 12px;

}

div.pager {

    text-align: center;

    margin: 1em 0;

}



div.pager span {

    display: inline-block;

    width: 1.8em;

    height: 1.8em;

    line-height: 1.8;

    text-align: center;

    cursor: pointer;

    background: #000;

    color: #fff;

    margin-right: 0.5em;

}



div.pager span.active {

    background: #c00;

}



.sheading {

    width: 450px;

    float: left;

}

.pz_search {

    height: 24px !important;

    padding-top: 15px;

}

.status { 

    color:green;

    

}

</style>
  <div class="clear"></div>
  <div class="">
    <div class="sheading">
      <div class="sheadings">
        <h5>All Project Application Form</h5>
      </div>
    </div>
      <div class="clear"> </div>
      <e style="font-size: 13px;">
<table id="tb" class="table table-bordered table-hover" style="width: 100%; color:black">
      <thead>
        <tr>
    <th class="code colr text-center">Sr. No.</th>
    <th class="coursename colr text-center">Project Name</th>
    <th class="time colr text-center">Last Date</th>
    <th class="location colr text-center">Download</th>
    <th class="location colr text-center">Status</th>
  </tr>
    </thead>
  <?php 
  $all_projects = $this->WebsiteModel->fetch_all_projects();
  if($all_projects) {
    $i= 0;
    foreach($all_projects as $pr) {
      $i = $i+1;
      if($pr->status == 0) {
          $status_val = 'Not started';
        } else if($pr->status == 1) {
          $status_val = 'Ongoing';
        } else if($pr->status == 2) {
          $status_val = 'Completed';
        } else {
          $status_val = '';
        }
  ?>
  <tr>
    <td class="code colr text-center"><?php echo $i; ?></td>
    <td class="coursename colr text-center"><?php echo $pr->name; ?></td>
    <td class="time colr"><?php echo $pr->last_date; ?></td>
    <?php if(($pr->attachment) != '') { ?>
    <td class="location colr text-center"><a href="<?php echo base_url()?>uploads/projects/<?php echo $pr->attachment; ?>" class="colr"><?php echo 'View File'?></a></td>
  <?php } else { ?>
    <td class="location colr text-center"><?php echo ''; ?></td>
  <?php } ?>
    <td class="location colr text-center"><?php echo $status_val; ?></td>
  </tr>
  <?php }} ?>
    </table>
<div class="clear"></div>
<div class="clear"></div>
</div>
 <div class="clear"></div>

<div class="image_scroll" style="height: 30%">
                  <a class="leftarrow" href="#"><img src="images/left_arrow.gif"  alt="" /></a>
                      <div class="slider1">
                          <ul>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider1.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider2.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider3.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider4.gif"  alt="" /></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider5.gif"  alt="" /></a></li>
                                <li><a href="#"><img src="<?php echo base_url()?>assets/images/slider6.gif"  alt="" /></a></li>
                        </ul>
                        </div>  
                    <a class="leftarrow" href="#"><img src="images/right_arrow.gif"  alt="" /></a>
                </div>
</div>  
<div class="clear"></div>
</div>
</div>  

<script type="text/javascript">
  $(document).ready(function() {
    $('#tb').DataTable();
});
</script>