<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="google-site-verification" content="eJQ_FkMeExR2nx8-heo_SbYFUYcrIijnIqdyCNARH6k" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F0JDZE219J"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-F0JDZE219J');
    </script>

    <title>JEE Challenger</title>
    <link rel="icon" href="images/jcicon.jpg" type="image/gif">
    <script type="text/javascript" src="common/common.js"></script>
</head>

<body style="text-align: center;" oncontextmenu="return false;">

  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
  <script type="text/javascript" src="common/dark-mode.js"></script>

  <div id="Home">

    <div style="position: relative; text-align: center; color: white;">
        <div class="welcomeimg"></div>
        <!-- <img src="images/jc-coverbg.jpg" alt="" class="homecover" style="box-sizing: border-box;"> -->
        <!-- <img src="images/jc-coverbg-mobile.jpg" alt="" class="homecover-mobile" style="box-sizing: border-box;"> -->



        <header id="navbar">
          <div class="menu-toggle">
            <button class="NavOpenButton" onclick="toggleNavOpen()"><i class="fa fa-bars NavOpenButton" aria-hidden="true"></i></button>
          </div>
          <p>
            <a href="#">
              <b>JEE Challenger</b>
            </a>
          </p>
          <nav>
            <div class="menu-toggle">
              <button class="NavCloseButton" onclick="toggleNavClose()">&times;</button>
            </div>
            <ul class="ul-class">
              <li><a href="#" id="navBtn_Home"><b>Home</b></a></li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_Materials">Materials<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Phy" href="materials/physics">Physics PDFs</a></li>
                      <li><a id="navBtn_Chem" href="materials/chemistry">Chemistry PDFs</a></li>
                      <li><a id="navBtn_Maths" href="materials/mathematics">Mathematics PDFs</a></li>
                      <li><a id="navBtn_PYQs" href="materials/chapterwise-solved-pyqs">Chapterwise solved PYQs</a></li>
                      <li><a id="navBtn_More" href="materials/more-study-materials">More study materials</a></li>
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_OfficialLinks">Officials links<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Main" href="official-links/jee-main">JEE Main</a></li>
                      <li><a id="navBtn_Adv" href="official-links/jee-advanced">JEE Advanced</a></li>                
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <div class="dropdown">
                  <button class="dropbtn" id="navBtn_MorePlatforms">More platforms<i class="rotate fa fa-caret-down"></i></button>
                  <ul>
                    <div class="dropdown-content">
                      <li><a id="navBtn_Unacademy" href="more-platforms/unacademy">Unacademy</a></li>
                      <li><a id="navBtn_ApniKaksha" href="more-platforms/apnikaksha">Apni Kaksha</a></li>
                      <li><a id="navBtn_PW" href="more-platforms/physicswallah">Physics Wallah</a></li>
                    </div>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          
    
        </header>
        
        <script>
          document.getElementById("navBtn_Home").className += " active";
        </script>




      <link rel="stylesheet" href="home-animation.css">
      <div class="welcomepc">
        <div class="centered">
          <p>
            <div id="start-line">
              <h1>Tools To Help You Succeed</h1>
            </div>
            <!-- <a href="#" target="blank"> -->
            <!-- <a href="#"> -->
              <h4 style="font-weight: normal;">
                <div id="copy">&copy</div>
                <div id="name">
                  <span>Samya Saha</span>
                </div>
              </h4>
            <!-- </a> -->
          </p>
        </div>
        <div class="welcomeimgpc">
          <img src="images/home.jpg" alt="" srcset="" style="width: 600px;">
        </div>
      </div>
    </div>



    <?php include("./common/modal.html"); ?>




    <div style="background-color: rgba(212, 212, 212, 0.26); background-image: url('images/tg-bg.jpg'); padding: 5%;">
      <p class="flex-container2" style="font-family: 'Roboto', sans-serif; display: flex; justify-content: center; align-items: center; margin: 0; padding-bottom: 2em;">
        <img src="images/jcicon.jpg" alt="" srcset="" style="border-radius: 50%; max-width: 180px;">
        <b style="font-size: 40px; text-align: center;">JEE Challenger</b>
      </p>

      <a href="https://t.me/+oOnj4y_ZYqYyZjA1" target="_blank"><button class="button2_tele" style="font-size: 20px;">Join us on Telegram</button></a>
    </div>

    <div style="padding: 2%;">
      <h1>JEE Papers and Official links</h1>
      <div class="flex-container">
        <div class="block"><p><h2>JEE Main</h2><a href="official-links/jee-main"><button class="button1">Go</button></a></p></div>
        <div class="block"><p><h2>JEE Advanced</h2><a href="official-links/jee-advanced"><button class="button1">Go</button></a></p></div>
      </div> 
    </div>
    
    <div style="background-color: rgba(212, 212, 212, 0.26); padding: 2%;">
      <h1>The Subjects</h1>
      <div class="flex-container">
        <div class="block"><img class="thumbnail-img" src="images/physics.jpg" alt="">
          <p><b>"Physics is an attempt conceptually to grasp reality as something that is considered to be independent of its being observed. In this sense one speaks of physical reality."</b><br><em>- Albert Einstein</em></p>
          <a href="materials/physics"><button class="button1">Find out more</button></a>
        </div>
        <div class="block"><img class="thumbnail-img" src="images/chemistry.jpg" alt="">
          <p><b>"Chemists do not usually stutter. It would be very awkward if they did, seeing that they have at times to get out such words as methylethylamylophenylium."</b><br><em>- William Crookes</em></p>  
          <a href="materials/chemistry"><button class="button1">Find out more</button></a>
        </div>
        <div class="block"><img class="thumbnail-img" src="images/maths.jpg" alt="">
          <p><b>"A man is like a fraction whose numerator is what he is and whose denominator is what he thinks of himself. The larger the denominator, the smaller the fraction."</b><br><em>- Leo Tolstoy</em><br></p> 
          <a href="materials/mathematics"><button class="button1">Find out more</button></a>
        </div>
      </div>
    </div>
    
    <div style="padding: 2%;">
      <h1>More Contents</h1>

      <div class="flex-container2">
        <div class="block">
          <p><h2>Chapter wise solved PYQs</h2><img class="thumbnail-img" src="images/pyqs.jpg" alt=""><br>
          <p>Get chapter wise solved previous (43) years' JEE papers published by Arihant and Disha publication</p>
          <a href="materials/chapterwise-solved-pyqs"><button class="button1">Go</button></a></p>
        </div>
        <div class="block">
          <p><h2>Link to NCERT books (PDF)</h2><img class="thumbnail-img" src="images/ncertpdfs.jpg" alt="">
          <p>This is a link to the Official Website of NCERT from where you can get NCERT text books in form of PDF</p>
          <a href="https://ncert.nic.in/textbook.php" target="_blank"><button class="button1">Go</button></a></p>
        </div>
      </div>

      <div style="padding: 2%;">
        <div class="block">
          <p><img class="thumbnail-img" style="max-width: 100%;" src="images/Unacademy-banner.jpg" alt="">
          <p>India's Largest Learning Platform. Coaching by Top Educators.</p>
          <a href="more-platforms/unacademy"><button class="button1">Go</button></a></p>
        </div>        
      </div>

      <div class="flex-container2">
        <div class="block">
          <p><img class="thumbnail-img" src="images/apnikaksha2.jpg" alt="">
          <p>Premium Education for All for free or at the most affordable price</p>
          <a href="more-platforms/apnikaksha"><button class="button1">Go</button></a></p>
        </div>
        <div class="block">
          <p><img class="thumbnail-img" src="images/pwallah.jpg" alt="">
          <p>The most affordable learning platform that cares about you</p>
          <a href="more-platforms/physicswallah"><button class="button1">Go</button></a></p>
        </div>        
      </div>

    </div>

    <!-- <div style="padding: 2%;">
      <h1>Contact Us!</h1>
      
      This option is currently unavailable due to server issues -->

      <!-- <a href="https://jeechallenger.godaddysites.com/contact-us" target="_blank" class="contact-us-float">
        <i class="fa fa-phone"></i>
      </a> -->


