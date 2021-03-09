<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registrations
 *
 * @author DsW
 */
class Registrations {

    public $id;
    public $nic;
    public $about_us;
    public $about_us_other;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $mobile_phone;
    public $land_phone;
    public $date_of_birth;
    public $gender;
    public $address_no;
    public $address_street;
    public $province;
    public $district;
    public $city;
    public $is_differently_abled;
    public $is_student;
    public $student_status;
    public $employee_status;
    public $still_attending;
    public $reason_for_unemployee;
    public $scholarship_suitability;
    public $current_occupation;
    public $education;
    public $field_of_study;
    public $english_language_proficiency;
    public $have_internet;
    public $how_access_course;
    public $computer_lab;
    public $scholarship;
    public $why_scholarship;
    public $hours_scholarship;
    public $education_other;
    public $current_occupation_other;
    public $opportunity_other;
    public $is_consent;
    public $created_date;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT * FROM `register` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->nic = $result['nic'];
            $this->about_us = $result['about_us'];
            $this->about_us_other = $result['about_us_other'];
            $this->first_name = $result['first_name'];
            $this->middle_name = $result['middle_name'];
            $this->last_name = $result['last_name'];
            $this->email = $result['email'];
            $this->mobile_phone = $result['mobile_phone'];
            $this->land_phone = $result['land_phone'];
            $this->date_of_birth = $result['date_of_birth'];
            $this->gender = $result['gender'];
            $this->address_no = $result['address_no'];
            $this->address_street = $result['address_street'];
            $this->province = $result['province'];
            $this->district = $result['district'];
            $this->city = $result['city'];
            $this->is_differently_abled = $result['is_differently_abled'];
            $this->is_student = $result['is_student'];
            $this->student_status = $result['student_status'];
            $this->employee_status = $result['employee_status'];
            $this->still_attending = $result['still_attending'];
            $this->reason_for_unemployee = $result['reason_for_unemployee'];
            $this->scholarship_suitability = $result['scholarship_suitability'];
            $this->current_occupation = $result['current_occupation'];
            $this->education = $result['education'];
            $this->field_of_study = $result['field_of_study'];
            $this->english_language_proficiency = $result['english_language_proficiency'];
            $this->have_internet = $result['have_internet'];
            $this->how_access_course = $result['how_access_course'];
            $this->computer_lab = $result['computer_lab'];
            $this->scholarship = $result['scholarship'];
            $this->why_scholarship = $result['why_scholarship'];
            $this->hours_scholarship = $result['hours_scholarship'];
            $this->education_other = $result['education_other'];
            $this->current_occupation_other = $result['current_occupation_other'];
            $this->opportunity_other = $result['opportunity_other'];
            $this->is_consent = $result['is_consent'];
            $this->created_date = $result['created_date'];

