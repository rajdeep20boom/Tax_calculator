<?php
$conn=mysqli_connect("localhost","root","","incometax") or die("cannot connect to localhost or database");
?>
<?php
if(isset($_POST['btn1']))
{
    extract($_POST);
    $q1="select * from `tax` where `Email`='$email'";
    $e1=mysqli_query($conn,$q1);
    if(mysqli_num_rows($e1)==0)
    {
        $q2="INSERT INTO `tax`(`Name`, `Email`, `Age`, `Income`, `Tax`) VALUES('$name','$email','$age','$AI','$tax')";
        $e2=mysqli_query($conn,$q2);
        header("location:income_tax.php");
    }
    else
    {
        $msg="Candidate Already exist..";
    }
}
else
{
    $msg="";
}
?>





<!doctype html>
<html lang="en">
  <head>
    <title>Income tax</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
            <?php
            if($msg != "")
            {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Alert!!</strong> <?php echo "$msg";?>
            </div>
            <?php
            }
            ?>
            <form action="" method="post">
                <div class="form-group">
                <label for="">Name</label>
                <input type="text" require
                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                
                </div>
                <div class="form-group">
                  <label for="">Email Id</label>
                  <input type="email" require
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                  
                </div>
                <div class="form-group">
                <label for="">Age</label>
                <input type="number" require
                    class="form-control" name="age" id="" aria-describedby="helpId" placeholder="">
                
                </div>
                <div class="form-group">
                <label for="">Annual Income</label>
                <input type="number" require
                    class="form-control" name="AI" id="A1" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                <label for="">Tax</label>
                <input type="text" readonly
                    class="form-control" name="tax" id="T1" aria-describedby="helpId" placeholder="">
                </div>
                <button type="button" onclick="fun1()" class="btn btn-primary">Calculate</button>
                <button type="submit" name="btn1" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-lg-2">
            
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function fun1()
        {
            var x=document.getElementById("A1").value;
            if(x>300000 && x <= 600000)
            {
                var m1=0.05*x;
                document.getElementById("T1").value=m1;
            }
            else if(x>600000 && x <= 900000)
            {
                var m1=0.1*x;
                var m2=15000+m1;
                document.getElementById("T1").value=m2;
            }
            else if(x>900000 && x <= 1200000)
            {
                var m1=0.15*x;
                var m2=45000+m1;
                document.getElementById("T1").value=m2;
            }
            else if(x>1200000 && x <= 1500000)
            {
                var m1=0.45*x;
                var m2=90000+m1;
                document.getElementById("T1").value=m2;
            }
            else
            {
                document.getElementById("T1").value="NIL"; 
            }
        }
    </script>




  </body>
</html>