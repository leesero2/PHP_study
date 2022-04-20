<?php
    class info{
        public $_name;
        public $_age;

        public function setName($name){
            $this->_name = $name;
        }

        //함수안의 값을 가져올려면 이렇게 해야함
        public function getName(){
            return $this->_name;
        }
    }

    $a = new info();
    //$b = new info();
   
    $a->_name = "이지훈";
    $a->_age = 25;
    //print_r($a); 출력값 : info Object ( [_name] => 이지훈 [_age] => 25 )
    
    echo $a->_age; //25 출력
    echo "<br>";
    echo $a->_name; //이지훈 출력
    echo "<br>";

    //------------------------
    //함수의 인자로 넣어줄려면 아래처럼 하면됨
    $person = new info();
    $person->setName('지훈');
    $person->_age=25;

    echo $person->_age;
    echo $person->getName(); //지훈 출력