<!--    <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net" action="https://script.google.com/macros/s/AKfycbxxaoymNsraaGXIrxl0tq0J79ktUp56VBeyfdhn0V3WEGZSsBk/exec"> -->
        <!-- change the form action to your script url -->
    
<!--      <div class="form">
          <h2>Drop us a line!</h2>
          <fieldset class="form-elements">
            <input id="name" name="name" placeholder="Name*"/>
          </fieldset>
    
          <fieldset class="form-elements">
            <input id="email" name="email" type="email" value="" required placeholder="Email*"/>
            <span class="email-invalid" style="display:none">Must be a valid email address</span>
          </fieldset>
    
          <fieldset class="form-elements">
            <textarea style="resize: none; height: 150px;" id="message" name="message" placeholder="Message*"></textarea>
          </fieldset>
    
          <button class="button2">Send</button>
        </div> 
-->
    
        <!-- Customise the Thankyou Message People See when they submit the form: -->
<!--    <div class="thankyou_message" style="display:none;">
          <h2>Thanks for contacting us! <br> We will get back to you soon!</h2>
        </div> 

    
      </form>
-->    
      <!-- Submit the Form to Google Using "AJAX" -->
<!--  <script data-cfasync="false" type="text/javascript" src="form-submission-handler.js"></script>
-->
      <!-- END -->


    <!-- </div> -->





    <div class="message" style="background-color: rgba(212, 212, 212, 0.26); padding: 4%;">
      <marquee  onmouseover="this.stop();" onmouseout="this.start();" scrollamount="15" style="font-size: 2rem; padding-bottom: 1%;">Now you can contribute study materials to this website. Just click here 👇 and upload your file(s).</marquee>
      <a href="https://drive.google.com/drive/folders/1gs_ehca1F1-K9g3q_Q0mTteUSGzd6z8F?usp=sharing" target="_blank"><button class="button2" style="font-size: 20px;">Click here</button></a>
    </div>


    <div class="container2">
      <h1>ISI Aspirant?</h1>
      <h2>This is for you <span class="darkmode-ignore">👇</span></h2>
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6Ebb-oe2IUc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <h2>Guide to ISI website</h2>
      <p><a href="https://samya-s.github.io/guidetoisi/" target="_blank"><button class="button2">Visit</button></a></p>
    </div> 
    
  </div>



  <?php include("./common/telegram-float.php"); ?>


  <?php include("./common/contact-us-button.php"); ?>


  <?php include("./common/footer.php"); ?>


  
 
</body>
</html>
