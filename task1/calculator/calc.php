<?php
if (isset($_POST['sub'])) {    if ($_POST['num1'] && $_POST['num2']) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $oper = $_POST['sub'];
        if ($oper == "sum") {
            $result = $num1 + $num2;
        }
        if ($oper == "min") {
            $result = $num1 - $num2;
        }
        if ($oper == "mult") {
            $result = $num1 * $num2;
        }
        if ($oper == "div") {
            $result = $num1 / $num2;
        }
        if ($oper == "mod") {
            $result = $num1 % $num2;
        }
    }


}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <style>
   input[type=submit]{
    background-color:;

   }
 </style>
 
    <div class="container">
    
    <div class="row">
        <div class="col-10 h1 text-center text- warning m-2 p-2 bg-danger"> Calculator </div>
<div class="col-5 offset-3 mt-5">
    <form method='POST'>
    <div class="border border-danger my- p-4">
        <div class="form-group">
            <label for="num1 ">Enter Number 1</label><br>
            <input id="num1" class="form-control" type="text" name="num1">
        </div>
        <div class="form-group">
            <label for="num1">Enter Number 2</label><br>
            <input id="num1" class="form-control" type="text" name="num2">
        </div>
        <div class="form-group">
        <input type="submit" name="sub" value="sum" class="btn btn-danger ">
        <input type="submit" name="sub" value="min" class="btn btn-danger">
        <input type="submit" name="sub" value="mult" class="btn btn-danger">
        <input type="submit" name="sub" value="div" class="btn btn-danger">
        <input type="submit" name="sub" value="mod" class="btn btn-danger">
        <br>
        </div>
        <div class="form-group">
            <label for="result">Result</label><br>
            <input id="result" disabled class="form-control" type="text" name="result" value="<?php echo $result ?? ""; ?>"><br>
        </div>
        
    </form>
</div>
    </div>
    </div>
   
 </div>
 

</body>
</html>