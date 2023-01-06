
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
</head>
 <body>
  <?php include("header.php"); ?>
  <br>
    <div id="wrapper-admin" style="background-image: url('images/bg.jpg'); background-origin: inherit;  background-size: cover;">
   <div class="container">
    <div class="row">
      <div class="col-md-8 offset-1">
    <form method="POST" action="register-user.php" style="margin-top:-80px;"> 
      <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center text-success">
                   Register Yourself
                </h5>
                <div class="form-group">
                  <label>user</label>
                  <input type="text" class="form-control" name="user_name" required />
                </div>
        
          <div class="form-group">
                  <label>email</label>
                  <input type="email" class="form-control" name="user_email" required />
                </div>

          <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="user_password" required/>
                </div>

          <div class="form-group">
                  <label>Tell About Yourself</label>
                  <textarea class="form-control" name="user_about" required></textarea>      
          </div>
           <div class="container">
              <button class="btn btn-primary">Register</button>
           </div>
              </div>
            </div>
        </div>
      </div>
  </form>
      </div>
    </div>
    </div>
  </div>
 </body>
</html>

<style type="text/css">
  @media screen and (max-width: 800px){
    #wrapper-admin{
      width: 100%;
    background-color:greenyellow ;
    } 
    .container{
    }

    .card{
      margin-left: -70px;
      padding: 4px;
      margin-top: 50px;
    }
    .card .form-group .form-control[type=text] , .form-control[type=email],.form-control[type=password]{
      width: 100%;
      padding: 5px!important;
      height: 50px!important;
    }
    textarea{
      height: 180px!important;
    }
    label{
      color: black;
    }

  }
</style>