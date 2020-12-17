<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    
    <title>Temperature</title>
    <style>
    body{
        background-color:#ffece6;
    }
    h1{
        margin-top:12%;
        font-weight:bold;
        font-size:50px;
        font-family: 'Abril Fatface', cursive;
        color:rgba(0,0,0,.7);
    }
    .table-bordereless{
        width:25%;
        border:2px solid grey;
        box-shadow:0px 0px 10px 10px grey;
        
        margin:auto;
        margin-top:4%;
    }
    .btn-danger{
        height:6vh;
    }
    
    </style>
</head>
<body>

    <div class="text-center">
    <h1>Temperature Converter</h1>
    </div>
    <table class="table table-bordereless text-center">
    <form method="post">
        <tr><td colspan="2"><input type="number" step=".0000000001" placeholder="input tempreture" name="num" class="form-control" required></td></tr>
        <tr><td><input type="submit" name="submit" class="form-control btn btn-primary" value="Convert"></td>
        <td><select name="temp" class="btn btn-danger">
        <option value="Celsius">Celsius</option>
        <option value="Fahrenheit" >Fahrenheit</option></td>
        </tr>
        </form>
        <tr><td colspan="2"> <input type="number" readonly class="form-control" value="<?php include 'show.php';?>"></td></tr>
    </table>
    </div>
   
</body>
</html>
