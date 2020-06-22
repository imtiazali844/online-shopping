<?php
session_start();
$conn=mysqli_connect("localhost","root","","adminpanel");

      

            if (isset($_POST['user_login_btn']))
        {
               $user_email = $_POST['user_email'];
         $user_password = $_POST['user_password'];
                $query="SELECT * FROM register WHERE email = '$user_email' AND password = '$user_password'";
               $result_query = mysqli_query($conn ,$query);

               $usertypes=mysqli_fetch_array($result_query);

                if($result_query){
                if($usertypes['usertype'] == "user")
                {
                    $_SESSION['username']=$user_email;
                  header("location:index.php");
                     //echo $_SESSION['username'];
                }
               else
               {
                 $_SESSION['status']="Your email/password is wrong";
                    header("location:user_login.php");
            echo '<h1>'."your email/password is wrong".'</h1>';
               }
       }
      }    


?>
<?php
    
    
    include("structure-start-of-index.php");
    include("preloader.php");
    include("left_side_header.php");
    include("middle_header.php");
    include("right_side_header.php");
    include("navigation.php");
    
    include("first-slider-of-index.php");
    include("top-rated-product.php");
    include("best-sale-product.php");
    include("weekly-trand-product.php");
    include("newslatter-area.php");
    include("footer-area.php");
    include("structure-end-of-index.php");
    
    ?>

