<?php
    namespace mvc;


    abstract class Model implements interfaces\Model {

        private $data = array();

        public function addData($name, $value){
            $this->data[$name] = $value;
        }

        public function getData($name){
            return $this->data[$name];
        }

    }
    ?>