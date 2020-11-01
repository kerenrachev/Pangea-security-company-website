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
            <li><a href="contact.php">צור קשר</a></li>
            <li class="current"><a href="e.php">תחומי התמחות</a></li>
            <li ><a href="index.php">ראשי</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
          <h1>שירותי קב"ט מקצועי לחברות וארגונים</h1>
        <h2>ראשי>>התמחויות</h2>
          <form action="#newsletter">
    <input class="button_1" type="submit" value="לעוד פרטים.." />
</form>
            
      </div>
    </section>

    <section id="main" style="overflow-x: hidden">
      <div class="container">
          <div class="dark"><center>
            <h1>התמחויות שלנו</h1> </center><br><br>
               <article>
                   <h1>ניהול ביטחון</h1>
                   <p>כחלק מהפעילות מספקת החברה מנהל ביטחון (מנב"ט) עם הסמכה של משטרת ישראל בעל ניסיון בתחום אשר מרכז את הפעילות בהוות הבטחוני, כמו כן חברה מספקת גם קב"טים לטובת פיקוח ובקרה, החברה מייעדת שירותיה למפעלים, מרכזים לוגיסטיים, רשתות קמעונאיות, חברות וארגונים בכל הארץ.</p>
                   
                   <h1>מוקד רואה</h1>
                   <p>מוקד שליטה ובקרה ארצית לעסקים, מוקד רואה, שרותי סיור, תפעול תקלות, תחקור מצלמות. מוקד צופה 24\7 , ניהול אירוע מרחוק.</p>
                   
                   <h1>הדרכות ירי</h1>
                   <p>בסיס, מתקדם, עקרונות קליעה, ירי בתוך ריכוז קהל, ירי ביד אחת, מעצורים.</p>

                   <h1>מניעת אובדן עסקי</h1>
                   <p>בקרת מערך ניהול מלאי, מודעות לתחום, הדרכות מנהלים \ עובדים, בקרות גלויות וסמויות, תשאולים, טיפול ברמת האובדן, בניית חדר בקרה פנימי, ניהול קופות.</p>
              </article>
          </div>
          
      </div>
<div class="w3-content w3-display-container" style="max-width:1000px; z-index: 0;margin-bottom: 20px">
      <img class="mySlides" src="img/showcaseMark.jpg" style="width:100%">
  <img class="mySlides" src="img/showcasemark2.jpg" style="width:100%">
  <img class="mySlides" src="img/showcasemark3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

    </section>
     
     <section id="newsletter" >
      <div class="container">
        <h1>השאירו פרטים וניצור איתכם קשר</h1>
        <form action="" method= "post">
          <input id= "input" name="name" type="name" placeholder="שם:" required/>
          <input id= "input" name="email" type="email" placeholder="אימייל:" required/>
          <input id= "input" name="telephone" type="tel" placeholder="מספר טלפון" required/>
          <button class="button_1" name="submit" type="submit" >שלח פרטים</button>

        </form>
      </div>
    </section>
    <div class="footer">
       <div>
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
      <p>Rachev Web Deisgn, Copyright &copy; 2020</p>
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
       

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
  </body>
</html>