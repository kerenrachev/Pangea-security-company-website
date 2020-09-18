
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
        
        <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    </head>

<body>
   <header>
    <img src="images/logo.png" id="logo">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
     <ul>
         <li><a href="contact.php">צור קשר</a></li>
         <li><a href="ovdanMlai.php">תחומי התמחות</a></li>
         <li><a href="about.php">אודות</a></li>
         <li><a href="index.php">ראשי</a></li>
        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span>
        </span>
    </label>
   </header>
     <div class="container">
        
        <h1>ראשי >> אודותינו</h1>
        <h2>אודותינו</h2>
    </div> 

      <div dir="rtl"  class= "mainContainer">
          <div>
           <div dir="rtl" class="infoAbout" width="100%">
                 <div style="margin-bottom: 0.5em; margin-right: 2em;">
                 <h6>אודות</h6>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                           <img class="detailsPics" style="float: right ;" src="images/v.jpg">
                      </div>
                      <div style="width: 95%; margin-right: 1em;">
                            <h10>חברתינו פנגיאה  הינה חברת יעוץ בטחוני פעילה בשוק משנת 2018,אנו בנויים מיוצאי יחידות בילוש ומודיעין, ומערכת  הביטחון.</h10>
                      </div>
                 </div>
                 <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                            <img class="detailsPics" style="float: right ;" src="images/v.jpg">
                      </div>
                      <div style="width: 95%;margin-right: 1em;">
                            <h10>הידע המקצועי הניסיון העשיר שצברנו מאפשרים לנו לספק לכל לקוח מענה המותאם בדיוק לצרכיו וליכולותיו.</h10>
                      </div>
                 </div>
                <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                            <img class="detailsPics" style="float: right ;" src="images/v.jpg">
                      </div>
                      <div style="width: 95%;margin-right: 1em;">
                            <h10>אנו מובילים חברות וארגונים בסקטור הפרטי,  בליווי שוטף בתחומי אבטחה פיזית, אבטחת מידע, מתן מענה לפריצות וגניבות בשטח אורבני, תשאול, פוליגרף, אובדן מלאי. </h10>
                      </div>
                 </div>
               <div style="margin-bottom: 1em; width: 100%">
                      <div style="width: 5%">
                            <img class="detailsPics" style="float: right ;" src="images/v.jpg">
                      </div>
                      <div style="width: 95%;margin-right: 3em;">
                            <h10>אנו מומחים בתכנון ויישום אסטרטגיות הביטחון בארגון, הכוונה וניהול תוכנית מערכתית לארגון.</h10>
                      </div>
                 </div>
              </div></div>
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
    <center>
         <div style="background-image: url(../images/backRoundForLogo.jpg);min-height: 70px;">
            <a href="https://wa.me/+9720524017711"target="_blank">
                   <img src="images/myLogo.png">
            </a>
    </div>
    </center>
    
    <a  class="whats-app" href="https://wa.me/+9720544327315" target="_blank">
       <img src="images/whatssap.png">
    </a>
     <a class="email-icon" href="mailto:markd@pangea-security.com"><img src="images/emailIcon.png"></a>
    </body>


</html>
<script>
   function read_more_less()
    {
       var dots= document.getElementById ('dots');
        var moretext= document.getElementById ('more');
        var mybtn= document.getElementById ('btn');
        
        if(dots.style.display==='none'){
            dots.style.display='inline';
            moretext.style.display='none';
            mybtn.innerHTML="Read more";
        }
        else{
            dots.style.display='none';
            moretext.style.display='inline';
            mybtn.innerHTML="Read Less";
        };
    }


</script>