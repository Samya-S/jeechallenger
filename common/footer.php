<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<body>
    


    <footer>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="https://www.facebook.com/SamyaSaha08" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.twitter.com/SamyaSaha08" target="_blank" class="fa fa-twitter"></a>
        <a href="https://www.youtube.com/channel/UCDGNdFdN619aOTVkOht6YvA?sub_confirmation=1" target="_blank" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/SamyaSaha08" target="_blank" class="fa fa-instagram"></a><br>
        Copyright &copy 2020-22 <b><i>Samya Saha</i></b><br>- All Rights Reserved.<br><br>
        <h6>Source code available on Github: <a href="https://github.com/Samya-S/jee-challenger" target="_blank" style="text-decoration: none; isolation: unset;">Click here</a></h6>
        <br>
        <div>
          <h3 style="font-weight: normal; font-family: monospace;"><p id="date&time"></p></h3>
          <script src="https://jeechallenger.herokuapp.com/common/date-time.js"></script>
        </div>
    </footer>



    <style>
        footer {
          text-align: center;
          bottom: 0;
          left: 0;
          right: 0;
          padding: 4%;
          background-color: rgba(212, 212, 212, 0.26);
        }

        /*social-media-buttons*/
        .fa {
            padding: 7px; 
            border-radius: 50%; 
            width: 17px; 
            font-size: 15px; 
            text-align: center; 
            text-decoration: none; 
            margin: 5px 2px; 
            isolation: isolate;
        }

        /* .fa:hover {opacity: 0.7;} */
        .fa-facebook {background: #3b5998;color: white;}
        .fa-facebook:hover {opacity: 0.7;}
        .fa-twitter {background: #55acee;color: white;}
        .fa-twitter:hover {opacity: 0.7;}
        .fa-youtube {background: #bb0000;color: white;}
        .fa-youtube:hover {opacity: 0.7;}
        .fa-instagram {background: #c00271;color: white;}  
        .fa-instagram:hover {opacity: 0.7;}
    </style>






    <!-- temporary message to inform about change in domain  -->
    <div class="alert">
      <span class="closebtn fa fa-times"></span> 
      <!-- <strong>Attention!</strong>  -->
      We have moved the site to <a href="https://jeechallenger.herokuapp.com/" style="text-decoration: none; color: yellow;">jeechallenger.herokuapp.com/</a>. Please bookmark the new site. Thank you!
    </div>

    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function(){ div.style.display = "none"; }, 500);
            }
        }
    </script>

    <style>
        .alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
          position: fixed;
          bottom: 0px;
          width: 100%;
          z-index: 1000;
          opacity: 1;
          transition: opacity 0.5s;
        }

        .closebtn {
          position: fixed;
          /* margin-left: 15px; */
          color: white;
          /* font-weight: bold; */
          float: right;
          right: 10px;
          font-size: 22px;
          line-height: 0px;
          cursor: pointer;
          transition: 0.3s;
        }

        .closebtn:hover {
          color: black;
        }
    </style>

</body>
</html>