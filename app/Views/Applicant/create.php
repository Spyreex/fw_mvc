<?php

$data = $data ?? [];
require_once APPROOT . '/Views/Includes/header.php';

?>

<form method="post" action="<?= URLROOT; ?>/applicant/store">
	<div class="mt-4 ml-4">
		<div class="mt-2">
			<label for="full_name">Full name</label>
			<input type="text" name="FirstName" id="full_name" placeholder="John">
			<input type="text" name="LastName" id="full_name" placeholder="Doe">
		</div>
		<div class="mt-2">
			<label for="application_for">Title</label>
			<select name="JobId" id="application_for">
				<option selected disabled>Choose a job</option>
				<option value="1">Job 1</option>
				<option value="2">Job 2</option>
			</select>
		</div>
		<div class="mt-2">
			<label for="Email">Email</label>
			<input type="text" name="Email" id="Email" placeholder="johny@john.john">
		</div>
		<div class="mt-2">
			<label for="Phone">Phone number</label>
			<input type="text" name="Phone" id="Phone" placeholder="0618283848">
		</div>
		<div class="mt-2">
			<label for="Birthdate">Birth date</label>
			<input type="date" name="BirthDay" id="Birthdate">
		</div>
		<div class="mt-2">
			<label for="Address">Address</label>
			<div class="d-flex row col-7 gap-4">
				<input type="text" name="Street" id="Address" placeholder="J. Offenbachplantsoen 3">
				<input type="number" name="Number" id="Address" placeholder="32">
				<input type="text" name="Extension" id="Address" placeholder="B">
				<input type="text" name="Place" id="Address" placeholder="Utrecht">
				<input type="text" name="Province" id="Address" placeholder="Utrecht">
				<input type="text" name="Zipcode" id="Address" placeholder="3543QQ">
			</div>
		</div>
		<div class="mt-2">
			<button type="submit" name="submit" id="submit" value="submit">Submit</button>
		</div>
	</div>
</form>