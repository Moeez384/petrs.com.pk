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

/*!
// CSS only Responsive Tables
// http://dbushell.com/2016/03/04/css-only-responsive-tables/
// by David Bushell
*/

.rtable {
  /*!
  // IE needs inline-block to position scrolling shadows otherwise use:
  // display: block;
  // max-width: min-content;
  */
  display: inline-block;
  vertical-align: top;
  max-width: 100%;
  
  overflow-x: auto;
  
  // optional - looks better for small cell values
  white-space: nowrap;

  border-collapse: collapse;
  border-spacing: 0;
}

.rtable,
.rtable--flip tbody {
  // optional - enable iOS momentum scrolling
  -webkit-overflow-scrolling: touch;
  
  // scrolling shadows
  background: radial-gradient(left, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 0 center,
              radial-gradient(right, ellipse, rgba(0,0,0, .2) 0%, rgba(0,0,0, 0) 75%) 100% center;
  background-size: 10px 100%, 10px 100%;
  background-attachment: scroll, scroll;
  background-repeat: no-repeat;
}

// change these gradients from white to your background colour if it differs
// gradient on the first cells to hide the left shadow
.rtable td:first-child,
.rtable--flip tbody tr:first-child {
  background-image: linear-gradient(to right, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-size: 20px 100%;
}

// gradient on the last cells to hide the right shadow
.rtable td:last-child,
.rtable--flip tbody tr:last-child {
  background-image: linear-gradient(to left, rgba(255,255,255, 1) 50%, rgba(255,255,255, 0) 100%);
  background-repeat: no-repeat;
  background-position: 100% 0;
  background-size: 20px 100%;
}

.rtable th {
  font-size: 11px;
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

.rtable--flip td {
  background-image: none !important;
  // border-collapse is no longer active
  border-left: 0;
}

// border-collapse is no longer active
.rtable--flip th:not(:last-child),
.rtable--flip td:not(:last-child) {
  border-bottom: 0;
}

/*!
// CodePen house keeping
*/

table {
  margin-bottom: 5px;
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
<script type="text/javascript">
    if (/(iPhone|iPad|iPod)/gi.test(navigator.userAgent) && window.location.pathname.indexOf('/full') > -1) {
  var p = document.createElement('p');
  p.innerHTML = '<a target="_blank" href="https://s.codepen.io/dbushell/debug/wGaamR"><b>Click here to view this demo properly on iOS devices (remove the top frame)</b></a>';
  document.body.insertBefore(p, document.body.querySelector('h1'));
}
</script>

                    <div class="clear"></div>
        <!-- Col1 -->
                  <div class="">
            
                         <!-- Content Heading -->
                         <div class="sheading">
                                        <div class="sheadings">
                                            <h2>NAT™ Associated Universities / D.A.Is</h2>
                                        </div>
                                      
                                    </div>
                                    
                          <div class="clear"> </div>
                         
                            <table class="rtable paginated">
  <thead>
    <tr>
      <th class="code colr">Sr.</th>
      <th class="coursename colr">University / D.A.Is</th>
    </tr>
  </thead>
  <tbody  id="myTable">
<?php 
$associates = $this->WebsiteModel->fetch_associates();
if($associates) {
  $i = 0;
  foreach($associates as $asc) {
    $i = $i+1;
?>
<tr data-iceapc="2" data-iceapw="5">
  <td data-iceapw="1"><?php echo $i; ?></td>
<td data-iceapw="4"><?php echo $asc->uni_name;?></td>
</tr>
<?php }} else { ?>
  <tr data-iceapc="2" data-iceapw="5">
  <td data-iceapw="1">1</td>
<td data-iceapw="4"></td>
</tr>
<?php } ?>
  </tbody>
</table>
<h3>Note:</h3>
<p>Separate test will be conducted for Sindh and Balochistan Medical Colleges.</p>

                        
                           <div class="clear"></div>
                          

                                <div class="clear"></div>
                        <!-- col1 ends -->  
                    </div>
                
                <div class="clear"></div>
      <!-- Slder -->  
              <div class="image_scroll">
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