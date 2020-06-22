

<!DOCTYPE html>
<html style="
    background-image: linear-gradient(to right,#F9CA7C,#D19D48);">
<head>
    <title>Contact Us</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="icon" href="images/contactlogo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>
<body style="background-color: #FAD7A0">

        <section id="banner">
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-10">
                <h1 class="h1">
                   <u> CONTACT US</u><small><u>Get in touch</u></small></h1>
                     
            </div>
            <div>
                <img src="images/logo.png" class="img-fluid" style="float: right;">
            </div>
           
        </div>
         
    </div>
</div>
           
<div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L11.4,101.3C22.9,139,46,213,69,229.3C91.4,245,114,203,137,165.3C160,128,183,96,206,69.3C228.6,43,251,21,274,53.3C297.1,85,320,171,343,176C365.7,181,389,107,411,90.7C434.3,75,457,117,480,117.3C502.9,117,526,75,549,85.3C571.4,96,594,160,617,160C640,160,663,96,686,101.3C708.6,107,731,181,754,208C777.1,235,800,213,823,181.3C845.7,149,869,107,891,80C914.3,53,937,43,960,69.3C982.9,96,1006,160,1029,170.7C1051.4,181,1074,139,1097,138.7C1120,139,1143,181,1166,181.3C1188.6,181,1211,139,1234,117.3C1257.1,96,1280,96,1303,101.3C1325.7,107,1349,117,1371,117.3C1394.3,117,1417,107,1429,101.3L1440,96L1440,320L1428.6,320C1417.1,320,1394,320,1371,320C1348.6,320,1326,320,1303,320C1280,320,1257,320,1234,320C1211.4,320,1189,320,1166,320C1142.9,320,1120,320,1097,320C1074.3,320,1051,320,1029,320C1005.7,320,983,320,960,320C937.1,320,914,320,891,320C868.6,320,846,320,823,320C800,320,777,320,754,320C731.4,320,709,320,686,320C662.9,320,640,320,617,320C594.3,320,571,320,549,320C525.7,320,503,320,480,320C457.1,320,434,320,411,320C388.6,320,366,320,343,320C320,320,297,320,274,320C251.4,320,229,320,206,320C182.9,320,160,320,137,320C114.3,320,91,320,69,320C45.7,320,23,320,11,320L0,320Z"></path></svg>
            </div>
</section>
        
        <div class="container">
        
     

    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                <b>Name</b></label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                <b>Email Address</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                <b>Subject</b></label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="CONTENT">RELATED TO CONTENT</option>
                                <option value="BOOK">RELATED TO BOOK</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="body">
                                <b>Message</b></label>
                    <textarea class="form-control" id="body" rows="9" cols="25" placeholder="GIVE YOUR MESSAGE"></textarea>
                </div>
            </div>

                <div class="col-md-12">
                <input type="button"  onclick="sendEmail()" value="SEND MESSAGE" class="btn btn-primary  pull-right">
              </div>
             

              </div>
            </form>
            </div>
        </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
      

<div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Developers</legend>
            <address>
                <strong>Btech(IT and CSC)</strong><br>
                Gautam Buddha University<br>
                Gautam Buddh Nagar,Uttarpradesh<br>
                <abbr title="Phone">
                    Ph:</abbr>
                8734875388
            </address>
            <address>
                <strong>Sachin Tendulkar</strong><br>
                <a href="mailto:#">gbu@gmail.com</a>
            </address>
            </form>
        </div>
     </div>
 </div>

<!--......................................................................footer...................................................................-->
<section id="contact">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L10.9,80C21.8,96,44,128,65,144C87.3,160,109,160,131,149.3C152.7,139,175,117,196,117.3C218.2,117,240,139,262,165.3C283.6,192,305,224,327,213.3C349.1,203,371,149,393,160C414.5,171,436,245,458,240C480,235,502,149,524,112C545.5,75,567,85,589,122.7C610.9,160,633,224,655,245.3C676.4,267,698,245,720,240C741.8,235,764,245,785,218.7C807.3,192,829,128,851,133.3C872.7,139,895,213,916,224C938.2,235,960,181,982,149.3C1003.6,117,1025,107,1047,122.7C1069.1,139,1091,181,1113,192C1134.5,203,1156,181,1178,149.3C1200,117,1222,75,1244,90.7C1265.5,107,1287,181,1309,202.7C1330.9,224,1353,192,1375,186.7C1396.4,181,1418,203,1429,213.3L1440,224L1440,0L1429.1,0C1418.2,0,1396,0,1375,0C1352.7,0,1331,0,1309,0C1287.3,0,1265,0,1244,0C1221.8,0,1200,0,1178,0C1156.4,0,1135,0,1113,0C1090.9,0,1069,0,1047,0C1025.5,0,1004,0,982,0C960,0,938,0,916,0C894.5,0,873,0,851,0C829.1,0,807,0,785,0C763.6,0,742,0,720,0C698.2,0,676,0,655,0C632.7,0,611,0,589,0C567.3,0,545,0,524,0C501.8,0,480,0,458,0C436.4,0,415,0,393,0C370.9,0,349,0,327,0C305.5,0,284,0,262,0C240,0,218,0,196,0C174.5,0,153,0,131,0C109.1,0,87,0,65,0C43.6,0,22,0,11,0L0,0Z"></path></svg>
  <div class="container">
    <div class="well well-sm ">
      <h3 class="head"><strong>We are Here</strong></h3>
    </div>
    
    <div class="row">
      <div class="col-md-7 google-maps">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14035.779151200108!2d77.5267391!3d28.4209228!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c72169fdd7154b0!2sGautam%20Buddha%20University!5e0!3m2!1sen!2sin!4v1591863241992!5m2!1sen!2sin"></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>JUST PING</strong></h4>
          <div class="social-icons">
            <div><a href="#"><img src="images/icons8-twitter-48.png">:  www.twitter.com</a></div>
            <div><a href="#"><img src="images/icons8-linkedin-48.png">:  www.linkedin.com</a></div>
            <div><a href="#"><img src="images/icons8-github-48.png">:  www.github.com</a></div>
            <div><a href="#"><img src="images/icons8-instagram-48.png">:  www.instagram.com</a></div>
            <div><a href="#"><img src="images/icons8-facebook-old-48.png">:  www.facebook.com</a></div>
            <div> <a href="#"><img src="images/icons8-whatsapp-48.png">:  www.whatsapp.com</a></div>
           </div>
      </div>
      
  </div>
</section>



</body>
</html>

