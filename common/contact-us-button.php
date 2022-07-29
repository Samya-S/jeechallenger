<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<body>


    <button class="contact-us-float" onclick="openContactForm()">
        <i class="fa fa-phone" id="contact-button-icon"></i>
    </button>
        
    <div id="myContactForm" class="ContactForm">
        <iframe src="https://jeechallenger.herokuapp.com/php/iframe.php?url=https://jeechallenger.godaddysites.com/contact-us" frameborder="0"></iframe>
    </div> 



    <script>
        //open contact form

        function openContactForm() {
          var ContactFormID = document.getElementById("myContactForm");
          if(ContactFormID.style.display == "block"){       //contact form displayed
            ContactFormID.style.display = "none";
            document.getElementById("contact-button-icon").className = "fa fa-phone";
          }
          else{                                             //contact form hidden
            ContactFormID.style.display = "block";
            document.getElementById("contact-button-icon").className = "fa fa-times";
          }
        }

        window.onclick = function(event) {
          if (event.target == ContactFormID) {
            ContactFormID.style.display = "none";
          }
        }
    </script>


    <style>
        .contact-us-float{
            position: fixed;
            z-index: 900;
            width:50px;
            height:50px;
            bottom:40px;
            left:40px;
            background-color:rgb(255, 255, 255);
            color:rgb(0, 0, 0);
            border-radius:50px;
            text-align:center;
            /* font-size: 25px; */
            box-shadow: 2px 2px 3px #999;
        }
        .contact-us-float i{
            font-size: 25px;
        }
        .ContactForm{
            display: none; 
            z-index: 800;
            width:inherit;
            /* max-width: fit-content; */
            height:inherit;
            /* max-height: fit-content; */            
        }
        @media screen and (min-width: 600px) and (min-height: 700px){
            .ContactForm{
                position: fixed;
                bottom:90px;
                left:40px;
            }
            .ContactForm iframe{
                width: 400px;
                height: 700px;
                border-radius: 20px;
            }
        }
        @media screen and (not((min-width: 600px) and (min-height: 700px))){
        /* @media screen (max-width: 600px) , (max-height: 700px){ , = or */
            .ContactForm{
                position: fixed;
                top:0px;
                bottom:0px;
                left:0px;
                right: 0px;
            }
            .ContactForm iframe{
                width: 100vw;
                height: 100vh;
                /* border-radius: 20px; */
            }
        }
    </style>


</body>
</html>