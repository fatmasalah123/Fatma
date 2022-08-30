
<?php


if($_POST){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    if (empty($_POST['user-name'])) {

        $errors['user-name'] = "<div class='font-weight-bold text-danger' > User Name Is Required </div>";

    }
    if (empty($_POST['loan-amount'])) {

        $errors['loan-amount'] = "<div class='font-weight-bold text-danger' > Loan-Amount Is Required </div>";
    }
    if (empty($_POST['loan-year'])) {

        $errors['loan-year'] = "<div class='font-weight-bold text-danger' > Loan-Year Is Required </div>";
    }



   
}}




?>
<!doctype html>
<html lang="en">
  <head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4 offset-4 my-5">
          <form action="" method="POST">
            <h1 class="b-5 m-5 text-primary text-center">Bank</h1>
            <div class="form-group">
              <label for="user-name" class="text-col primary">User Name</label>
              <input id="user-name" class="form-control" type="text" name="user-name"value="<?=isset($_POST['user-name'])?$_POST['user-name']:'' ?>">
            </div>
            <?=  $errors['user-name'] ?? ""  ?>
            <div class="form-group">
              <label for="loan-amount" class="text-col primary">Loan amount</label>
              <input id="loan-amount" class="form-control" type="text" name="loan-amount"value="<?=isset($_POST['loan-amount'])?$_POST['loan-amount']:''?>">
            </div>
            <?=  $errors['loan-amount'] ?? ""  ?>
            <div class="form-group">
              <label for="loan-year" class="text-col primary">Loan Year</label>
              <input id="loan-year" class="form-control" type="text" name="loan-year"value="<?=isset($_POST['loan-year'])?$_POST['loan-year']:''?>">
            </div>
            <?=  $errors['loan-year'] ?? ""  ?>
            <div class="form-group">
            <input type="submit" name="sub" value="Submit" class="btn btn-primary  btn-block ">
            </div>
            <?php if(isset($_POST['user-name'])&&isset($_POST['loan-year'])&&isset($_POST['loan-amount'])){ ?>
          </form>
          
          <table class="table table-striped table-hover">
            <thead>
                
                <tr>
                    <th>User Name</th>
                    <th>Inserted Rate</th>
                    <th>Loan After Rate</th>
                    <th>Monthly</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST['user-name'];?></td>
                    <td><?php 
                    if($_POST['loan-year']<=3){
                    $ins=(($_POST['loan-year']*10)/100)*$_POST['loan-amount'];
                    echo $ins;

                }
                else
                {
                    $ins=(($_POST['loan-year']*15)/100)*$_POST['loan-amount'];
                    echo $ins;
                }
                    ?>
                    </td>
                    <td><?php echo $_POST['loan-amount']+$ins;?></td>
                    <td><?php echo ($_POST['loan-amount']+$ins)/($_POST['loan-year']*12);?></td>
                </tr>
            </tbody>
          </table>
          <?php }?>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
  
  </body>

</html>