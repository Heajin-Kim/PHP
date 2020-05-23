<!DOCTYPE html>
<html lang="en">
<head>
  <title>main_home</title>
</head>
<style>
  a {
    border: 1px solid #42464b;
    margin: 20px;
    text-align: center;
  }
  .calculater{
    margin:30px;
  }
  .calculater td {
    border: 3px solid #424265;
    padding: 10px;
  }
</style>
<body>
  <h1>Main Homepage</h1>
  <?php
    /**
     * TEST1
     */
    class MyFirstClass
    {
      // 멤버 변수 (속성) 선언
      private $name;

      // 생성자 선언
      function __construct($argName){
        // whosname은 임의의 이름이며 진짜 값이 들어있는 변수는 $argName이다.
        // 아래의 구문은 현재 있는 변수의 값을 whosname로 한다는 의미?
        $this->whosname = $argName;
        print "클래스 생성자"
      }
      function printMyname(){
        echo $this->whosname;
      }

      function MySecondClass extends MyFirstClass{
        function __construct()
        {
          print "클래스 생성자"
        }
      }
    }

    // $mfc에 MyFirstClass의 객체 생성
    $mfc = new MyFirstClass("ELSA");

    // 생성된 객체의 printMyname메소드 호출
    $mfc->printMyname();

  ?>
  <div class="menu">
    <a href="#">메뉴1</a>
    <a href="#">메뉴2</a>
    <a href="#">메뉴3</a>
    <a href="#">메뉴4</a>
  </div>
  <div class="calculater">
    <table>
      <tr>
        <td>숫자1</td>
        <td>부호</td>
        <td>숫자2</td>
        <td>결과</td>
      </tr>
      <tr>
        <td><?php $mfc->printMyname(); ?></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
</body>
</html>
