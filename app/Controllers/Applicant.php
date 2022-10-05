<?php

class Applicant extends BaseController
{
	private ApplicantModel $applicantModel;

	public function __construct()
	{
		$this->applicantModel = $this->model('ApplicantModel');
	}

	public function index()
	{
		$data = [
			'applicants' => $this->applicantModel->getApplicants(),

		];
		$this->view('Applicant/index', $data);
	}

	public function edit($id)
	{
		$data = [
			'applicant' => $this->applicantModel->getApplicantById((int)$id),
		];

		$this->view("Applicant/show", $data);
	}

	public function create()
	{
		$this->view("Applicant/create");
	}

	public function store()
	{
		$this->applicantModel->createApplicant();
	}

	public function update($id)
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			$this->applicantModel->updateApplicant($id);
		}
	}

	public function delete($id)
	{
		if ($this->applicantModel->deleteApplicant($id)) {
			header("Location: /applicant");
		}
	}
}
