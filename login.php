<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       

        <?php include('header.php'); ?>
        <div id="wrapper-admin"  style="background-image: url('images/bg.jpg'); background-origin: inherit;  height: 450px; background-size: cover;">
            <div class="container">
                <div class="row" >
                    <div class="col-md-offset-4 col-md-4" style="margin-top: -50px;">
                        <form  action="login-user.php" method ="POST" >
                                 <h3 class="heading" style="margin-top:-10px;">Login</h3>
                             
                                <div class="alert alert-danger" role="alert">
                                    Please Login First 
                                </div> 
                            <div class="form-group" >
                                <label>email</label>
                            <input type="email" name="email" class="form-control" placeholder="Provide email"     required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                      <div class="container">
                        <a href="register.php">ALready  registered</a>
                     </div>
                        </form>
                        <!-- /Form  End -->
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
