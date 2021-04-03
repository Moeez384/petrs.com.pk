<?php
$user_id = $this->input->get('user_id');
$post_id = $this->input->get('post_id');

$center = $this->WebsiteModel->get_post_all($post_id)['center'];


?>

<body class="bg-light">
	<div class="container bg-white" style="border: 1px">
		<div class="text-center">
			<h1 class="mt-3">PETRS</h1>
			<h4>Pending Approval Form</h4>
			<h5>Your Application is submitted and is under review. Please wait while you get approved by the admin</h5>
			<div class="row">
				<div class="col col-4">
					<label class="text-dark text-center" style="font-weight: bold;" hidden>Your application is currently under Review.</label>

				</div>
				<?php 
			$user_details = $this->WebsiteModel->user_details($user_id);
			foreach($user_details as $dt) {
			?>
				<div class="col col-4" style="float: left;">
					<img style="width: 160px; height: 160px;" src="<?php echo base_url()?>uploads/users/<?php echo $dt->image;?>" alt="img" />
				</div>
			<?php } ?>
				</div>
			</div>
			<br>
			<?php 
			$user_details = $this->WebsiteModel->user_details($user_id);
			foreach($user_details as $dt) {
			?>
			<div class="row bg-dark">
				<div class="text-center text-white mt-1 mb-1 ml-2">
					Student's Personal Information
				</div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Name: </div>
				<div class="col"><?php echo $dt->name != '' ? $dt->name : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Father's Name: </div>
				<div class="col"><?php echo $dt->father_name != '' ? $dt->father_name : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">CNIC NO: </div>
				<div class="col"><?php echo $dt->cnic_no != '' ? $dt->cnic_no : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Local/Domicile: </div>
				<div class="col"><?php echo $dt->domicile != '' ? $dt->domicile : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">District: </div>
				<div class="col"><?php echo $dt->district != '' ? $dt->district : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Permenant Address: </div>
				<div class="col"><?php echo $dt->per_address != '' ? $dt->per_address : ''; ?></div>
			</div>
			<?php } ?>

			<?php 
			$post_datails = $this->WebsiteModel->post_details($post_id);
			
			foreach($post_datails as $pt) {
				$exam_details = $this->WebsiteModel->exam_details($post_id);
				foreach($exam_details as $dt) {
				$fetch_ad = $this->WebsiteModel->fetch_ad($dt->advertisement);
			?>

			<div class="row bg-dark mt-2">
				<div class="text-center text-white mt-1 mb-1 ml-2">
					Student's Exam Information
				</div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Post Name: </div>
				<div class="col"><?php echo $pt->name != '' ? $pt->name : ''; ?></div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Advertisement: </div>
				<div class="col"><?php echo $fetch_ad != '' ? $fetch_ad : ''; ?></div>
			</div>
			<?php }} ?>

			<?php 
			$bank_details = $this->WebsiteModel->search_result($user_id,$post_id);
			foreach($bank_details as $dt) {
			?>
			<div class="row bg-dark mt-2">
				<div class="text-center text-white mt-1 mb-1 ml-2">
					Bank Details
				</div>
			</div>
			<div class="row bg-light mt-2">
				<div class="col text-dark" style="font-weight: bold">Bank Name: </div>
				<div class="col"><?php echo $dt->bank_name != '' ? $dt->bank_name : ''; ?></div>
			</div>
			<?php } ?>
			<br><br>
			<div class="row">
				<div class="col col-2" style="font-size: 18px; font-weight: bold; color: black">Important Note:</div>
				<div class="col col-10" style="font-size: 16px; color: black">This is a computer generated slip against your online application.<br>
					On the exam day you must bring the following with you :-<br>
					1 - A copy of your bank challan<br>
					2 - Original CNIC<br>
					3 - Your exam slip<br>
					You will not be allowed to enter the exam hall without these documents
					<br><br> 
				</div>
			</div>
		</div>

</div>
</body>