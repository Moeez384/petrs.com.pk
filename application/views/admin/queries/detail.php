<?php
if(!empty($_SESSION['id'])) {
?>


<!DOCTYPE html>
<html>
<head>
    <title>Query Detail</title>

</head>
<body style="background-color: ghostwhite">
    <div class="wrapper">
    <br>
  <div class="card border border-0 mr-5 ml-5 bg-white border border-0 rounded-0 shadow">
  <div class="card-body table-responsive">
    <h3 style="color: #05386B;" class="text-center">QUERY DETAIL</h3>
  </div>
</div>
<e style="font-size: 14px; color: #000">

  <div class="card border border-0 rounded-0 pt-5 pb-5 mr-5 ml-5 mb-3 mt-3">
  <div class="card border border-0 rounded-0 shadow ml-5 mr-5">
    <div class="container">
      <div class="row">
      <div class="col">
      <div class="card-body"> 
        <?php 
        $id = $this->input->get('id');
        $query = $this->ProjectsModel->fetch_query($id);
        foreach($query as $qr) {
          $username = $qr->username;
          $email = $qr->email;
          $contact = $qr->contact;
          $province = $qr->province;
          $message = $qr->message;
        ?>

          <input class="form-control mt-1 rounded-3" id="txt-id" type="text" name="id" value="<?php echo $id; ?>" style="width: 100%" hidden>
        <div class="container ml-2">
        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">User Name:
            <input class="form-control mt-1 rounded-3" id="txt-name" type="text" value="<?php echo $username != '' ? $username : ''; ?>" name="name" style="width: 100%" disabled></p>
          </div>
        </div>

        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Email:
            <input class="form-control mt-1 rounded-3" id="txt-name" type="text" value="<?php echo $email != '' ? $email : ''; ?>" name="name" style="width: 100%" disabled></p>
          </div>
        </div>

        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Contact Number:
            <input class="form-control mt-1 rounded-3" id="txt-name" type="text" value="<?php echo $contact != '' ? $contact : ''; ?>" name="name" style="width: 100%" disabled></p>
          </div>
        </div>

        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Province:
            <input class="form-control mt-1 rounded-3" id="txt-name" type="text" value="<?php echo $province != '' ? $province : ''; ?>" name="name" style="width: 100%" disabled></p>
          </div>
        </div>

        <div class="row"> 
          <div class="col col-sm">
            <p class="mt-3 text-dark" style="font-size: 17px">Message:
            <textarea class="form-control mt-1 rounded-3" disabled><?php echo $message != '' ? $message : ''; ?></textarea>
          </p>
          </div>
        </div>
        <br>
      </div>
    <?php } ?>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>

<script src="<?php echo base_url()?>assets/css/bower_components/jquery-ui/jquery-ui.js"></script>

<?php } else {
  redirect(base_url().'admin/Signin');
}
?>