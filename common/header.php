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
            <a href="../home">
              <b>JEE Challenger</b>
            </a>
          </p>
          <nav>
            <div class="menu-toggle">
              <button class="NavCloseButton" onclick="toggleNavClose()">&times;</button>
            </div>
            <ul class="ul-class">
              <li><a href="../home" id="navBtn_Home"><b>Home</b></a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_Materials">Materials<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Phy" href="../materials/physics">Physics PDFs</a></li>
                      <li><a id="navBtn_Chem" href="../materials/chemistry">Chemistry PDFs</a></li>
                      <li><a id="navBtn_Maths" href="../materials/mathematics">Mathematics PDFs</a></li>
                      <li><a id="navBtn_PYQs" href="../materials/chapterwise-solved-pyqs">Chapterwise solved PYQs</a></li>
                      <li><a id="navBtn_More" href="../materials/more-study-materials">More study materials</a></li>
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_OfficialLinks">Officials links<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Main" href="../official-links/jee-main">JEE Main</a></li>
                      <li><a id="navBtn_Adv" href="../official-links/jee-advanced">JEE Advanced</a></li>                
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_MorePlatforms">More platforms<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Unacademy" href="../more-platforms/unacademy">Unacademy</a></li>
                      <li><a id="navBtn_ApniKaksha" href="../more-platforms/apnikaksha">Apni Kaksha</a></li>
                      <li><a id="navBtn_PW" href="../more-platforms/physicswallah">Physics Wallah</a></li>
                    </div>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          
    
        </header>


</body>
</html>