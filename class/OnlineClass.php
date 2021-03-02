<?php/* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. *//** * Description of online_class * * @author  Chalana dulaj */class OnlineClass {    public $id;    public $lesson_id;    public $teacher_id;    public $title;    public $start_date;    public $start_time;    public $duration;    public $meeting_id;    public $password;    public $queue;    public function __construct($id) {        if ($id) {            $query = "SELECT * FROM `online_class` WHERE `id`=" . $id;            $db = new Database();            $result = mysqli_fetch_array($db->readQuery($query));            $this->id = $result['id'];            $this->lesson_id = $result['lesson_id'];            $this->teacher_id = $result['teacher_id'];            $this->title = $result['title'];            $this->start_date = $result['start_date'];            $this->start_time = $result['start_time'];            $this->duration = $result['duration'];            $this->meeting_id = $result['meeting_id'];            $this->password = $result['password'];            $this->queue = $result['queue'];            return $this;        }    }    public function create() {        $query = "INSERT INTO `online_class` (`lesson_id`,`teacher_id`,`title`,`start_date`,`start_time`,`duration`,`meeting_id`,`password`,`queue`) VALUES  ('"                . $this->lesson_id . "','"                . $this->teacher_id . "','"                . $this->title . "','"                . $this->start_date . "','"                . $this->start_time . "','"                . $this->duration . "','"                . $this->meeting_id . "','"                . $this->password . "','"                . $this->queue . "')";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return TRUE;        } else {            return FALSE;        }    }    public function all() {        $query = "SELECT * FROM `online_class` ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function getOnlineClassByLessonId($id) {        $query = "SELECT * FROM `online_class` WHERE `lesson_id` =" . $id . " ORDER BY queue ASC";        $db = new Database();        $result = $db->readQuery($query);        $array_res = array();        while ($row = mysqli_fetch_array($result)) {            array_push($array_res, $row);        }        return $array_res;    }    public function update() {        $query = "UPDATE  `online_class` SET "                . "`title` ='" . $this->title . "', "                . "`start_date` ='" . $this->start_date . "', "                . "`start_time` ='" . $this->start_time . "', "                . "`duration` ='" . $this->duration . "', "                . "`meeting_id` ='" . $this->meeting_id . "', "                . "`password` ='" . $this->password . "', "                . "`queue` ='" . $this->queue . "' "                . "WHERE `id` = '" . $this->id . "'";        $db = new Database();        $result = $db->readQuery($query);        if ($result) {            return $this->__construct($this->id);        } else {            return FALSE;        }    }    public function delete() {        $query = 'DELETE FROM `online_class` WHERE id="' . $this->id . '"';        $db = new Database();        return $db->readQuery($query);    }    public function arrange($key, $img) {        $query = "UPDATE `online_class` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";        $db = new Database();        $result = $db->readQuery($query);        return $result;    }    public function getActivitiesByTitle($title) {        $query = "SELECT `id` FROM `online_class` WHERE `title` LIKE '" . $title . "'";        $db = new Database();        $result = mysqli_fetch_array($db->readQuery($query));        return $result['id'];    }}