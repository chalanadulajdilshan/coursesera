<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of tution_class * * @author  Chalana dulaj */class TutionClass {    public $id;    public $teacher_id;    public $subject_name;    public $institute;    public $grade;    public $class_type;    public $image_name;    public $description;    public $queue;    public function __construct($id) {        if ($id) {            $query = "SELECT * FROM `tution_class` WHERE `id`=" . $id;            $db = new Database();            $result = mysqli_fetch_array($db->readQuery($query));            $this->id = $result['id'];            $this->teacher_id = $result['teacher_id'];            $this->subject_name = $result['subject_name'];            $this->institute = $result['institute'];            $this->grade = $result['grade'];            $this->class_type = $result['class_type'];                       $this->image_name = $result['image_name'];            $this->description = $result['description'];            $this->queue = $result['queue'];            return $this;        }    }    public function create() {        $query = "INSERT INTO `tution_class` (`teacher_id`,`subject_name`,`institute`,`grade`,`class_type`,`image_name`,`description`,`queue`) VALUES  ('"                . $this->teacher_id . "','"                . $this->subject_name . "','"                . $this->institute . "','"                . $this->grade . "','"                . $this->class_type . "','"                . $this->image_name . "', '"                . $this->description . "', '"                . $this->queue . "')";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function all() {        $query = "SELECT * FROM `tution_class` ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function getClassesByTeacherId($id) {        $query = "SELECT * FROM `tution_class` WHERE `teacher_id` =" . $id . " ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function update() {        $query = "UPDATE  `tution_class` SET "                . "`subject_name` ='" . $this->subject_name . "', "                . "`grade` ='" . $this->grade . "', "                . "`institute` ='" . $this->institute . "', "                . "`class_type` ='" . $this->class_type . "', "                 . "`image_name` ='" . $this->image_name . "', "                . "`description` ='" . $this->description . "', "                . "`queue` ='" . $this->queue . "' "                . "WHERE `id` = '" . $this->id . "'";            $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function delete() {        unlink(Helper::getSitePath() . "upload/activity/" . $this->image_name);        $query = 'DELETE FROM `tution_class` WHERE id="' . $this->id . '"';        $db = new Database();        return $db->readQuery($query);    }    public function arrange($key, $img) {        $query = "UPDATE `tution_class` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";        $db = new Database();        $result = $db->readQuery($query);        return $result;    }    public function getActivitiesByTitle($subject_name) {        $query = "SELECT `id` FROM `tution_class` WHERE `subject_name` LIKE '" . $subject_name . "'";        $db = new Database();        $result = mysqli_fetch_array($db->readQuery($query));        return $result['id'];    }}