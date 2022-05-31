<?php
  class Player{
      public $name;
      public $score;
      public $level;

    //   function __construct($)


      function displayScore(){
             echo $this->name ." votre score est ".$this->score;
      }
  }


 // $play1 = new Player('Youssef', 0 , "biginner");


  print_r($play1)
