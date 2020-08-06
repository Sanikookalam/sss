<?php

    class Human{
        private $Hp = 100;

        public function setHp($Hp){
            $this->$Hp=$Hp;
        }



        function __construct($Hp)
        {

        }
    }