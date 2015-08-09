<?php
    class Jobs
    {
        private $title;
        private $time;
        private $duties;

        function __construct($title, $time, $duties)
        {
            $this->title = $title;
            $this->time = $time;
            $this->duties = $duties;
        }

        function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setTime($new_time)
        {
            $this->time = $new_time;
        }

        function getTime()
        {
            return $this->time;
        }

        function setDuties($new_duties)
        {
            $this->duties = $new_duties;
        }

        function getDuties()
        {
            return $this->duties;
        }

        function save()
        {
            array_push($_SESSION['list_of_jobs'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_jobs'];
        }

        static function deleteAll()
        {
             $_SESSION['list_of_jobs'] = array();
        }
    }
?>
