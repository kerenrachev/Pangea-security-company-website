<?php  
          if(isset ($_POST['submit'])){
          $userName= $_POST['name'];
          $userEmail= $_POST['emailadress'];
          $userPhone= $_POST['telephone'];
          $massage= $_POST['massage'];
          $subject= 'Pangea Security בקשה ליצירת קשר';
          $to = "keren1997rachev@gmail.com";

          $body="";

          $body.= "שם: ".$userName."\r\n";
          $body.= "email: ".$userEmail."\r\n";
          $body.= "telephone: ".$userPhone."\r\n";
          $body.= "\n\n".$massage."\n";

          mail($to,$subject,$body);
          }
          
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    </head>
  <header>
    <img src="images/logo.png" id="logo">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
     <ul>
       <li><a href="contact.php">צור קשר</a></li>
         <li><a href="ovdanMlai.php">התמחויות שלנו</a></li>
         <li><a href="about.php">אודות</a></li>
         <li><a href="index.php">ראשי</a></li>
        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span>
        </span>
    </label>
   </header>
<body>
<div class="container">
    
    <h1>ראשי >> צור קשר</h1>
        <h2>צור קשר</h2>
    </div><center><h6>צרו איתנו קשר ונחזור אליכם בהקדם </h6></center>
    <div style="min-height: 540px;">
        
        <div class="divContactPangeaSymbol">
            <img src="images/mark.jpg" class="contactPicturePangea" >    
        </div>
        <div class="divContactForm" >
             <form >
		<input name="name" placeholder="שם" class="name" required />
		<input name="emailaddress" placeholder="אימייל" class="email" type="email" required />
        <input name="telephone" placeholder="טלפון" class="name" type="telephone" required />
        <textarea rows="4" cols="50" name="massage" placeholder="השאר הודעתך כאן" class="message" required></textarea>
        <input name="submit" class="btn" type="submit" value="שלח" />
        </form>
            
        </div>
    </div>
       
    
    
    <div class="downDiv">

       <div>
             <div dir="rtl" class="info" style=" float: right">
                 <div style="margin-bottom: 0.5em; margin-right: 2em;">
                 <h8>פרטי התקשרות</h8>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                           <img class="detailsPics" style="float: right ;" src="images/emil.png">
                      </div>
                      <div style="width: 95%; margin-right: 2em;">
                            <h9>markd@pangea-security.com</h9>
                      </div>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                            <img class="detailsPics" style="float: right ;" src="images/telephone.png">
                      </div>
                      <div style="width: 95%;margin-right: 2em;">
                            <h9>054-432-7315</h9>
                      </div>
                 </div>
            </div>
           <div class="infoPic" style=" float: left">
           
           <img id="cameraPic" src="images/camera.png">
           
           </div>
       </div>
    </div>
    
    
    <a  class="whats-app" href="https://wa.me/+9720544327315" target="_blank">
       <img src="images/whatssap.png">
    </a>
     <a class="email-icon" href="mailto:markd@pangea-security.com"><img src="images/emailIcon.png"></a>
    </body>


</html>