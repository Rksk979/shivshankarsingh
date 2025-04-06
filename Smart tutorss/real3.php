<?php
include(db.php);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="real3.css">
    <nav>
        <div class="nav">
        <div class="logo"><img src="remove.png" height="80px" width="80px" alt=""></div>
       <ul>
        <li><a href="real.htm">HOME</a></li>
        <li><li><select name="link" id="How it Works" onchange="window.location.href=this.value;">
            <option value="TUTORS">TUTORS</option><option value="registerastutor">BE  A TUTOR</option><option value="registerasstudent.htm">FIND A TUTOR</option></select></li></a></li></li>
        <li>
            <select name="LANGUAGE" id="LANGUAGE">
               <option value="LANGUAGE">HINDI</option><option value="LANGUAGE">ENGLISH</option></select></li>
        <li>
            
            <select name="" id="more">
                <option value="MORE">MORE</option>
                <option value="MORE">REGISTER</option>
                <option value="MORE">LOGIN</option>
                <option value="MORE">NEED HELP</option>
                <option value="MORE">CALL US</option>
                <option value="MORE">FAQs</option>
            </select>
        </li>
        <li><a href="real3.htm" ><p class="login1">LOGIN</p></a></li>
        <li><a href="signup.htm" ><p class="signup1">SIGNUP</p></a></li>
       </ul>
        
        </div>
    </nav>
</head>

<body>

    <div class="loginpage">

    <DIV class="content">
        <P id="content2">Login now</P>
        <div class="div1">
           
            id  <i class="fa-solid fa-id-card"></i><input type="text" placeholder="ID/MAIL/NUM" id="input1">
             
        </div>
        <div class="content3">
         <div class="div2">
            password<i class="fa-solid fa-lock"></i> <input type="text" placeholder="PASSWORD" id="input1"></div>
    
            <div class="content4" > <a href="main.htm"><input type="submit" value="Signin" id="submit"></a>
                <div class="pa"><input type="submit" value="Forgot password ?" id="for"></div></div>
                <p id="p2">By signing up you are with our terms and conditions</p>
            <div class="content5">don't have account?  <div  > <a href="project3.htm" class="signu">Sign Up</a></div> </div>
        </div>
    </div>
</body>
<footer>
    <div class="footer1">
    <p class="FOOTERP1">
        EXPERIENCE IS THE BEST TEACHER ,BUT THE TUITION IS HIGH. <BR>
            AND WE ARE PROVIDING YOU THE HIGH  AT YOUR OWN LOCATION <BR>
                AS e-TUITION AS WELL AS HOME TUITION.
    </p>
   <div class="k"> <a href="" class="FOOTERP2">GET A FREE DEMO NOW</a></div>
    </div>
    <div class="footer2">
        <div class="footerlogo">
        <img src="remove.png" height="120px" width="120px" alt="">
    <div class="logoname">
        <p class="FOOTERNAME">SMART <P class="FOOTERNAME2" >STUDY</P></p> 
    </div>    
        </div>
        <div class="footerabout">
           <p class="service1">service </p>
       <p> <a href="" class="service2">Online Tutoring</a></p>
      <p>  <a href="" class="service3">Home Tutoring</a></p>
        </div>
        <div class="footerlink">
           <p class="footercontactmain">Contact</p>
           <p><a href="" class="footerhome">Home</a></p> 
           <p> <a href="" class="footerabout1">About</a></p>
           <p><a href="" class="footercontact">Contact</a></p>
           <p><a href="" class="footerfaq">faQ</a></p> 
        </div>
        <div class="icon">
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://web.whatsapp.com/"><i class="fa-brands fa-square-whatsapp"></i></a>
        <a href="https://x.com/?lang=en"><i class="fa-brands fa-square-twitter"></i></a>
        <a href="https://www.youtube.com/"><i class="fa-brands fa-square-youtube"></i></a>
        </div>
    </div>
</footer>
</html>