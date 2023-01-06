<?php include("db.php"); 
    $sql = mysqli_query($con,"SELECT * FROM category");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    </head>
    </head>
<body>
    
       <nav>
        <div class="logo">
            <img src="images/logo.png" alt="Logo Image"/>
             <b style=" font-size: 22px;">News Portal</b>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        <ul class="nav-links">
         <div class="cat_details">
             <?php
             $i=0; 
                $category = mysqli_query($con,"SELECT * from category");
                while($cat = mysqli_fetch_assoc($category)){
                        $i++;
                       if($i == 6){break;} 
                ?>
                    <a>
                      <li id="items">
                       <?php echo $cat['category_title'] ?></li></a>  
       <?php
        }  
        ?>
    </div>     
               <?php 
               session_start();
                if(isset($_SESSION['user'])){
                    $user = $_SESSION['user'];
                 ?>
                 
                    <div id="profile">
                         <img style="width:15vh;" class="rounded-circle" src="images/users/<?php echo $user['image']; ?>" alt="Logo Image"/>
              </div>
               <div id="ud">
                    <a>
                      <li id="items">
                       <?php echo $user['email'] ?></li>
                   </a>
                   <a href="logout.php">
                      <li id="items">Log out </li>
                   </a>
           </div>
                      <?php   
                }
                else{
                ?>
                    <a href="login.php">
                      <li id="items">
                       <?php echo " Login"; ?></li></a>
             
<?php
                }
            ?>
            
         </div>
            </ul>
    </nav>
    </body>
</html>
<style type="text/css">
 
 *{
    margin: 0;
    padding: 0;
    color: #f2f5f7;
    font-family: sans-serif;
    letter-spacing: 1px;
    font-weight: 300;
}
body{
    overflow-x: hidden;
}
#udetails{
    overflow: scroll;
}
#profile{
    visibility: hidden;
}
#ud{
    width: 30%;
    margin-left: 690px;
    margin-top: -172px;
    font-style: oblique;
}#ud li{
    border: 2px solid skyblue;
    border-radius: 12px;
}
nav{

    height: 6rem;
    width: 100vw;
    background-color: #131418;
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    position: fixed;
    z-index: 1;

}

/*Styling logo*/
.logo{
    padding:1vh 1vw;
    text-align: center;
}
.logo img {
    height: 5rem;
    width: 5rem;
}

/*Styling Links*/
.nav-links{
    display: inline-block;
    list-style: none; 
    width: 88vw;
    padding: 0 0.7vw;
    justify-content: space-evenly;
    align-items: center;
    text-transform: uppercase;
    width: 80%;
}
.nav-links li a{
  

}
.nav-links li a:hover {
    color: #61DAFB;
}
.nav-links li {
    display: inline-block;
    position: relative;
      text-decoration: none;
    margin: 5px 1px;
    padding:8px;
}
.nav-links li a::before {
    display: block;
    height: 3px;
    width: 0%;
    background-color: #61DAFB;
    position: absolute;
    transition: all ease-in-out 250ms;
    margin: 0 0 0 10%;
}
.nav-links li a:hover::before{
    width: 80%;
}

/*Styling Buttons*/
.login-button{
    background-color: transparent;
    border: 1.5px solid #f2f5f7;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    margin-left: 2vw;
    font-size: 1rem;
    cursor: pointer;

}
.login-button:hover {
    color: #131418;
    background-color: #f2f5f7;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}
.join-button{
    color: #131418;
    background-color: #61DAFB;
    border: 1.5px solid #61DAFB;
    border-radius: 2em;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    cursor: pointer;
}
.join-button:hover {
    color: #f2f5f7;
    background-color: transparent;
    border:1.5px solid #f2f5f7;
    transition: all ease-in-out 350ms;
}

/*Styling Hamburger Icon*/
.hamburger div{
    width: 30px;
    height:3px;
    background: #f2f5f7;
    margin: 5px;
    transition: all 0.3s ease;
}
.hamburger{
    display: none;
}
#udetails{
    display: none;
}
/*Stying for small screens*/
@media screen and (max-width: 800px){
    #udetails{
        display: inline-block;
    }
   
    nav{
        position: fixed;
        z-index: 3;
    }
    #items{
        color: green;
    }

    #ud{
        margin-top: -500px;
        width: 70%;
        margin-left: 110px;
    }
     #profile{
        visibility: visible;
    }
    #profile .rounded-circle{
        margin-left: 0px;
        margin-top: -850px;
    }
    
    .ud li a{
            margin-top: 0px 0px;
    } 
    

    .cat_details{
        margin-top: 200px;
        width: 100%;

    }
    .hamburger{
        display:block;
        position: absolute;
        cursor: pointer;
        right: 5%;
        top: 50%;
        transform: translate(-5%, -50%);
        z-index: 1    }


    .nav-links{
        position: fixed;
        background: black; 
        height:100vh;
        width: 98%;
        flex-direction: column;
        clip-path: circle(50px at 90% -20%);
        -webkit-clip-path: circle(50px at 90% -10%);
        transition: all 1s ease-out;
        pointer-events: none;
        clip-path: circle(50px at 90% -20%);
        -webkit-clip-path: circle(50px at 90% -10%);

    }

    .nav-links.open{
        clip-path: circle(1000px at 90% -10%);
        -webkit-clip-path: circle(1000px at 90% -10%);
        pointer-events: all;
    }
    
    .nav-links li {
       padding: 12px!important;
       width: 100%!important;
       margin: 12px 21px;


    } 
    nav-links li a{
      align-items: center;

    }

    .nav-links: hover{
       color:red!important;
    }
    .nav-links li:nth-child(1){
        transition: all 0.5s ease 0.2s;
    }
    .nav-links li:nth-child(2){
        transition: all 0.5s ease 0.4s;
    }
    .nav-links li:nth-child(3){
        transition: all 0.5s ease 0.6s;
    }
    .nav-links li:nth-child(4){
        transition: all 0.5s ease 0.7s;
    }
    .nav-links li:nth-child(5){
        transition: all 0.5s ease 0.8s;
    }
    .nav-links li:nth-child(6){
        transition: all 0.5s ease 0.9s;
        margin: 0;
    }
    .nav-links li:nth-child(7){
        transition: all 0.5s ease 1s;
        margin: 0;
    }
    li.fade{
        opacity: 1.1;
    
}
/*Animating Hamburger Icon on Click*/
.toggle .line1{
    transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
    transition: all 0.7s ease;
    width:0;
}
.toggle .line3{
    transform: rotate(45deg) translate(-5px,-6px);
}
</style>
<script type="text/javascript">
    const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li a");

hamburger.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");

    links.forEach(link => {
        link.classList.toggle("fade");
    });
    //Hamburger Animation
    hamburger.classList.toggle("toggle");
});
</script>