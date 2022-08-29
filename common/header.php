<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<body>
    


        <header id="navbar">
          <div class="menu-toggle">
            <button class="NavOpenButton" onclick="toggleNavOpen()"><i class="fa fa-bars NavOpenButton" aria-hidden="true"></i></button>
          </div>
          <p>
            <a href="https://jeechallenger.herokuapp.com/">
              <b>JEE Challenger</b>
            </a>
          </p>
          <nav>
            <div class="menu-toggle">
              <button class="NavCloseButton" onclick="toggleNavClose()">&times;</button>
            </div>
            <ul class="ul-class">
              <li><a href="https://jeechallenger.herokuapp.com/" id="navBtn_Home"><b>Home</b></a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_Materials">Materials<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Phy" href="https://jeechallenger.herokuapp.com/materials/physics">Physics PDFs</a></li>
                      <li><a id="navBtn_Chem" href="https://jeechallenger.herokuapp.com/materials/chemistry">Chemistry PDFs</a></li>
                      <li><a id="navBtn_Maths" href="https://jeechallenger.herokuapp.com/materials/mathematics">Mathematics PDFs</a></li>
                      <li><a id="navBtn_PYQs" href="https://jeechallenger.herokuapp.com/materials/chapterwise-solved-pyqs">Chapterwise solved PYQs</a></li>
                      <li><a id="navBtn_More" href="https://jeechallenger.herokuapp.com/materials/more-study-materials">More study materials</a></li>
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_OfficialLinks">Officials links<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Main" href="https://jeechallenger.herokuapp.com/official-links/jee-main">JEE Main</a></li>
                      <li><a id="navBtn_Adv" href="https://jeechallenger.herokuapp.com/official-links/jee-advanced">JEE Advanced</a></li>                
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_MorePlatforms">More platforms<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Unacademy" href="https://jeechallenger.herokuapp.com/more-platforms/unacademy">Unacademy</a></li>
                      <li><a id="navBtn_ApniKaksha" href="https://jeechallenger.herokuapp.com/more-platforms/apnikaksha">Apni Kaksha</a></li>
                      <li><a id="navBtn_PW" href="https://jeechallenger.herokuapp.com/more-platforms/physicswallah">Physics Wallah</a></li>
                    </div>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          
    
        </header>




        <style>
          header{
              background: transparent;
              background-color: rgba(10, 10, 10, 0.8);
              font-size: 80%;
              position:fixed;
              z-index: 8;
              left: 0; top: 0;
              width: 100%;
              padding: 0 80px;
              box-sizing: border-box;
              height: 100px;
              transition: top 0.3s;
          }
          header p a{
              color: white;
              text-decoration: none;
          }
          nav{
              /* font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; */
              font-weight:normal;
              font-size: 150%;
          }
          nav a{
              text-decoration: none;
              color: whitesmoke;
              padding: 1%;
              text-align: center;
          }
          nav a:hover,nav a:active{
              color: rgb(251, 0, 0);
          }
          header nav ul li a:hover,
          header nav ul li a.active,
          .dropdown:hover, .dropdown .dropbtn:hover, .dropdown .dropbtn.active{
              color: rgb(243, 110, 110);
              /* background-color: rgba(255, 255, 255, 0.548); */
          }
          .dropdown {
              float: inherit;
              overflow: hidden;
          }
          .dropdown .dropbtn {
              cursor: pointer;
              font-size: inherit; 
              margin-top: 35.8px; 
              border: none;
              outline: none;
              color: inherit;
              padding: 0px;
              background-color: inherit;
              font-family: inherit;
              color: whitesmoke;
          }
          .rotate{
              transition: 0.30s;
              -webkit-transition: 0.30s;
              -moz-transition: 0.30s;
              -ms-transition: 0.30s;
              -o-transition: 0.30s;
          }
          .dropbtn:hover .rotate{
              transition: 0.30s;
              -webkit-transition: 0.30s;
              -moz-transition: 0.30s;
              -ms-transition: 0.30s;
              -o-transition: 0.30s;
              -webkit-transform: rotate(180deg);
              -moz-transform: rotate(180deg);
              -o-transform: rotate(180deg);
              -ms-transform: rotate(180deg);
              transform: rotate(180deg);
          }
          .dropdown-content{
              display: none;
              position: absolute;
              background-color: rgb(10, 10, 10, 0.8);
              z-index: 8;
              /* border-top-right-radius: 20px; */
              border-bottom-right-radius: 20px;
              /* border-top-left-radius: 20px; */
              border-bottom-left-radius: 20px;
          }
          .dropdown-content li a{
              float: none;
              color: whitesmoke;
              text-decoration: none;
              display: block;
              text-align: left;
          }
          .dropdown:hover .dropdown-content {
              display: block;
          }
          @media screen and (min-width: 1140px){
            header p{
                font-size: 250%;
                height: 50px;
                line-height: 40px;
                float: left;
                padding-left: 5%;
            }
            nav{
                /* font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
                float: right;
            }
            nav ul{
                margin: 0;
                padding: 0;
                display: flex;
            }
            nav ul li{
                list-style: none;
            }
            nav ul li a{
                /* height: 50px; dropdown individual heights*/ 
                line-height: 108px;
                padding: 0 20px;
                text-decoration: none;
                display: block;
            }  
            nav .dropdown-content li a{
                line-height: 50px;
            }
            .menu-toggle{
                display: none;
            }
            .dropdown .dropbtn {
                padding: 0px 13px 20.5px;
            }
          }
          @media screen and (max-width: 1140px){
            header{text-align: center;}
            header p{
                font-size: 250%; 
                float: center;
            }
            .menu-toggle{
                cursor: pointer;
                display: block;
                float: left;     
            }
            .nav--open{
                left: 0;
                opacity: 1;
            }
            .NavOpenButton{
                background: none;
                font-size: 20px;
                margin-top: 0px;
                color: whitesmoke;
            }
            .NavOpenButton:hover{
                color:rgb(251, 0, 0);
            }
            .NavCloseButton{
                background: none;
                width: 100%;
                font-size: 50px;
                margin-left: 90%;
                color: whitesmoke;
            }
            .NavCloseButton:hover{
                color: rgb(251, 0, 0);
            }
            header nav{
                position: absolute;
                width: 100%;
                left: -100%;
                top: 0;
                padding-top: 5%;        
                height: calc(150vh - 50px);
                background: rgb(34, 34, 34);
                transition: 0.4s;
            }
            header nav .active{
                left: 0;
            }
            header nav ul{
                display: block;
                text-align: left;
                /* padding-top: 35px; */
            }
            .ul-class{
                padding-top: 35px;
            }
            header nav ul li{
                list-style: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }    
            header nav ul li a{
                font-size: 120%;
                padding: 0 20px;
                line-height: 52px;        
            }
            .dropdown .dropbtn {
                margin-top: 0;
                padding-left: 20px;
                font-size: 22px;
            }            
          }  
          @media screen and (min-width: 680px){
            .NavOpenButton{
                font-size: 20px;
                margin-top: 30px;
            }
          }
          @media screen and (max-width: 680px){
            header p{ 
                font-size: 180%; 
                line-height: 55px;
                float: center;
            }
            .NavOpenButton{
                margin-left: -200%;
                margin-top: 30px;
            }
            .centered{
                font-size: 110%;
                /* top: 70%; left: 50%; transform: translate(-50%, -70%);  */
            }
          }
          @media screen and (max-width: 472px){
            header{
                height: 80px;
            }
            header p{
                line-height: 40px;
            }
            .NavOpenButton{
                margin-left: -200%;
                margin-top: 21px;
            }            
          }
          @media screen and (max-width: 361px){
            header p{ 
                font-size: 160%; 
                float: center;
            }
            .NavOpenButton{
                font-size: 150%;
                margin-left:-220%;
                margin-top: 20px;
            }
          }
          @media screen and (max-width: 346px){
            header p{ 
                font-size: 150%; 
                line-height: 50px;
                float: center;
            }
            .NavOpenButton{
                font-size: 80%;
                margin-left:-220%;
                margin-top: 28px;
            }
          }
          @media screen and (max-width: 337px){
            header{
                height: 60px;
            }
            header p{ 
                font-size: 110%; 
                float: center;
                line-height: 35px;
            }
            .NavOpenButton{
                font-size: 60%;
                margin-left:-220%;
                margin-top: 15px;
            }            
          }
        </style>



</body>
</html>