            return $result;
        }
    }

    public function create() {

        $query = "INSERT INTO `register` (`nic`,`about_us`,`about_us_other`,`first_name`, `middle_name`,`last_name`,`email`,`mobile_phone`,`land_phone`,`date_of_birth`,`gender`,`address_no`,"
                . " `address_street`,`province`,`district`,`city`,`is_differently_abled`,`is_student`,`student_status`,`employee_status`,`still_attending`,`reason_for_unemployee`,`scholarship_suitability`,"
                . "`current_occupation`,`education`,`field_of_study`,`english_language_proficiency`,`have_internet`,`how_access_course`,`computer_lab`,`scholarship`,"
                . "`why_scholarship`,`hours_scholarship`,`education_other`,`current_occupation_other`,`opportunity_other`,`is_consent`) VALUES  ('"
                . $this->nic . "','"
                . $this->about_us . "','"
                . $this->about_us_other . "', '"
                . $this->first_name . "', '"
                . $this->middle_name . "', '"
                . $this->last_name . "', '"
                . $this->email . "', '"
                . $this->mobile_phone . "', '"
                . $this->land_phone . "', '"
                . $this->date_of_birth . "', '"
                . $this->gender . "', '"
                . $this->address_no . "', '"
                . $this->address_street . "', '"
                . $this->province . "', '"
                . $this->district . "', '"
                . $this->city . "', '"
                . $this->is_differently_abled . "', '"
                . $this->is_student . "', '"
                . $this->student_status . "', '"
                . $this->employee_status . "', '"
                . $this->still_attending . "', '"
                . $this->reason_for_unemployee . "', '"
                . $this->scholarship_suitability . "', '"
                . $this->current_occupation . "', '"
                . $this->education . "', '"
                . $this->field_of_study . "', '"
                . $this->english_language_proficiency . "', '"
                . $this->have_internet . "', '"
                . $this->how_access_course . "', '"
                . $this->computer_lab . "', '"
                . $this->scholarship . "', '"
                . $this->why_scholarship . "', '"
                . $this->hours_scholarship . "', '"
                . $this->education_other . "', '"
                . $this->current_occupation_other . "', '"
                . $this->opportunity_other . "', '"
                . $this->is_consent . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `register`  ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function checkNicNumber($nic) {

        $query = "SELECT * FROM `register` WHERE `nic` =$nic ORDER BY `id` ASC";


        $db = new Database();
        $result = $db->readQuery($query);

        if (mysqli_num_rows($result)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function sendStudentRegistrationEmail($email) {

        
        $to = 'chalanadulaj99@gmail.com';
        $subject = 'Registration Successfully ';
        $from = 'Skills Online - Sri Lanka.';

// To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
        $headers .= 'From: ' . $from . "\r\n" .
                'Reply-To: ' . $from . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message
        $message = "
   <!DOCTYPE html
	PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml'
	xmlns:o='urn:schemas-microsoft-com:office:office'>

<head>
	<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge' />
	<meta name='format-detection' content='date=no' />
	<meta name='format-detection' content='address=no' />
	<meta name='format-detection' content='telephone=no' />
	<meta name='x-apple-disable-message-reformatting' />
	<!--[if !mso]><!-->
	<link href='https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i' rel='stylesheet' />
	<!--<![endif]-->
	<title>Vocational Training Authority</title>


	<style type='text/css' media='screen'>
		/* Linked Styles */
		body {
			padding: 0 !important;
			margin: 0 !important;
			display: block !important;
			min-width: 100% !important;
			width: 100% !important;
			
			-webkit-text-size-adjust: none
		}

		a {
			color: #66c7ff;
			text-decoration: none
		}

		p {
			padding: 0 !important;
			margin: 0 !important
		}

		img {
			-ms-interpolation-mode: bicubic;
			/* Allow smoother rendering of resized image in Internet Explorer */
		}

		.mcnPreviewText {
			display: none !important;
		}


		/* Mobile styles */
		@media only screen and (max-device-width: 480px),
		only screen and (max-width: 480px) {
			.mobile-shell {
				width: 100% !important;
				min-width: 100% !important;
			}

			.bg {
				background-size: 100% auto !important;
				-webkit-background-size: 100% auto !important;
			}

			.text-header,
			.m-center {
				text-align: center !important;
			}

			.center {
				margin: 0 auto !important;
			}

			.container {
				padding: 20px 10px !important
			}

			.td {
				width: 100% !important;
				min-width: 100% !important;
			}

			.m-br-15 {
				height: 15px !important;
			}

			.p30-15 {
				padding: 30px 15px !important;
			}

			.m-td,
			.m-hide {
				display: none !important;
				width: 0 !important;
				height: 0 !important;
				font-size: 0 !important;
				line-height: 0 !important;
				min-height: 0 !important;
			}

			.m-block {
				display: block !important;
			}

			.fluid-img img {
				width: 100% !important;
				max-width: 100% !important;
				height: auto !important;
			}

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top {
				float: left !important;
				width: 100% !important;
				display: block !important;
			}

			.column-empty {
				padding-bottom: 10px !important;
			}

			.column-empty2 {
				padding-bottom: 30px !important;
			}

			.content-spacing {
				width: 15px !important;
			}
		}
	</style>
</head>

<body class='body'
	style='padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important;   -webkit-text-size-adjust:none;'>
	<table width='100%' border='0' cellspacing='0' cellpadding='0'  >
		<tr>
			<td align='center' valign='top'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' class='mobile-shell'>
					<tr>
						<td class='td container'
							style='width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;'>
							<!-- Header -->
					
							<!-- END Header -->

							<!-- Intro -->
							<table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td style='padding-bottom: 10px;'>
										<table width='100%' border='0' cellspacing='0' cellpadding='0'>
											<tr>
												<td class='tbrr p30-15'
													style='padding: 20px;border-radius: 25px 25px 0px 0px;'
													bgcolor='#f5f5f5'>
													<table width='100%' border='0' cellspacing='0' cellpadding='0'>
														<tr>
															<td class='h1 pb25'
																style='color:#000; font-family:Muli, Arial,sans-serif; font-size:32px; line-height:46px; text-align:center; font-weight:700'>
																Welcome, to 'Skills Online Sri Lanka'</td>
														</tr>

													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- END Intro -->

							<!-- Article / Full Width Image + Title + Copy + Button -->
							<table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td style='padding-bottom: 10px;'>
										<table width='100%' border='0' cellspacing='0' cellpadding='0'
											bgcolor='#f5f5f5'>
											 
											<tr>
												<td class='p30-15' style='padding: 50px 30px;'>
													<table width='100%' border='0' cellspacing='0' cellpadding='0'>
													
														<tr>
															<td class='text pb20'
																style='color:#000; font-family:Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; padding-bottom:20px;'>
                                                                
																<h4>Dear Applicant,</h4>
                                                                <p style='color:#000; '>Thank you very much for registering with the COL-Skills for Work-Skills online Sri Lanka Programme.</p><br>
                                                                <p style='color:#000; '>If you are eligible and are short-listed you will receive an email from SOSL, requesting you to attend an online-interview within next 3 days.  In case if you do not see it in your Inbox remember to <strong>check your email ‘SPAM’ folder</strong> as well. </p><br>
                                                                <p style='color:#000; '>If you have any questions, need clarifications or have concerns please do not hesitate to contact the helpdesk at the National Library: Email - <strong>help.skillsonline@mail.natlib.lk</strong>  Phone: +94113610772; WhatsApp: +94711919475 (Text only).</p><br>
                                                                <p style='color:#000; '>Coordinator,</p>
                                                                <p style='color:#000; '>NLSL- Skills Online Programme.</p>
                                                                </td>
														</tr>
														
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- END Article / Full Width Image + Title + Copy + Button -->

							<!-- Footer -->
							<table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td class='p30-15 bbrr' style='padding: 25px;
border-radius: 0px 0px 25px 25px;'
										bgcolor='#f5f5f5'>
										<table width='100%' border='0' cellspacing='0' cellpadding='0'>
											
											<tr>
												<td class='text-footer1 pb10'
													style='color:#000; font-family:Muli, Arial,sans-serif; font-size:14px; line-height:20px; text-align:center;'>
													VTA ICT UNIT - Skill online Sri Lanka</td>
											</tr>
											 
										</table>
									</td>
								</tr>
								 
							</table>
							<!-- END Footer -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>

</html>
    ";

        

        if (mail($to, $subject, $message, $headers)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//    
//    public function getActiveStudent() {
//
//        $query = "SELECT * FROM `student` WHERE `status` = 1 ORDER BY `id` DESC";
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//        $array_res = array();
//
//        while ($row = mysqli_fetch_array($result)) {
//            array_push($array_res, $row);
//        }
//
//        return $array_res;
//    }
//
//    public function getInActiveStudent() {
//
//        $query = "SELECT * FROM `student` WHERE `status` = 0 ORDER BY `id` DESC";
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//        $array_res = array();
//
//        while ($row = mysqli_fetch_array($result)) {
//            array_push($array_res, $row);
//        }
//
//        return $array_res;
//    }
//
//
//    public function login($student_id, $password) {
//
//        $enPass = md5($password);
//
//        $query = "SELECT `id` FROM `student` WHERE `student_id`= '" . $student_id . "' AND `password`= '" . $enPass . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//
//            return FALSE;
//        } else {
//
//            $this->id = $result['id'];
//            $this->setAuthToken($result['id']);
//            $this->setLastLogin($result['id']);
//
//            $this->setUserSession($result['id']);
//            $this->updateResetCodeNull(' ');
//
//            return $result['id'];
//        }
//    }
//
//    public function checkOldPass($id, $password) {
//
//        $enPass = md5($password);
//
//        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function changePassword($id, $password) {
//
//        $enPass = md5($password);
//
//        $query = "UPDATE  `student` SET "
//                . "`password` ='" . $enPass . "' "
//                . "WHERE `id` = '" . $id . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function ChangeProPic($student, $file) {
//
//        $query = "UPDATE  `student` SET "
//                . "`image_name` ='" . $file . "' "
//                . "WHERE `id` = '" . $student . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function checkMobileNumberVerifried($id) {
//
//
//        $query = "SELECT * FROM `student` WHERE `phone_verification` = 0 AND `id`= '" . $id . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//    public function checkMobileVerificationCode($code) {
//
//
//        $query = "SELECT * FROM `student` WHERE `phone_code` = '" . $code . "' AND `id`= '" . $this->id . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//    public function updateMobileVerification() {
//
//        $query = "UPDATE  `student` SET "
//                . "`phone_verification` ='" . $this->phone_verification . "' "
//                . "WHERE `id` = '" . $this->id . "'";
//
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return $this->__construct($this->id);
//        } else {
//
//            return FALSE;
//        }
//    }
//    public function checkRegistrationMobileNo($mobile) {
//
//
//        $query = "SELECT `id` FROM `student` WHERE `phone_number`= '" . $mobile . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function checkStudentId($student_id) {
//
//
//        $query = "SELECT `id` FROM `student` WHERE `student_id`= '" . $student_id . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function authenticate() {
//
//        if (!isset($_SESSION)) {
//
//            session_start();
//        }
//
//        $id = NULL;
//        $authToken = NULL;
//
//        if (isset($_SESSION["id"])) {
//
//            $id = $_SESSION["id"];
//        }
//
//        if (isset($_SESSION["authToken"])) {
//
//            $authToken = $_SESSION["authToken"];
//        }
//
//        $query = "SELECT `id` FROM `student` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function logOut() {
//
//        if (!isset($_SESSION)) {
//
//            session_start();
//        }
//
//        unset($_SESSION["id"]);
//        unset($_SESSION["full_name"]);
//        unset($_SESSION["email"]);
//        unset($_SESSION["student_id"]);
//        unset($_SESSION["authToken"]);
//        unset($_SESSION["level"]);
//        unset($_SESSION["image_name"]);
//
//        return TRUE;
//    }
//
//    public function checkLogin($id) {
//
//        $query = "SELECT * FROM `student` WHERE `id` ='" . $id . "'  AND `status` = 0 ";
//
//        $db = new Database();
//        $result = mysqli_fetch_array($db->readQuery($query));
//        return $result['id'];
//    }
//
//    private function setUserSession($student) {
//
//        if (!isset($_SESSION)) {
//
//            session_start();
//        }
//        $STU = new Student($student);
//        $_SESSION["id"] = $STU->id;
//        $_SESSION["student_id"] = $STU->student_id;
//        $_SESSION["email"] = $STU->email;
//        $_SESSION["full_name"] = $STU->full_name;
//        $_SESSION["authToken"] = $STU->authToken;
//        $_SESSION["lastLogin"] = $STU->lastLogin;
//        $_SESSION['login_time'] = time();
//        $_SESSION['image_name'] = $STU->image_name;
//    }
//
//    private function setAuthToken($id) {
//
//        $authToken = md5(uniqid(rand(), true));
//
//        $query = "UPDATE `student` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";
//
//        $db = new Database();
//
//        if ($db->readQuery($query)) {
//
//            return $authToken;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function checkRegistrationMobile($phone_number) {
//
//
//        $query = "SELECT `id` FROM `student` WHERE `phone_number`= '" . $phone_number . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function checkRegistrationEmail($email) {
//
//        $query = "SELECT `id` FROM `student` WHERE `email`= '" . $email . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    private function setLastLogin($id) {
//
//        date_default_timezone_set('Asia/Colombo');
//
//        $now = date('Y-m-d H:i:s');
//
//        $query = "UPDATE `student` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";
//
//        $db = new Database();
//
//        if ($db->readQuery($query)) {
//
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function checkEmail($email) {
//
//        $query = "SELECT `email`,`student_id` FROM `student` WHERE `email`= '" . $email . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//
//            return FALSE;
//        } else {
//
//            return $result;
//        }
//    }
//
//    public function getLastStudentId() {
//        $query = " SELECT `id` FROM `student` ORDER BY `id` DESC LIMIT 1";
//        $db = new Database();
//        $result = mysqli_fetch_assoc($db->readQuery($query));
//
//        return $result['id'];
//    }
//
//    public function GenarateCode($email) {
//
//        $rand = rand(10000, 99999);
//
//        $query = "UPDATE  `student` SET "
//                . "`resetcode` ='" . $rand . "' "
//                . "WHERE `email` = '" . $email . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
////    public function GenarateMobileCode() {
////
////        $rand = rand(10000, 99999);
////
////        $query = "UPDATE  `student` SET "
////                . "`phone_code` ='" . $rand . "' "
////                . "WHERE `id` = '" . $this->id . "'";
////
////        $db = new Database();
////
////        $result = $db->readQuery($query);
////
////        if ($result) {
////            return $this->__construct($this->id);
////        } else {
////            return FALSE;
////        }
////    }
//    //function
////    function sendSMS($phone_number, $message) {
////        $MSISDN = $phone_number;
////        $MESSAGE = $message;
////        $USERNAME = "thinesh_sir";
////        $PWD = "TH321SR";
////        $SRC = "Thinesh Sir";
////
////
////        $url = 'http://sms.textware.lk:5000/sms/send_sms.php';
////        $myvars = 'username=' . $USERNAME . '&password=' . $PWD . '&src=' . $SRC . '&dst=' . $MSISDN . '&msg=' . $MESSAGE;
////
////        $ch = curl_init($url);
////
////        curl_setopt($ch, CURLOPT_POST, 1);
////        curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
////        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
////        curl_setopt($ch, CURLOPT_HEADER, 0);
////        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
////
////
////        $response = curl_exec($ch);
////
////        if ($response) {
////            return TRUE;
////        } else {
////            return FALSE;
////        }
////    }
//
//    public function updateResetCodeNull($code) {
//
//        $query = "UPDATE  `student` SET "
//                . "  `resetcode` = '" . $code . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return TRUE;
//        } else {
//
//            return FALSE;
//        }
//    }
//
//    public function SelectForgetUser($email) {
//
//        if ($email) {
//
//            $query = "SELECT `email`,`full_name`,`student_id`,`resetcode` FROM `student` WHERE `email`= '" . $email . "'";
//
//            $db = new Database();
//
//            $result = mysqli_fetch_array($db->readQuery($query));
//
//            $this->full_name = $result['full_name'];
//            $this->student_id = $result['student_id'];
//            $this->email = $result['email'];
//            $this->resetcode = $result['resetcode'];
//            return $result;
//        }
//    }
//
//    public function SelectResetCode($code) {
//
//        $query = "SELECT `id` FROM `student` WHERE `resetcode`= '" . $code . "'";
//
//        $db = new Database();
//
//        $result = mysqli_fetch_array($db->readQuery($query));
//
//        if (!$result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
//    }
//
//    public function updatePassword($password, $code) {
//
//        $enPass = md5($password);
//
//        $query = "UPDATE  `student` SET "
//                . "`password` ='" . $enPass . "' "
//                . "WHERE `resetcode` = '" . $code . "'";
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return TRUE;
//        } else {
//
//            return FALSE;
//        }
//    }
//
//    public function update() {
//
//        $query = "UPDATE  `student` SET "
//                . "`full_name` ='" . $this->full_name . "', "
//                . "`phone_number` ='" . $this->phone_number . "', "
//                . "`address` ='" . $this->address . "', "
//                . "`email` ='" . $this->email . "' "
//                . "WHERE `id` = '" . $this->id . "'";
//
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return $this->__construct($this->id);
//        } else {
//
//            return FALSE;
//        }
//    }
//
//    public function sendStudentRegistrationEmail($name, $email, $student_id, $password) {
//
//
//        $to = '<' . $email . '>';
//        $subject = 'Registered Successfully - easytutor.lk ';
//        $from = 'EasyTutor.LK NOREPLY <info@easytutor.lk>';
//
//// To send HTML mail, the Content-type header must be set
//        $headers = 'MIME-Version: 1.0' . "\r\n";
//        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//// Create email headers
//        $headers .= 'From: ' . $from . "\r\n" .
//                'Reply-To: ' . $from . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//// Compose a simple HTML email message
//        $message = '<html> 
//     <body>
//<table width="100%" cellspacing="0" cellpadding="0" border="0"  >
//    <tbody>
//        <tr>
//            <td align="center">
//                <table style="max-width:660px;" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
//                    <tbody>
//                        <tr>
//                            <td bgcolor="#0e82ac">
//                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
//                                    <tbody>
//                                        <tr>
//                                            <td>
//                                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
//                                                    <tbody>
//                                                        <tr>
//                                                            <td><h1 style="margin-top:20px;margin-bottom:0px;color: #fff;font-size: 38px;font-family: Arial,Helvetica,sans-serif;letter-spacing: 2px" align="center">EASY<span style="color: #f48420">TUTOR</span>.LK</h1>
//                                                                <h2 style="text-align:center;color: #fff;margin: 5px 0px 15px 0px;font-size: 24px;font-family: Arial,Helvetica,sans-serif;letter-spacing: 2px"><span class="il">Online Learning Center</span></h2>
//                                                            </td>
//                                                        </tr>
//                                                    </tbody>
//                                                </table>
//                                            </td>
//                                        </tr>
//                                    </tbody>
//                                </table>
//                            </td>
//                        </tr>
//                    </tbody>
//                </table>
//
//                <table style="max-width:660px;border: 1px solid #999;" width="100%" cellspacing="0" cellpadding="0" border="0">
//                    <tbody>
//                        <tr>
//                            <td>
//                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
//                                    <tbody>
//                                        <tr>
//                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-style:normal;font-weight:500;line-height:28px;padding:25px 34px 0px 40px;font-family: Arial,Helvetica,sans-serif;" align="left">Thank Your For Join With Us..!</td>
//                                        </tr>
//                                        <tr>
//                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:16px;font-style:normal;font-weight:500;line-height:28px;padding:10px 40px 5px 40px" align="left">Hi,<span style="color:#3b5998"><b>' . $name . ',</b></span></td>
//                                        </tr>
//                                        <tr>
//                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:500;line-height:22px;padding:0px 40px 20px 40px;text-align:justify" align="left">You are now Registration with <a href="https://easytutor.lk/" target="_blank"  >www.easytutor.lk</a>. Now you can access you Account.In this Email Bellow add the Login URL And Login Student Id and Password. So if you wont to change the login details you can do it in your account profile Area. Thank You..! 	 
//                                                <br> <span style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:600;line-height:28px; text-align:justify">The account login details bellow,</span></td>
//                                        </tr>
//                                        <tr>
//                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:15px;font-style:normal;font-weight:500;line-height:22px;padding:0px 40px 20px 40px;text-align:justify" align="left">
//                                                * Please use your this student id <a href="#" target="_blank" data-saferedirecturl="">' . $student_id . ' </a> and Password <a href="#" target="_blank" data-saferedirecturl="">' . $password . ' </a> to login. 
//                                            </td>
//                                        </tr>
//                                        <tr>
//                                            <td style="color:#000;font-family:Arial,Helvetica,sans-serif;font-size:14px;font-style:normal;font-weight:600;line-height:28px;padding:0px 40px 0px 40px;text-align:justify" align="left"> NOTE: Please Do not reply to this email</td>
//                                        </tr>
//                                        <tr>
//                                            <td style="color:#6d6e70;font-family:Arial,Helvetica,sans-serif;font-size:12px;font-style:normal;font-weight:500;line-height:18px;padding:0px 40px 25px 40px" align="left">This email was generated for notification purpose. You are receiving this email because you are a member of easytutor.lk web Site. </td>
//                                        </tr>
//
//                                        <tr bgcolor="#0e82ac">
//                                            <td   align="center">
//                                                <table style="max-width:660px;margin-bottom: 15px;margin-top: 15px;" width="100%" cellspacing="0" cellpadding="0" border="0">
//                                                    <tbody>
//                                                        <tr>
//                                                            <td style="color:#7f8c8d;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;"   align="left">
//                                                                <table cellspacing="0" cellpadding="0" border="0" align="center">
//                                                                    <tbody>
//                                                                        <tr style="padding-bottom:10px;padding-top:10px;color:#fff">
//                                                                            <td align="center">Easy Tutor (Online Learning Center) Private Limited - <span class="il">Sri Lanka</span>. </td>
//                                                                        </tr>
//                                                                        <tr  >
//                                                                            <td style="padding-bottom:10px;padding-top:10px"> 
//                                                                                <a style="color:#fff" href=" " target="_blank"  ><span class="il">easytutor</span>.lk</a> |
//                                                                                <a style="color:#fff" href=" " target="_blank" data-saferedirecturl="">Help &amp; Support</a> |
//                                                                                <a style="color:#fff" href=" " target="_blank" data-saferedirecturl="">Privacy Policy</a> |
//                                                                                <a style="color:#fff"  href=" " target="_blank" data-saferedirecturl="">Term and Conditions</a>
//                                                                            </td>
//                                                                        </tr>
//                                                                    </tbody>
//                                                                </table>
//                                                            </td>
//                                                        </tr>
//                                                    </tbody>
//                                                </table>
//                                            </td>
//                                        </tr>
//                                    </tbody>
//                                </table>
//                            </td> 
//                        </tr>
//                    </tbody> 
//                </table>  
//            </td>
//        </tr>
//    </tbody>
//</table><div class="yj6qo"></div><div class="adL">
//</div>
//     </body>
//</html>';
//
//
//
//        if (mail($to, $subject, $message, $headers)) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function _set_cookie() {
//        $key = 'val';
//        $value = rand(100000, 999999);
////SET ON CLIENT
//        setcookie($key, $value, time() + (10 * 365 * 24 * 60 * 60 * 500), '/'); //expire days
////SET ON PHP
//        $_COOKIE[$key] = $value;
//
//        $query = "UPDATE  `student` SET "
//                . "`cookie` ='" . $value . "' "
//                . "WHERE `id` = '" . $this->id . "'";
//
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return $this->__construct($this->id);
//        } else {
//
//            return FALSE;
//        }
//    }
//
//    function _get_cookie($key) {
//        if (isset($_COOKIE[$key])) {
//
//            return $_COOKIE[$key];
//        } else {
//            return FALSE;
//        }
//    }
//
//    public function updateActiveStudent() {
//
//        $query = "UPDATE  `student` SET "
//                . "`full_name` ='" . $this->full_name . "', "
//                . "`gender` ='" . $this->gender . "', "
//                . "`age` ='" . $this->age . "', "
//                . "`phone_number` ='" . $this->phone_number . "', "
//                . "`address` ='" . $this->address . "', "
//                . "`email` ='" . $this->email . "', "
//                . "`status` ='" . $this->status . "' "
//                . "WHERE `id` = '" . $this->id . "'";
//
//
//        $db = new Database();
//
//        $result = $db->readQuery($query);
//
//        if ($result) {
//
//            return $this->__construct($this->id);
//        } else {
//
//            return FALSE;
//        }
//    }
//
//    public function delete($id) {
//
//        $STUDENT_REGISTRATION = new StudentRegistration(NULL);
//
//        $STUDENT_REGISTRATION->deleteStudentId($id);
//
//
//        $query = 'DELETE FROM `student` WHERE id="' . $id . '"';
//
//
//        $db = new Database();
//
//
//
//        return $db->readQuery($query);
//    }
//
//    public function deleteClass() {
//
//
//
//        foreach ($STUDENT_REGISTRATION->getRegistrationClassesByStudent($this->id) as $student_registration) {
//
//            $STUDENT_REGISTRATION->id = $student_registration["id"];
//
//            $STUDENT_REGISTRATION->delete();
//        }
//    }
}
