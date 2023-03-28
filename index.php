<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/271f4647db.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Amy Vincent-Web Developer</title>
  <link rel="icon" type="img/x-icon" href="/img/favicon.png">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:ital,wght@0,100;0,300;0,700;1,300&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">


</head>


<body onload="init();" style="margin: 0; padding: 0; background-color: #000000;">
  <!--Drop down menu for smaller VP-->

  <?php require_once "db/connect.php";?> 
  <?php include 'email-form/signup.inc.php';?>

  <header class="flex-container-1">

    <nav>
      <div class="dropdown">
        <div class="drop-glitch">
          <button class="dropbtn" id="dropbtn" data-text="Navigation Menu">Navigation Menu</button>

        </div>

        <div class="dropdown-content">
          <div class="in"><a href="index.php">Home</a></div>
          <div class="in"><a href="#glitch">About Me</a></div>

          <div class="in"><a href="#port">Portfolio</a></div>
          <div class="in"><a href="#coding">Coding Examples</a></div>
          <div class="in"><a href="#scheming">SCS Scheme</a></div>
          <div class="in"><a href="#contact">Contact Me</a></div>
          <div class="socials-small">
            <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
              <img src="img/linkdn.png" alt="LinkedIn logo" class="linkbtn-small">
            </a>
            <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
              <img src="img/git.png" alt="Github logo" class="gitbtn-small">
            </a>



          </div>
        </div>
      </div>




    </nav>








    </div>




    <div class="Main-page-1">


      <!--Matrix background animation-->


      <!--Main image and caption-->




      <div class="page-image">

        <!--Background Animation-->

        <script>
          var tileSize = 20;
          // Speed of characters fading
          var fadeFactor = 0.05;

          var canvas;
          var ctx;

          var columns = [];
          var maxStackHeight;

          function init() { //Call needed elements
            canvas = document.getElementById('canvas');
            ctx = canvas.getContext('2d');

            initMatrix();

            // start the main loop
            tick();
          }

          function initMatrix() {
            maxStackHeight = Math.ceil(canvas.height / tileSize);

            // Create columns for characters to go down
            for (let i = 0; i < canvas.width / tileSize; ++i) {
              var column = {};
              // save the x position of the column
              column.x = i * tileSize;
              // create a random stack height for the column
              column.stackHeight = 10 + Math.random() * maxStackHeight;
              // add a counter to count the stack height
              column.stackCounter = 0;
              // add the column to the list
              columns.push(column);
            }
          }

          function draw() {
            // Fade effect with transparent black sqauare
            ctx.fillStyle = "rgba( 0 , 0 , 0 , " + fadeFactor + " )";
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            //fonts
            ctx.font = (tileSize - 2) + "px monospace";
            ctx.fillStyle = "rgb( 0 , 255 , 0 )";
            for (let i = 0; i < columns.length; ++i) {
              // Random character picker
              var randomCharacter = String.fromCharCode(33 + Math.floor(Math.random() * 94));
              ctx.fillText(randomCharacter, columns[i].x, columns[i].stackCounter * tileSize + tileSize);

              // Random column lengths
              if (++columns[i].stackCounter >= columns[i].stackHeight) {
                columns[i].stackHeight = 10 + Math.random() * maxStackHeight;
                columns[i].stackCounter = 0;
              }
            }
          }

          // MAIN LOOP
          function tick() {
            draw();
            setTimeout(tick, 50);
          }
        </script>

        <div class="b-ground">
          <canvas id="canvas" width="550%" height="1000%" style="display:block auto;"></canvas>
        </div>
      

      </div>
      <div class="scroll">
       
          <div class="border">

            <div class="caption-text-index">




              <!--Burger menu-->
              <div class="img-title" id="img-title"></div>

              <!--Captions-->

            </div>

          </div>



           <!--title-->
          <div class="caption-text-about">
            <h1 class="cyberpunk glitched" id="glitch">It's all about.......me!</h1>
            
           <!--link to pro biography--> 
            <div class ="me">
              <button id="myBtn">
                <h1> Professional Biography</h1>

              </button>

            <!--link to personal bio-->
              <button id="myBtn-2">
                <h1> Personal Biography</h1>

              </button>
            </div>

          
            <div class="portfolio" id="portfolio">
              <h1 class="cyberpunk glitched" id="port">Portfolio!</h1>

              

                <div class="html/css" id="myBtn-3">
                  <h1 class="html">HTML/CSS</h1>
                  <input type="image" src="img/netmatters.jpg" alt="Image of netmatters project" class="netbtn">

                </div>


                <div class="Javascript" id="myBtn-4">
                  <h1 class="java-1">Javascript</h1>

                  <input type="image" src="https://i.gyazo.com/8ed277a14a53c421e46b51563fceb020.jpg" class="javabtn"
                    alt="coming soon image">

                </div>

              </div>

            </div>

            <div class="coding" id="coding">
              <h1 class="cyberpunk glitched" id="coding">Coding Examples!</h1>


                
              <div class="slideshow-container-fade">
                <div class="Containers" id="myBtn-12">
                  <h1 class="java-code">Javascript</h1>


                  <div class="j-snip">
                    <img src="img/JAVASCRIPT-demo.png" class="javabtn-2" alt="java snippet">
                  


                  </div>




                </div>

                <div id="myModal-6" class="modal-6">
                  <div class="modal-content-6">
                    <span class="close-6">&times;</span>
                    <h2> Javascript </h2>
                    <img src="img/JAVASCRIPT-demo.png" id="java-test">
                    <h3 class="js-pop"> This snippet of code was taken from the Javascript coding I used for the animated background of this
                      webpage.
                      As you can see the animation is initiated by a function, which first of all sets the height of each
                      character column by dividing the height of the canvas by the tilesize. It then goes into an infinite “for
                      loop” that adds a column of random height with each iteration, each column increasing the width of the
                      canvas. What makes this “for loop” infinite is it will continue to increase the canvas width with each
                      iteration, thus meaning that the counter value (i) will never be more than the canvas.width value, which
                      is the argument.
        

                    </h3>
                  </div> 
                </div>     





                <div class="Containers" id="myBtn-13">
                  <h1 class="SQL-code">SQL</h1>
                  <div class="sql-snip">


                    <img src="img/SQL.png" class="sqlbtn" alt="SQL snippet">
                 




                  </div>
                </div>


                <div id="myModal-7" class="modal-7">
                  <div class="modal-content-7">
                    <span class="close-7">&times;</span>
                    <h2> SQL</h2>
                    <img src="img/sql code.png" id="sql-test">
                    <h3 class="js-pop"> Above is a link displaying a movie database, I have created a reprosentational query to display my knowledge 
                      of the SQL programme and how it is used in data clottectytion, maintenance etc. 
        

                    </h3>
                  </div> 
                </div>    


                 <div class="Containers" id="myBtn-15">
                    <h1 class="html-code">HTML</h1>
                    <div class="html-snip">

                
                      <img src="img/HTML-demo.png" class="htmlbtn" alt="html coding">

                    </div>


                  </div>

                  <div class="Containers" id="myBtn-16">
                    <h1 class="php-code">PHP</h1>
                    <div class="php-snip">

                
                      <img src="img/php-snip.png" class="phpbtn" alt="php coding">

                    </div>


                  </div>

                  <div id="myModal-8" class="modal-8">
                    <div class="modal-content-8">
                      <span class="close-8">&times;</span>
                      <h2> HTML</h2>
                      <img src="img/HTML-demo.png" id="html-test">
                      <h3 class="js-pop">  This snippet of code is the html to my contact page from this website,
                        As you can see each input field is child element (.mb-3) with its own unique ID,
                        within a parent element(“.contact”). Tho the input fields look similar on screen,
                        this differential is required when different attributes and properties need to be attached
                        to each child element. This was very important in the scenario when it came to applying Regex
                        as each field had its own specific Regex variable. Not only this , each field differed in label name ,
                        field size etc. It was vital to gain access to each field as an individual.
          
  
                      </h3>
                    </div> 
                  </div>    
  





                </div>
          
            




              </div>

                 <!-- The circles/dots -->
                <div class ="btn-box">
                  <a href = "#" class="dots" id="java-dot" onclick="currentSlides(1)"><img src="img/R.png"></a>

                  <a href = "#" class="dots" id="sql-dot" onclick="currentSlides(2)"><img src="img/sql-logo.png"></a>

  
                  <a href = "#" class="dots" id="html-dot" onclick="currentSlides(3)"><img src="img/html_css.png"></a>
  
                </div>
                <div class="scs-scheme" id="scheming">
                  <h1 class="cyberpunk glitched" id="schemed">SCS Scheme</h1>

                  <div class="scheme">
                    <div id="myBtn-10">
                      <h1> Scion Coalition Scheme</h1>
                    </div>

                    <div id="myModal-10" class="modal-10">
                      <div class="modal-content-10">
                        <span class="close-10">&times;</span>
                        <h2> The Scion Coalition Scheme is an intensive, specially tailored training program<br>
                          run by Netmatters in order to give willing candidates the opportunity to enter the industry<br>
                          as web developers. Under the supervision of senior web developers, scions generally aim to complete<br>
                          training within six to nine months. The course is intensive and therefore the level of learning achieved is<br>
                              extensive in a short space of time.
                        </h2>
        
                      </div>
                    </div>


                    <div id="myBtn-11">
                      <h1> Treehouse</h1>
                    </div>
                    <div id="myBtn-33">
                      <h1> Netmatters</h1>
                    </div>
                  </div>

                  <div id="myModal-11" class="modal-11">
                    <div class="modal-content-11">
                      <span class="close-11">&times;</span>
                      <h2> Treehouse is an online learning community, featuring videos covering a number of topics<br>
                        from basic HTML to C# programming, iOS development, data analysis, and more.<br>
                          By completing courses users can earn points, allowing them to track their progress<br>
                          and see how much they've covered in certain areas.<br>
                        Total Score
                        teamtreehouse.com/ score :6445
                        
                      </h2>
      
                    </div>
                  </div>

                
                  <div id="myModal-33" class="modal-33">
                    <div class="modal-content-33">
                      <span class="close-33">&times;</span>
                      <h2> 
                        Established in 2008
                        Norfolk's leading technology company<br>
                        Winner of the Princess Royal Training Award<br>
                        Winner of EDP Skills of Tomorrow Award<br>
                        80+ staff, 2 locations across Norfolk<br>
                        Digital Marketing, Website & Software development & IT Support<br>
                        Broad spectrum of clients, working nationwide<br>
                        Operate to strict company values<br>
                        
                      </h2>
      
                    </div>
                  </div>
      
      
      
                </div>
               
              
                  <h1 class="cyberpunk glitched" id="contact">Contact Me</h1>
                    <div class="sendit">
                    
          
                        <h1>Get in Touch </h1>
                    
                        <h3>If you would like more information on the services I have to offer,<br> please dont
                          hesitate to get in touch:
                        </h3>
                    
                        <h2>Mobile: 07950518798</h2>
                        <h2>Email: amyvincent1990@outlook.com</h2>

                        <?php
                          /* $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";//get url to identify error
                          
                          if(strpos($fullUrl, "signup=empty") == true )//check url for string 
                          {
                              echo "<p class='pop'>Not all fields completed</p>"; //display error 
                              //exit();
                          }

                          if(strpos($fullUrl, "signup=char") == true )//check url for string 
                          {
                              echo "<p class='pop'>Please enter valid name</p>"; //display error 
                            // exit();
                          }

                          else if(strpos($fullUrl, "signup=invalidtelephone") == true )//check url for string 
                          {
                              echo "<p class='pop'>Please enter valid phone number</p>"; //display error 
                              //exit();
                          }*/

                          if(!isset($_GET['signup']))
                          {
                            //exit(); // exit if user not submitted form 
                          }
                          else
                          {
                          
                                $signupCheck = $_GET['signup']; //check url
                          
                            
                                if($signupCheck == "empty")
                                {
                                  echo "<p class='pop'>Not all fields completed</p>"; //display error // if form has empty url
                                
                                }
                                elseif($signupCheck == "char")
                                {
                                  echo "<p class='pop'>Please enter valid name</p>"; //display error 
                                }
                                elseif($signupCheck == "invalidtelephone")
                                {
                                  echo "<p class='pop'>Please enter valid phone number</p>"; //display error 
                                }

                                elseif($signupCheck == "email")
                                {
                                  echo "<p class='pop'>Please enter valid email</p>"; //display error 
                                }

                                elseif($signupCheck == "success")
                                {
                                  echo "<p class='pop'>Thankyou for your query! We shall contact you shortly !</p>"; //display error 
                            
                      
                            
                              
                                }
                                
              
                            
                          
                        


                          }
                        ?>
                          <div class="email-box-2">
                <div class="holder">                 
                  <form action= "email-form/signup.inc.php" method="POST">
                   
                    <div class="email-form-2" id="email-form">

                    

                      <div class= "email-sec">
                          <div class="nameandemail-2" id="emails">
                            <?php 
                              if(isset($_GET['name']))
                              {
                                
                                $name = $_GET['name'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Name <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="name" class="form-control-email" id="exampleFormControlInput1" value="'.$name.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo' <div class="email-3">
                                         <label for="exampleFormControlInput1" class="form-label">Your Name <i
                                            class="fa-solid fa-asterisk"></i></label>
                                          <input  name="name" class="form-control-email" id="exampleFormControlInput1">
   
   
                                        </div>';
                              }

                              if(isset($_GET['company']))
                              {
                                
                                $company = $_GET['company'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Company Name <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="company" class="form-control-email" id="exampleFormControlInput1" value="'.$company.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Company Name <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="company" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }
                            

                              
                              if(isset($_GET['email']))
                              {
                                
                                $email = $_GET['email'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Email <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="email" class="form-control-email" id="exampleFormControlInput1" value="'.$email.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Email <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="email" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              if(isset($_GET['telephone']))
                              {
                                
                                $telephone = $_GET['telephone'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Your Telephone Number <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="telephone" class="form-control-email" id="exampleFormControlInput1" value="'.$telephone.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Your Telephone Number <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="telephone" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              if(isset($_GET['subject']))
                              {
                                
                                $subject = $_GET['subject'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Subject<i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="subject" class="form-control-email" id="exampleFormControlInput1" value="'.$subject.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Subject <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="subject" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }

                              
                              if(isset($_GET['message']))
                              {
                                
                                $message = $_GET['message'];
                                echo'<div class="email-3">
                                       <label for="exampleFormControlInput1" class="form-label">Message <i
                                       class="fa-solid fa-asterisk"></i></label>
                                        <input type="text" name="message" class="form-control-email" id="exampleFormControlInput1" value="'.$message.'">
                                      </div>'; //display after submit if input correct                                    
                              }
                              else
                              {
                                 //if no error messages 
                                 echo'<div class="email-3">
                                 <label for="exampleFormControlInput1" class="form-label">Message <i
                                 class="fa-solid fa-asterisk"></i></label>
                                  <input type="text" name="message" class="form-control-email" id="exampleFormControlInput1">
                                </div>'; //display after submit if input correct    
                              }
                            ?>
                        

                      
                      
                      
                         
                            
                             <button class="submit" type="submit" name ="submit" >Submit</button>
                          </div>
                      
                      
                        </div>
                    </div>
        

                
             </div> 
            </div>
           
          <!-- The circles/dots -->

          </div>
          
        </div>

      </div>
      <!--holds modal pop ups-->
      <div class="scroll-2" id="scroll-2">

        <!--pro bio modal-->
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2> My interest and love of Digital Technology led to me attending University Campus <br> Suffolk to
              study
              BA Computer Games Design, where i learnt to use
              Unity, Unreal Engine and Flash.<br> Though life circumstances pushed me down a different path ,<br> I
           solidly cemented a love and passion for coding and the unlimited possibilities it creates.</h2>

          </div>
        </div>
         
        
        <div id="myModal-2" class="modal-2">
          <div class="modal-content-2">
            <span class="close-2">&times;</span>
            <h2>For the last 10 years I have classed coding and digital art as not only a hobby but a personal passion
              of mine. 
              <br>Countless evenings coding for the sheer enjoyment of it atests to this, whether it be building a website, learning 
              a new language or even coding a mini game. The possibilites are endless and i thrive when i am building my skills in this 
              sector. I never want to stop learning and working towards the next project.
                           </div>
        </div>

        <div id="myModal-3" class="modal-3">
          <div class="modal-content-3">
            <span class="close-3">&times;</span>
            <h2> Netmatter's HTML/CSS Reflection</h2>
            <img src="img/netmatters.jpg" id="net-small">
            <h3 class="net-pop"> For this Project we had to rebuild the Netmatters webpage from scratch
              using a mix of HTML, CSS and Javascript.As well as this i also learnt how and when to create
              cookies
              as well as using scss.
            </h3>

            <button class="n-ref"><a
                href="http://netmatters.amy-vincent.netmatters-scs.co.uk/">Project</a></button>
            <button class="n-git"><a href="https://github.com/Blackadder1712/Netmatters">Github
                Repository</a></button>

          </div>
        </div>

        <div id="myModal-5" class="modal-5">
          <div class="modal-content-5">
            <span class="close-5">&times;</span>
            <h2> Javascript Array Reflection</h2>
            <img src="https://i.gyazo.com/8ed277a14a53c421e46b51563fceb020.jpg" id="js-small">
            <h3 class="js-pop"> For this Project we had to build a multi-dimensional array which consisted of
              multiple Email addresses
              holding an array of user-selected images. These images were fetched from an API via an ajax
              call.Using javascript functions to allow the user to
              select their images of choice and re enter a duplicate email if they want to add more images.


            </h3>

            <button class="J-proj"><a
                href="https://blackadder1712.github.io/Javascript-Array/">Project</a></button>
            <button class="J-git"><a href="https://github.com/Blackadder1712/Javascript-Array">Github
                Repository</a></button>




          </div>
        </div>



      </div>

        















    </div>
    </div>

    <!--for page fade in-->



















    </div>
    </div> <!--Scroll Down Button-->



  </header>














  <!--Sidebar for larger VP-->

  <div class="sidebar">
    <nav id="myPages" class="main-pages">
      <button onclick="window.location.href = 'index.php';">A</button>
      <ul class="pages">


        <li><a href="#glitch" class="nav-link-2">About Me</a></li>

        <li><a href="#port" class="nav-link-3">Portfolio</a></li>

        <li><a href="#coding" class="nav-link-4">Coding Examples</a></li>

        <li><a href="#scheming" class="nav-link-5">SCS Scheme</a></li>

        <li><a href="#contact" class="nav-link-6">Contact Me</a></li>


      </ul>
      <div class="socials">

        <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
          <img src="img/linkdn.png" class="linkbtn" alt="LinkedIn logo">
        </a>
        <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
          <img src="img/git.png" alt="Github logo" class="gitbtn">
        </a>



      </div>

    </nav>


  </div>




























  <script src="js/carousel.js"></script>
  <script src="js/coding-examples.js"></script>
  <script src="js/hover.js"></script>
  <script src="js/hover-2.js"></script>
  <script src="js/hover-3.js"></script>
  <script src="js/hover-4.js"></script>
  <script src="js/hover-5.js"></script>
  <script src="js/hover-6.js"></script>
  <script src="js/hover-7.js"></script>
  <script src="js/hover-8.js"></script>
  <script src="js/hover-10.js"></script>
  <script src="js/hover-11.js"></script>
  <script src="js/hover-13.js"></script>
  <!--sticky nav-->

  <script src="sticky.js"></script>
  <!--transition-->
  <script src="js/text.js"></script>

  <script src="js/grain.js"></script>

  <!--Banner TypeWriter effect-->
  <script src="js/typewriter.js"></script>
  <!--dropdown effect-->
  <script src="js/dropdown.js"></script>
  <!--email validation-->
  <!--<script src="js/email-val.js"></script>-->
  <!--name validation-->

  <!--page animations-->
  <script src="js/animations.js"></script>
  <!--jQuery-->

  <script src="js/jquery-1.11.2.min.js"></script>


</body>

</html>