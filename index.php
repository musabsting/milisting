
<?php
include "conn.php";
if(isset($_POST['save'])){
    $username =$_POST['username'];
    $txt =$_POST['txt'];

    $stmt =$db->prepare( "INSERT INTO mus(username,	txt	) VALUES(:s,:t)" );
    $stmt->execute(array(
        's' => $username,
        't' => $txt,
    ));
   
}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="style.css">
    <title>storeting</title>
</head>
<body>
   <form  action="index.php" method="post">
  
        <div><input type="text" name="username" placeholder="username"></div>
         <div> 
         <span > <input type="paddword" name="txt"
             placeholder="text" required ></span>
             </div>
   

<div class="save">
    <input type="submit" name="save" value="login">
</div>

</form>
   <h1>our sells from google</h1> 
   <div class="sel">
    

   </div>
   <div class="main">
<main class="one">
 
    <div class="first">
           section of
       <span>
        <img src="speaker.jpg" alt="">
       </span>
       <span>
        <img src="speaker2.jpg" alt="">
       </span>
       
       
    </div>
    <div class="first">
        google speakers
        <span>
            <img src="speak4.jpg" alt="">
           </span>
           <span>
            <img src="speak5.webp" alt="">
           </span>
    </div>
   </main>

<main class="one">
 
    <div class="first">
           section of
       <span>
        <img src="lap.jpg" alt="">
       </span>
       <span>
        <img src="laptop1.jpg" alt="">
       </span>
       
       
    </div>
    <div class="first">
        google laptops
        <span>
            <img src="laptop3.jpg" alt="">
           </span>
           <span>
            <img src="laptop4.jpg" alt="">
           </span>
    </div>
   </main>

    <main class="one">
        <div class="first">
               section of
           <span>
            <img src="gp3.webp" alt="">
           </span>
           <span>
            <img src="gp4.png" alt="">
           </span>
        </div>

        <div class="first">
            google pixels
            <span>
                <img src="gp1.png" alt="">
               </span>
               <span>
                <img src="gp2.jpg" alt="">
               </span>
        </div>
       </main>
    <main class="one">
        <div class="first">
               section of
           <span>
            <img src="a1.jpg" alt="">
           </span>
           <span>
            <img src="a2.jpg" alt="">
           </span>
        </div>

        <div class="first">
            google airbods
            <span>
                <img src="a3.jpg" alt="">
               </span>
               <span>
                <img src="a4.jpg" alt="">
               </span>
        </div>
       </main>
    <main class="one">
        <div class="first">
               section of
           <span>
            <img src="c2.webp" alt="">
           </span>
           <span>
            <img src="c3.jpg" alt="">
           </span>
        </div>

        <div class="first">
            google chargs
            <span>
                <img src="c1.jpg" alt="">
               </span>
               <span>
                <img src="c4.jpg" alt="">
               </span>
        </div>

       </main>
</div>
<div class="con">
    <span>Contact us </span>
    <img src="lo.png" width="40px" height="40px" alt="">
</div>

</body>
</html>