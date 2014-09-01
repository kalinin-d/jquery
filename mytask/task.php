<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">task10</title>
<!-- Bootstrap
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <h1>Задание №10</h1>

 Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
  По желанию можете сделать проверку на корректность введения данных пользователем.


  <form action="#innum" method="GET" role="form">
  	<legend>Ввести число</legend>

  	<div class="form-group col-xs-6 col-md-4">
  		<label for="num"></label>
  		<input type="text" class="form-control col-xs-6 col-md-4" name="num" id="" placeholder="Введите число...">
  	</div>



  	<button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 01.09.14
 * Time: 8:39
 */

if($_REQUEST["num"] && is_numeric($_REQUEST["num"]) ) {
	echo "<br/>" . "Результат:" . " " . $_REQUEST["num"];
	$str =str_split( $_REQUEST["num"]);

}else echo "<br/>" . '<div class="text-danger"> Вводить можно только цыфровые символы </div>';





?>




<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed
<script src="js/bootstrap.min.js"></script>-->

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>



