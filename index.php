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
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <img src="img/logo.png">
        </div>
        <nav>
          <ul> 
            <li><a href="contact.php">צור קשר</a></li>
            <li><a href="e.php">תחומי התמחות</a></li>
            <li class="current"><a href="index.php">ראשי</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section>
    <section id="showcase">
      <div class="container">
          <h1>שירותי קב"ט מקצועי לחברות וארגונים</h1>
        <h2>ייעוץ בטחוני | פיקוח | בקרה</h2>
            <form action="#newsletter">
    <input class="button_2" type="submit" value="לעוד פרטים" />
</form>
      </div>
    </section>

    <section id="main">
      <div class="container">

        <aside id="sidebar">
          <div class="dark">
            <h1>מי אנחנו?</h1> <br><br>
               <article>
                  <p> חברתינו פנגיאה הינה חברת יעוץ בטחוני פעילה בשוק משנת 2018, אנו בנויים מיוצאי יחידות בילוש ומודיעין, ומערכת הביטחון.
                   הידע המקצועי הניסיון העשיר שצברנו מאפשרים לנו לספק לכל לקוח מענה המותאם בדיוק לצרכיו וליכולותיו. <br>
                   אנו מובילים חברות וארגונים בסקטור הפרטי, בליווי שוטף בתחומי אבטחה פיזית, אבטחת מידע, מתן מענה לפריצות וגניבות בשטח אורבני, תשאול, פוליגרף, ואובדן מלאי.
                   אנו מומחים בתכנון ויישום אסטרטגיות הביטחון בארגון, הכוונה וניהול תוכנית מערכתית לארגון.</p>
               <p></p>
              </article>
          </div>
        </aside>
         <article id="main-col">
          <ul id="services">
            <li>
              <img src="img/boxes_icon.png" >
              <h3>אובדן מלאי</h3>
            </li>
            <li>
                     <img src="img/boxes_icon.png" >
              <h3>הדרכות ירי ולחימה</h3>
            </li>
            <li>
                     <img src="img/boxes_icon.png">
              <h3>שירותי ניהול ביטחון</h3>
            </li>
            <li>
                     <img src="img/boxes_icon.png">
              <h3>אבטחה פיזית</h3>
            </li>
            <li>
                     <img src="img/boxes_icon.png">
              <h3>מוקד רמה א</h3>
            </li>
          </ul>
        </article>
      </div>
    </section>
    <section id="boxes">
        <h1>הלקוחות שלנו </h1>
      <div class="container">
        <button class="box">
          <img src="./img/allTradeGroup.jpg">
        </button>
          <button class="box">
          <img src="./img/better.png">
        </button>
          <button class="box">
          <img src="./img/shorashim.jpg">
        </button>
        <button class="box">
          <img src="./img/tus.png">
        </button>
        <button class="box">
          <img src="./img/pangea1.jpg">
        </button>
      </div>
       
    </section>
      </section>
     <section id="newsletter">
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
