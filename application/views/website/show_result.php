<style>
    ul.inquiryform li input {
    width: 225px;
    }
    ul.inquiryform li select {
    width: 240px;
    }
    ul.inquiryform{
        column-count: 2;
    }
    .search_course {
    width: 570px;
    }
    .box {
    width: 500px;
    }
    ul.inquiryform li{
        width:250px;
    }
    .apply_now{
        margin-top: 10px;
    }
    ul.inquiryform li input[type="checkbox"]{
        width: unset;
    }
     ul.inquiryform li.pz-select{
        font-size:10px;
    }
    .form {
    width: unset;
    }
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
    margin-bottom: 50px;
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
  background: #01411c;
    color: #fff !important;
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
.pz-center {
    margin-bottom: 10px;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}


  
</style>
</head>
<body>
<div id="content_section">
  <div class="contentblock">
<table class="rtable paginated">
  <tr>
      <th class="code colr">CNIC</th>
      <th class="code colr">Username</th>
      <th class="time colr">Total Marks</th>
      <th class="location colr">Obtained Marks</th>
  </tr>
<?php
$result_id = $this->input->get('id');
$cnic = $this->input->get('cnic');
$user_id = $this->input->get('user_id');
$obtained_marks = $this->WebsiteModel->marks_obtained($user_id, $result_id);
if($obtained_marks) {
  foreach($obtained_marks as $m) {
    $marks_ob = $m->marks_obtained;
  }
}
$full_marks = $this->WebsiteModel->resultt($result_id)['total_marks'];
$username = $this->WebsiteModel->fetch_user_id($cnic);
foreach($username as $us) {
  $name = $us->name;
  $fname = $us->father_name;
}
?>
    <tr>
      <td><?php echo $cnic;?></td>
      <td ><?php echo $name.' '.$fname; ?></td>
      <td><?php echo $full_marks ;?></td>
     <td><?php echo $marks_ob != '' ? $marks_ob : ''; ?></td>
    
    </tr> 

</table>
    <div class="clear"></div>
  </div>
</div>  
