<?php
  class Player{
      public $name;
      public $score;
      public $level;



      function displayScore(){
             echo $this->name ." votre score est ".$this->score;
      }
  }