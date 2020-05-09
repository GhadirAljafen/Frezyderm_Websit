<html  dir="rtl" lang="ar">
    <head>
        <link rel = "stylesheet" href ="styleSheet.css">
            <!-- Font Awesome Icon Library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        img{
            padding-right: 470px;}
        .icon-bar {
            padding-top: 250px;}
    </style>
    
    <body>
         <img src="fullsizeoutput_1999.jpeg" width="65%" height="30%" alt="logo">
        
        <?php
            $x =$_POST["Name"];
            $_POST["Email"];
            $_POST["Gender"];
            $_POST ["Comment"];
        if ($_POST["Gender"]=="male"){
            echo ( "<p style ='text-align:center; font-size:25px; color:gray;'> عزيزي "." $x ".",  شكراَ لزيارتك رأيك في عين الإعتبار.  </p>" );}
        elseif  ($_POST["Gender"]=="famale"){
            echo ( "<p style ='text-align:center; font-size:25px; color:gray;'> عزيزتي "." $x ".",  شكراً لزيارتكِ رأيكِ في عين الإعتبار.  </p>" );}
        ?>
               <!-- contact -->
    <div class="icon-bar">
      <a href="https://twitter.com/dermacare3"><i class="fa fa-twitter"></i></a> 
      <a href="https://www.instagram.com/frezyderm_ksa/"><i class="fa fa-instagram"></i></a> 
      <a href="https://www.facebook.com/frezyderm/"><i class="fa fa-facebook"></i></a>
      <a href="http://www.frezyderm.com/"><i class="fa fa-globe"></i></a> 
      <a href="mailto:dermacare3@gmail.com"><i class="fa fa-envelope"></i> </a> 
    </div> <!--End Of Contact-->

      <!-- footer --> 
  <div class = "footer" >
     <h6> copyright reseved &copy; 2018 </h6>
  </div> <!--End Of Footer-->

    </body> 
</html>