<?php
$con = mysqli_connect("localhost","root","","reg_form"); 
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $update_query = "UPDATE reg_form SET fname='$fname', sname='$sname', dob='$dob', email='$email', address='$address', password='$password_hash' WHERE id='$id'";
    mysqli_query($con, $update_query);
    header("location:table.php");
}

$query = "SELECT * FROM reg_form WHERE id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap reg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
 <section style="background-color: black;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-50">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-2">Registration Form</h2>
  
                <form method="post">
  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">First Name</label>
                    <input type="text" id="form3Example1cg" value="<?php echo $row['fname'] ?>" name= "fname" id="Fname" class="form-control form-control-md" placeholder="enter your fist name"/>
                    <label class="form-label" for="form3Example3cg">Last Name</label>
                    <input type="text" id="form3Example3cg" value="<?php echo $row['sname'] ?>" name="sname" id="Sname" class="form-control form-control-md" placeholder="enter your last name" />
                    <label for="date" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" value="<?php echo $row['dob'] ?>" name="dob" id="dob" placeholder="00-00-0000"/>
                    <label class="form-label" for="form3Example4cg">Email</label>
                    <input type="email"  name="email" value="<?php echo $row['email'] ?>" id="email"class="form-control form-control-md" placeholder="enter your email" />
                    <label class="form-label" for="form3Example4cdg">Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $row['address'] ?>" class="form-control form-control-md" placeholder="enter your Address" />
                    <label class="form-label" for="form3Example4cdg" >password</label>
                    <input type="text" name="password" id="password" value="<?php echo $row['password'] ?>" class="form-control form-control-md" placeholder="enter your password" />
                    <label class="form-check-label d-flex justify-content-center mb-1" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      <input class="form-check-input me-2 " type="checkbox" value="" id="form2Example3cg" />
                    </label>  
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="submit" name="submit"  value="update"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"/>
                  </div>
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
 </section>

</body>