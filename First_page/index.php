<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $department = $_POST["department"];
  $name = $_POST["name"];
  $date = $_POST["date"];

  $query = "INSERT INTO first_tb VALUES('', '$department', '$name', '$date')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Данные сохранены'); </script>
  ";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ознакомление</title>

    <!-- CSS -->
    <style>
        .text {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 1em;
            width: 40em;
            padding: 2em;
        }
        
        .myForm {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 1em;
            width: 40em;
            padding: 2em;
            margin-left: auto;
            margin-right: auto;
        }
        
        .myForm * {
            box-sizing: border-box;
        }
        
        .myForm label {
            padding: 0;
            font-weight: bold;
            text-align: right;
            display: block;
        }
        
        .myForm input,
        .myForm select {
            margin-left: 3em;
            float: right;
            width: 20em;
            border: 1px solid #ccc;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.9em;
            padding: 0.3em;
        }
        
        .myForm button {
            padding: 1em;
            border-radius: 0.5em;
            background: rgb(197, 204, 199);
            border: none;
            font-weight: bold;
            margin-left: 30em;
            margin-top: 2em;
        }
        
        .myForm button:hover {
            background: rgb(79, 161, 216);
            cursor: pointer;
        }
        
        h1 {
            text-align: center;
        }
        
        h3 {
            text-align: center;
        }
    </style>

    <body>
        <h1>
            <img src="pics.png" alt="Img">
        </h1>

        <h3>Данный опросный лист предназначен для проведения инвентаризации и оценки информацоинных активов.</h3>
                 
        <form action= "" class="myForm" method="post" autocomplete="off">

            <p>
                <label>Подразделение: 
<input type="text" name="department" required>
</label>
            </p>

            <p>
                <label>Кто заполнил (Ф.И.О, должность): 
<input type="text" name="name" required>
</label>
            </p>

            <p>
                <label for="Date">
    Дата заполнения: 
    <input type="date" name="date" required>
        </label>
            </p>

     <button type="submit" name="submit"> Продолжить </button>

        </form>
    </body>
</html>