<?php

class ApplicantModel
{
	private Database $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getApplicants(): array
	{
		$this->db->query('SELECT * FROM `applicant`');
		return $this->db->resultSet();
	}

	public function getApplicantById($id)
	{
		$this->db->query('SELECT * FROM `applicant` WHERE `Id` = :id');
		$this->db->bind(':id', $id);
		return $this->db->single();
	}

	public function createApplicant()
	{
		$this->db->query('INSERT INTO `applicant` (`Gender`, `ApplicantNumber`, `FirstName`, `LastName`, `JobId`, `Email`, `Phone`, `BirthDate`, `Street`, `Number`, `NumberExtension`, `Zipcode`, `Place`, `Applicantkey`, `IsActive`, `Description`, `DateCreated`, `DateModified`) VALUES (:Gender, :ApplicantNumber, :FirstName, :LastName, :JobId, :Email, :Phone, :BirthDate, :Street, :Number, :NumberExtension, :Zipcode, :Place, :Applicantkey, :IsActive, :Description, :DateCreated, :DateModified)');
		$this->db->bind(':Gender', "Male");
		$this->db->bind(':ApplicantNumber', 10);
		$this->db->bind(':FirstName', $_POST['FirstName']);
		$this->db->bind(':LastName', $_POST['LastName']);
		$this->db->bind(':JobId', $_POST['JobId']);
		$this->db->bind(':Email', $_POST['Email']);
		$this->db->bind(':Phone', $_POST['Phone']);
		$this->db->bind(':BirthDate', $_POST['BirthDay']);
		$this->db->bind(':Street', $_POST['Street']);
		$this->db->bind(':Number', $_POST['Number']);
		$this->db->bind(':NumberExtension', $_POST['Extension']);
		$this->db->bind(':Zipcode', $_POST['Zipcode']);
		$this->db->bind(':Place', $_POST['Place']);
		$this->db->bind(':Applicantkey', random_int(100000, 999999));
		$this->db->bind(':IsActive', 1);
		$this->db->bind(':Description', 0);
		$this->db->bind(':DateCreated', date('Y-m-d H:i:s'));
		$this->db->bind(':DateModified', date('Y-m-d H:i:s'));
		$this->db->execute();

		header("Location: /applicant");
	}

	public function updateApplicant($id)
	{
		$this->db->query('UPDATE `applicant` SET `FirstName` = :FirstName, `LastName` = :LastName, `JobId` = :JobId, `Email` = :Email, `Phone` = :Phone, `BirthDate` = :BirthDate, `Street` = :Street, `Number` = :Number, `NumberExtension` = :NumberExtension, `Zipcode` = :Zipcode, `Place` = :Place, `DateModified` = :DateModified WHERE `Id` = :Id');
		$this->db->bind(':FirstName', $_POST['FirstName']);
		$this->db->bind(':LastName', $_POST['LastName']);
		$this->db->bind(':JobId', $_POST['JobId']);
		$this->db->bind(':Email', $_POST['Email']);
		$this->db->bind(':Phone', $_POST['Phone']);
		$this->db->bind(':BirthDate', $_POST['BirthDay']);
		$this->db->bind(':Street', $_POST['Street']);
		$this->db->bind(':Number', $_POST['Number']);
		$this->db->bind(':NumberExtension', $_POST['Extension']);
		$this->db->bind(':Zipcode', $_POST['Zipcode']);
		$this->db->bind(':Place', $_POST['Place']);
		$this->db->bind(':DateModified', date('Y-m-d H:i:s'));
		$this->db->bind(':Id', $id);
		$this->db->execute();


		header("Location: /applicant");
	}

	public function deleteApplicant($id)
	{
		$this->db->query('UPDATE `interview` SET `ApplicantId` = null WHERE `ApplicantId` = :Id');
		$this->db->bind(':Id', $id);
		$this->db->execute();

		$this->db->query('DELETE FROM `applicant` WHERE `Id` = :Id');
		$this->db->bind(':Id', $id);
		return $this->db->execute();
	}
}
