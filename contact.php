<?php  
          if(isset ($_POST['submit'])){
          $userName= $_POST['name'];
          $userEmail= $_POST['email'];
          $userPhone= $_POST['telephone'];
          $subject= 'Pangea Security בקשה ליצירת קשר';
          $to = "markd@pangea-security.com";

          $body="";

          $body.= "שם: ".$userName."\r\n";
          $body.= "אימייל: ".$userEmail."\r\n";
          $body.= "טלפון: ".$userPhone."\r\n";

          mail($to,$subject,$body);
          }
          
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <title>Pangea Security | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
    <style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
  <body>
 <header style="z-index: 999">
      <div class="container">
        <div id="branding">
          <img src="img/logo.png">
        </div>
        <nav>
          <ul> 
            <li class="current"><a href="contact.php">צור קשר</a></li>
            <li ><a href="e.php">תחומי התמחות</a></li>
            <li ><a href="index.php">ראשי</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
          <h1>שירותי קב"ט מקצועי לחברות וארגונים</h1>
        <h2>ראשי>>צור קשר</h2>     
      </div>
    </section>

     <section id="newsletter" >
      <div class="container" style="text-align: center;">
        <h1 style="float: none">השאירו פרטים וניצור איתכם קשר</h1>
        <form style="float: none;" action="" method= "post">
          <input style="width:500px; padding: 10px; margin-bottom: 10px;" id= "input2" name="name" type="name" placeholder="שם:" required/><br>
          <input style="width:500px;padding: 10px; margin-bottom: 10px;" id= "input2" name="email" type="email" placeholder="אימייל:" required/><br>
          <input style="width:500px;padding: 10px; margin-bottom: 10px;" id= "input2" name="telephone" type="tel" placeholder="מספר טלפון" required/><br>
          <button style="width:500px;padding: 10px; margin-bottom: 10px;direction: rtl" class="button_1" name="submit" type="submit" >שלח פרטים</button>

        </form>
      </div>
    </section>
    <div class="footer" style="height: 150px;background-color: black;t color: white;">
       <div>
             <div style="align-content: center;">
           <div dir="rtl" class="info" style=" float: right">
                 <div style="margin-bottom: 0.5em; margin-right: 2em;">
                 <h8>פרטי התקשרות</h8>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                           <img class="detailsPics" style="float: right ;" src="img/emil.png">
                      </div>
                      <div style="width: 95%; margin-right: 2em;">
                            <h9>markd@pangea-security.com</h9>
                      </div>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                            <img class="detailsPics" style="float: right ;" src="img/telephone.png">
                      </div>
                      <div style="width: 95%;margin-right: 2em;">
                            <h9>054-432-7315</h9>
                      </div>
                 </div>
            </div>
           
           </div>
        </div>
    </div>
      
      <footer>
              <center>
         <div style="background-image: url(../img/backRoundForLogo.jpg);min-height: 70px;">
            <a href="https://wa.me/+9720524017711"target="_blank">
                   <img src="img/myLogo.png">
            </a>
    </div>
    </center>
      </footer>
     <a  class="whats-app" href="https://wa.me/+9720544327315" target="_blank">
       <img src="img/whatssap.png">
    </a>
    <a class="email-icon" href="mailto:markd@pangea-security.com"><img src="img/emailIcon.png"></a>
 
  </body>
</html>