<br><br><br>


<?php 
$check_approval = $this->WebsiteModel->check_user_approval($this->input->get('id'))['user_approved'];
if($check_approval == 0) {
?>

<h1>Please wait while you get approved by the admin</h1>
<?php } else if($check_approval == 1) { ?>
	<h1>Congratulations! You've been approved</h1>
	<br>
	<p style="font-size: 14px">Follow the link &nbsp;&nbsp;<a href="<?php echo base_url()?>website/Rollnoslips/slip?user_id=<?php echo $this->input->get('id')?>&post_id=<?php echo $this->WebsiteModel->check_user_approval($this->input->get('id'))['post_name']?>">Examination Slip</a></p>
<?php } ?>

<br><br><br>