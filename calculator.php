<?php

    class calculator{
        private $result;
        public function addNumber($num1, $num2){
            $this->result = $num1 + $num2;
            return $this->result;
        }
    }

?>