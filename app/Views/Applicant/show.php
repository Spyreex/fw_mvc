<?php

$data = $data ?? [];
require_once APPROOT . '/Views/Includes/header.php';
$applicant = $data["applicant"];

?>

<form method="post" action="<?= URLROOT; ?>/applicant/update/<?= $applicant->Id ?>">
	<div class="mt-4 ml-4">
		<div class="mt-2">
			<label for="full_name">Full name</label>
			<input type="text" name="FirstName" id="full_name" placeholder="John" value="<?= $applicant->FirstName ?>">
			<input type="text" name="LastName" id="full_name" placeholder="Doe" value="<?= $applicant->LastName ?>">
		</div>
		<div class="mt-2">
			<label for="application_for">Title</label>
			<select name="JobId" id="application_for">
				<option selected disabled>Choose a job</option>
				<option value="1" <?php if ($applicant->JobId == 1) echo "selected" ?>>Job 1</option>
				<option value="2" <?php if ($applicant->JobId == 2) echo "selected" ?>>Job 2</option>
			</select>
		</div>
		<div class="mt-2">
			<label for="Email">Email</label>
			<input type="text" name="Email" id="Email" placeholder="johny@john.john" value="<?= $applicant->Email ?>">
		</div>
		<div class="mt-2">
			<label for="Phone">Phone number</label>
			<input type="text" name="Phone" id="Phone" placeholder="0618283848" value="<?= $applicant->Phone ?>">
		</div>
		<div class="mt-2">
			<label for="Birthdate">Birth date</label>
			<input type="date" name="BirthDay" id="Birthdate" value="<?= $applicant->BirthDate ?>">
		</div>
		<div class="mt-2">
			<label for="Address">Address</label>
			<div class="d-flex row col-7 gap-4">
				<input type="text" name="Street" id="Address" value="<?= $applicant->Street ?>">
				<input type="number" name="Number" id="Address" placeholder="32" value="<?= $applicant->Number ?>">
				<input type="text" name="Extension" id="Address" placeholder="B" value="<?= $applicant->NumberExtension ?>">
				<input type="text" name="Place" id="Address" placeholder="Utrecht" value="<?= $applicant->Place ?>">
				<input type="text" name="Province" id="Address" placeholder="Utrecht" value="<?= $applicant->Place ?>">
				<input type="text" name="Zipcode" id="Address" placeholder="3543QQ" value="<?= $applicant->ZipCode ?>">
			</div>
		</div>
		<div class="mt-2">
			<a href="<?= URLROOT; ?>/applicant/delete/<?= $applicant->Id ?>">
				<button type="button">Destroy</button>
			</a>
			<button type="submit" name="submit" value="submit" id="submit">Submit</button>
		</div>
	</div>
</form>