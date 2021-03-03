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
            $this->is_consent = $result['is_consent'];
            $this->created_date = $result['created_date'];

            return $result;
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
//        var_dump(mysqli_num_rows($result));
        if (mysqli_num_rows($result)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//    public function create() {
//
//        $query = "INSERT INTO `student` (`full_name`, `student_id`,`teacher_id`, `email`,`phone_number`,`password`) VALUES  ('"
//                . $this->full_name . "','"
//                . $this->student_id . "', '"
//                . $this->teacher_id . "', '"
//                . $this->email . "', '"
//                . $this->phone_number . "', '"
//                . $this->password . "')";
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
