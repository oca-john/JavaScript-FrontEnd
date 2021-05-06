<!DOCTYPE html>  
<html>  
<body>  

<h1>My first PHP page</h1>  

// PHP 代码在服务器端执行，可以位于 HTML 文件的任意位置
// 由以下开头和结尾包含代码，注释语法与 C++ 一样
<?php  
  echo "Hello World!";  // 简单文本打印
  
  $x=5;       // 变量赋值
  $y=6;
  $z=$x+$y;   // 简单计算
  echo $z;
  
  echo "<h2>PHP 很有趣!</h2>"; // 字串可以包含 html 标记
  echo "Hello world!<br>";
  echo "这是一个", "字符串，", "使用了", "多个", "参数。";
  
  // 以上 echo 可以用 print 代替，区别是 echo 支持多个字串对象打印
  
  $x = "Hello world!";
  $x = 'Hello world!';        // 单双引号均可引住字串
  
  // if 语句
  $t=date("H");               // php 内的 if 语句
  if ($t<"20")
  {
      echo "Have a good day!";
  }
  
  // switch 条件语句
  switch (n)                  // php内的 switch 语句
  {
  case label1:
      如果 n=label1，此处代码将执行;
      break;
  case label2:
      如果 n=label2，此处代码将执行;
      break;
  default:
      如果 n 既不等于 label1 也不等于 label2，此处代码将执行;
  }
  
  // 数组
  $cars=array("Volvo","BMW","Toyota");    // 创建并打印数组
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  
  // 函数
  function writeName()        // 定义函数
  {
      echo "Kai Jim Refsnes"; // 函数内部的代码块
  }
  echo "My name is ";         // 打印字符串及变量（通过调用函数）
  writeName();
  
  // 数据库
  $servername = "localhost";  // 连接 mysql 数据库，填写数据库和用户信息
  $username = "username";
  $password = "password";
  // 创建连接
  $conn = new mysqli($servername, $username, $password);
  // 检测连接
  if ($conn->connect_error) {
      die("连接失败: " . $conn->connect_error);
  }
  echo "连接成功";
?>  

</body>  
</html>
