<?php
    class Question
    {
        private $id;
        private $idQuestionary;
        private $statement;
        private $answerA;
        private $answerB;
        private $answerC;
        private $answerD;
        private $solution;

        public function __construct($idQuestionary, $statement, $answerA, $answerB, $answerC, $answerD, $solution, $id=NULL){
            $this->id = $id;
            $this->idQuestionary = $idQuestionary;
            $this->statement = $statement;
            $this->answerA = $answerA;
            $this->answerB = $answerB;
            $this->answerC = $answerC;
            $this->answerD = $answerD;
            $this->solution = $solution;
        }

        public function getIdQuestionary(){
            return $this->idQuestionary;
        }
        public function seIdQuestionary($idQuestionary){
            $this->id = $idQuestionary;
        }

        public function getId(){
            return $this->id;
        }
        public function seId($id){
            $this->id = $id;
        }

        public function getStatement(){
            return $this->statement;
        }
        public function setStatement($statement){
            $this->statement = $statement;
        }

        public function getAnswerA(){
            return $this->answerA;
        }
        public function setAnswerA($answerA){
            $this->answerA = $answerA;
        }  

        public function getAnswerB(){
            return $this->answerB;
        }
        public function setAnswerB($answerB){
            $this->answerB = $answerB;
        } 

        public function getAnswerC(){
            return $this->answerC;
        }
        public function setAnswerC($answerC){
            $this->answerC = $answerC;
        }  

        public function getAnswerD(){
            return $this->answerD;
        }
        public function setAnswerD($answerD){
            $this->answerD = $answerD;
        } 

        public function getSolution(){
            return $this->solution;
        }
        public function setSolution($solution){
            $this->solution = $solution;
        } 
    }
?>