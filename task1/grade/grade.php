
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
 .<div class="card">
    <div class="card-body">
        <!-- <h5 class="card-title">Title</h5>
        <p class="card-text">Content</p> -->
        <div class="container">
    <div class="row">
        <div class="col-md-12 h1 text-center text-success">GRADE</div>
    <div class="col-5 offset-4">
        <form method="POST" >
            <div class="form-group">
                <label for="Physics">physics</label>
                <input id="Physics" class="form-control" type="text" name="Physics">
            </div>
            <div class="form-group">
                <label for="Chemistry">Chemistry</label>
                <input id="Chemistry" class="form-control" type="text" name="Chemistry">
            </div>
            <div class="form-group">
                <label for="Biology">Biology</label>
                <input id="Biology" class="form-control" type="text" name="Biology">
            </div>
            <div class="form-group">
                <label for="Mathematics">Mathematics</label>
                <input id="Mathematics" class="form-control" type="text" name="Mathematics">
            </div>
            <div class="form-group">
                <label for="Computer">Computer</label>
                <input id="Computer" class="form-control" type="text" name="Computer">
            </div>
            <div class="form-group">
            <input type="submit" name="degree" value="calculate" class="btn btn-success">
            </div>
            <?php
            //echo "Percentage Is :{$per}% <br>";
            //echo "Grade Is :{$grade}";
            ?>
            <?php
if($_POST){
if( $_POST['Physics'] && $_POST['Chemistry']  && $_POST['Biology']  && $_POST['Mathematics']   && $_POST['Computer']){
if(($_POST['Physics'])<=100&&($_POST['Chemistry'])<=100 &&($_POST['Biology'])<=100&& ($_POST['Mathematics'])<=100&&($_POST['Computer']<=100)){
    $sum=($_POST['Physics']) + ($_POST['Chemistry']) + ($_POST['Biology'])+($_POST['Mathematics'])+($_POST['Computer']);
    $per=($sum/500)*100;
    if($per>=90){
        $grade="A";
    }
    elseif($per>=80){
        $grade="B";
    }
    elseif($per>=70){
        $grade="C";
    }
    elseif($per>=60){
        $grade="D";
    }
    elseif($per>=40){
        $grade="E";
    }
    elseif($per<=40){
        $grade="F";
    }
    echo "Percentage Is :{$per}% <br>";
    echo "Grade Is :{$grade}";
}
else{
    echo"Invalid Degree";
}
}

}

?>
        </form>
    </div>
    </div>
</div>
    </div>
 </div>


</body>
</html>