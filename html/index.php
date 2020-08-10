<?php
   header('X-XSS-Protection:0');
   include_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <?php echo "Hello Word";?>
                </h2>
                <?php
                  // initialize
                  $fname = '';
                  $lname = '';
                  $checked =  '';
                 // $skills = '';
                 // $fruits = ['Banana','lemon','Mango','orange'];
                  ?>
             
                <?php  if( isset($_POST['fname']) && !empty($_POST['fname']) ) { 
                     //$fname = htmlspecialchars($_POST['fname']);
                     $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                  } 
                 ?>
                <?php  if( isset($_POST['lname']) && !empty($_POST['lname']) ) { 
                     $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                  } 
                 ?>
                <?php  if( isset($_POST['cb1']) && $_POST['cb1']==1 ) {
                     $checked =  'checked';
                  }
                  print_r($_REQUEST);
                ?>
                <?php?>
                <form method="POST">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name"
                            value="<?php echo $fname; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name"
                            value="<?php echo $lname ;?>">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="cb1" class="label-inline">Terms & Condition</label> <br>
                    </div>
                    <label class="label">Select Some Fruits</label><br/>
                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange')?>>  
                    <label for="cb1" class="label-inline">Orange</label> <br/>

                    <input type="checkbox" name="fruits[]" value="apple" <?php isChecked('fruits','apple')?>>
                    <label for="cb1" class="label-inline">Apple</label> <br/>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>