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
?>  

</body>  
</html>
