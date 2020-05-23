<?php

   class classA{
     /* classA의 생성자가 호출 되었을 경우, print기능이 실행되며 아래의 문구가 출력된다. */
     function __construct(){
       print "ClassA의 생성자입니다."."<BR>";
     }
     function __destruct(){
       print "생성자 소멸 기능입니다.";
     }
   }
   class classB extends classA{
     function __construct(){
       /* 이 명령어는 부모클래스의 생성자를 호출하는 명령어이다.
        * 만약 이 명령어가 없다면 classB를 선언했을 경우 classB생성자만 실행된다.
       */
       parent::__construct();
       print "classB의 생성자입니다."."<BR>";
     }
   }

   $obj = new classA();

   echo "before";
   // PHP 함수 중 하나인 unset 함수는 변수 제거에 사용하는 함수입니다.
   unset($obj);
   echo "afeter"

 ?>
