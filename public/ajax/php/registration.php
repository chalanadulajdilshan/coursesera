<?php

include '../../../class/include.php';



$REGESTRATIONS = new Registrations(NULL);

$student_status = 0;
$reason_for_unemployee = 0;
$education_other = 0;
$current_occupation_other = 0;
$opportunity_other = 0;

if (isset($_POST['student_status'])) {
    $student_status = $_POST['student_status'];
}
if (isset($_POST['reason_for_unemployee'])) {
    $reason_for_unemployee = $_POST['reason_for_unemployee'];
}
if (isset($_POST['education_other'])) {
    $education_other = $_POST['education_other'];
}
if (isset($_POST['current_occupation_other'])) {
    $current_occupation_other = $_POST['current_occupation_other'];
}
if (isset($_POST['opportunity_other'])) {
    $opportunity_other = $_POST['opportunity_other'];
}



$REGESTRATIONS->about_us = $_POST['about_us'];
$REGESTRATIONS->about_us_other = $_POST['about_us_other'];
$REGESTRATIONS->nic = $_POST['nic'];
$REGESTRATIONS->first_name = $_POST['first_name'];
$REGESTRATIONS->middle_name = $_POST['middle_name'];
$REGESTRATIONS->last_name = $_POST['last_name'];
$REGESTRATIONS->email = $_POST['email'];
$REGESTRATIONS->mobile_phone = $_POST['mobile_phone'];
$REGESTRATIONS->land_phone = $_POST['land_phone'];
$REGESTRATIONS->date_of_birth = $_POST['date'] . '-' . $_POST['month'] . '-' . $_POST['year'];
$REGESTRATIONS->gender = $_POST['gender'];
$REGESTRATIONS->address_no = $_POST['address_no'];
$REGESTRATIONS->address_street = $_POST['address_street'];
$REGESTRATIONS->province = $_POST['province'];
$REGESTRATIONS->district = $_POST['district'];
$REGESTRATIONS->city = $_POST['city'];
$REGESTRATIONS->is_differently_abled = $_POST['is_differently_abled'];
$REGESTRATIONS->is_student = $_POST['is_student'];
$REGESTRATIONS->student_status = $student_status;
$REGESTRATIONS->still_attending = $_POST['still_attending'];
$REGESTRATIONS->employee_status = $_POST['employee_status'];
$REGESTRATIONS->reason_for_unemployee = $reason_for_unemployee;
$REGESTRATIONS->scholarship_suitability = $_POST['scholarship_suitability'];
$REGESTRATIONS->current_occupation = $_POST['current_occupation'];
$REGESTRATIONS->education = $_POST['education'];
$REGESTRATIONS->field_of_study = $_POST['field_of_study'];
$REGESTRATIONS->english_language_proficiency = $_POST['english_language_proficiency'];
$REGESTRATIONS->have_internet = $_POST['have_internet'];
$REGESTRATIONS->how_access_course = $_POST['how_access_course'];
$REGESTRATIONS->computer_lab = $_POST['computer_lab'];
$REGESTRATIONS->scholarship = $_POST['scholarship'];
$REGESTRATIONS->why_scholarship = $_POST['why_scholarship'];
$REGESTRATIONS->hours_scholarship = $_POST['hours_scholarship'];
$REGESTRATIONS->education_other = $education_other;
$REGESTRATIONS->current_occupation_other = $current_occupation_other;
$REGESTRATIONS->opportunity_other = $opportunity_other;
$REGESTRATIONS->is_consent = $_POST['is_consent'];

//$REGESTRATIONS->sendStudentRegistrationEmail($_POST['email']);

 $REGESTRATIONS->create();

$result = ["status" => 'success'];

if($result){
  	define('MHOST', "smtp-mail.outlook.com");
	define('MUSERNAME', 'NoReply@vtasl.gov.lk');
	define('MPASSWORD', 'r$f#_zU$dHK4r2H+');
	define('MTITLE', "Skills Online - Sri Lanka");
	define('MPORT', 587);
  
  $mail = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
  $mail->set_address($_POST['email']);
  $mail->set_content();
  $mail->send();
}
echo json_encode($result);
exit();
