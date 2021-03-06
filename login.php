
<?php

session_start();
// header.php
include ('header.php');
include "helper.php";
?>

<?php
    $user = array();
    require ('mysqli_connect.php');

    if(isset($_SESSION['userID'])){
        $user = get_user_info($con, $_SESSION['userID']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('login-process.php');
    }
?>

<!-- registration area -->
<section id="login-form" style="background-image: url('images/lib.jpg');">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5 color">
                <h1 style="color:cyan" class="login-title "><b>LOGIN</b></h1>
                <p style="color:#fff" class="p-1 m-0 font-ubuntu ">Login and enjoy learining EBooks</p>
                <span style="color:yellow" class="font-ubuntu ">Create a new <a href="register.php">account</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="<?php echo isset($user['profileImage']) ? $user['profileImage'] : './images/profile/human.png' ; ?>" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="password*">
                        </div>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn btn-warning rounded-pill px-5 ">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
<!-- #registration area -->


<?php
// footer.php
include ('footer.php');
?>