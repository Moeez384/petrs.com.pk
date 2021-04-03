<?php
if(!empty($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>

</head>
<body style="background-color: ghostwhite">
	<div class="wrapper">
	<br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">BASIC INFORMATION</h3>
  </div>
</div>
<e style="font-size: 14px; color: #000">

<form method="POST" id="formm">
  <div class="card border border-0 rounded-0 pt-2 pb-5 mr-5 ml-5 mb-3 mt-3">
  <div class="card border border-0 rounded-0 shadow ml-5 mr-5">
    <div class="container">
      <div class="row">
        <div class="col col-3">
          <button class="btn btn-block text-dark rounded-0 border-dark" name="basic" style="background-color: #F8F8F8">Basic Information</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="edu">Education</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="exp">Experience</button>
          <button class="btn btn-block btn-default text-dark rounded-0 border-dark" name="post">Applied Post</button>
        </div>
      <div class="col col-9">
      <div class="card-body">
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Name:
            <input class="form-control mt-1 rounded-0" type="text" name="fname" value="<?php echo $name; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Father's Name:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $father_name; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">CNIC No:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $cnic_no; ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Email:
            <input class="form-control mt-1 rounded-0" type="text" name="fname" value="<?php echo $email; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Phone no:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $ph_number; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Residence:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $res_phone; ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Office Phone:
            <input class="form-control mt-1 rounded-0" type="text" name="fname" value="<?php echo $office_phone; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Father's Occupation:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $father_occupation; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Domicile:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $domicile; ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Husband's Name:
            <input class="form-control mt-1 rounded-0" type="text" name="fname" value="<?php echo $husband_name; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Husband's Occupation:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $husband_occupation; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Date Of Birth:
            <input class="form-control mt-1 rounded-0" type="date" name="lname" value="<?php echo $date_of_birth; ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Gender:
            <input class="form-control mt-1 rounded-0" type="text" name="fname" value="<?php echo $gender; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Religion:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $religion; ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">District:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $district; ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Permenant Address:
            <textarea class="form-control mt-1 rounded-0" type="text" style="width: 100%" disabled><?php echo $permenant_address; ?></textarea>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Postal Address:
            <textarea class="form-control mt-1 rounded-0" type="text" style="width: 100%" disabled><?php echo $postal_address; ?></textarea>
            </p>
          </div>
        </div>
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Government Service:
            <input type="input" class="form-control mt-1 rounded-0" id="disble_campaign" value="<?php echo $govt_service == 1 ? 'yes': 'no' ?>" disabled>
           </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Disablitiy:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $disability == 1 ? 'yes': 'no' ?>" style="width: 100%" disabled>
            </p>
          </div>
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Armed Forces:
            <input class="form-control mt-1 rounded-0" type="text" name="lname" value="<?php echo $armed_force == 1 ? 'yes': 'no' ?>" style="width: 100%" disabled>
            </p>
          </div>
        </div>

        <br>
        <!-- <div class="row">
          <div class="col col-sm">
          <button style="float:right" class="btn btn-primary rounded-0" name="save"><i class="fa fa-check-square" aria-hidden="true"></i> Update</button>
          </div>
        </div> -->
      </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<?php 
if(isset($_POST['basic'])) {
   header( 'location: view_user?id='.$this->input->get('id'));
}

if(isset($_POST['edu'])) {
   header( 'location: view_user_education?id='.$this->input->get('id'));
}

if(isset($_POST['exp'])) {
   header( 'location: view_user_experience?id='.$this->input->get('id'));
}

if(isset($_POST['post'])) {
   header( 'location: view_applied_post?id='.$this->input->get('id'));
}
?>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>