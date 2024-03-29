<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/271f4647db.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Amy Vincent-Web Developer</title>
  <link rel="icon" type="img/x-icon" href="/img/favicon.png">

  <link href="partials/style.css" rel="stylesheet">
  <link href="partials/normalize.css" rel="stylesheet">
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

     <header class="container" id="contain">

</header>

    <nav>
      <div class="dropdown">

        <div class="drop-glitch">
          <button class="dropbtn" id="dropbtn" data-text="Navigation Menu">Navigation Menu</button>

        </div>

        <div class="dropdown-content">
            <div class="in"><a href="index.php">Home</a></div>

              <div class="in" id = "about-me"><a>About Me</a></div>
              <div class="in" id = "porty"><a>Portfolio</a></div>
              <div class="in" id = "coder"><a>Coding Examples</a></div>
              <div class="in" id = "scs"><a>SCS Scheme</a></div>
              <div class="in" id = "certify"><a>Certification</a></div>
              <div class="in" id = "form"><a>Contact Me</a></div>

              <div class="socials-small">        
                <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
                  <img src="img/git.png" alt="Github logo" class="gitbtn-small">
                </a>
              </div>
              
            </div>
      </div>
    </nav>

    <div class="Main-page-1">
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

      <div class ="holder">
            <div class="scroll">
       
              <div class="border">
                <div class="caption-text-index" id = "caption-text-index">
                  <!--Burger menu-->
                  <div class="img-title" id="img-title"></div>

                  <!--Captions-->

                </div>

              </div>
           
              <div class="caption-text-about" id = "caption-text-about">
                <h1 class="cyberpunk glitched" id="glitch">It's all about.......me!</h1>
                 <!--link to pro biography--> 
                <div class ="me">
                  <button id="myBtn" >
                    <h1> Professional Biography</h1>
                  </button>

                  <!--link to personal bio-->
                  <button id="myBtn-2">
                    <h1> Personal Biography</h1>
                  </button>
                </div>
              </div>  

              <div class="portfolio" id="portfolio">
                <h1 class="cyberpunk glitched" id="port">Portfolio!</h1>

                <div class ="port-box">
                  <div class ="portfolio-info">
                      <div class="laravel/tailwind" id="myBtn-l">
                      
                        <input type="image" src="img/foxy.png" alt="Image of netmatters project" class="netbtn">
                        <h1 class="html">C#/Unity</h1>
                        <h3 class="net-pop"> 
                        </h3>
                      </div>

                      <div class="html/css" id="myBtn-3">
                      
                        <input type="image" src="img/netmattersphoto.png" alt="Image of netmatters project" class="netbtn">
                        <h1 class="html">HTML/CSS/JAVASCRIPT/PHP/SQL</h1>
                        <h3 class="net-pop"> For this Project we had to rebuild the Netmatters webpage from scratch
                          using a mix of HTML, CSS, Javascript as well as PHP.....
                          
                      
                        </h3>


                      </div>


                      <div class="Javascript" id="myBtn-4">
                      

                        <input type="image" src="img/javaimage.png" class="javabtn"
                          alt="coming soon image">
                          <h1 class="java-1">JAVASCRIPT</h1>
                          <h3 class="js-pop" id = "js-pop">
                              For this Project we had to build a multi-dimensional array which consisted of
                              multiple Email addresses
                              
                          </h3>


                      </div>
                        
                      <div class="Wordpress" id="myBtn-w">
                        <input type="image" src="img/silent-hill-pic.jpg" class="wordbtn"
                          alt="coming soon image">
                          <h1 class="word-1">WORDPRESS</h1>
                          <h3 class="word-pop" id = "word-pop">
                            Full 5 page Wordpress website created using Elementor in conjuction with
                            a variety of plug-ins as well as my own custom HTML/CSS.
                          </h3>

                      </div>
                  </div>
                </div>
              </div>

              <div class="form" id = "former">
                <h1 class="cyberpunk glitched" id="contact">Contact Me</h1>
                  <div class="sendit">
                  
                      <div class = "details">
                        <h1>Get in Touch </h1>
                    
                        <h3>If you would like more information on the services I have to offer,<br> please dont
                          hesitate to get in touch:
                        </h3>
                    
                        <h2>Mobile: 07950518798</h2>
                        <h2 class = "email">Email: amyvincent1990@outlook.com</h2>
                      </div>   

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
                                                        <input type="textarea" cols="40" rows ="5" name="message" class="form-control-email" id="exampleFormControlInput1" value="'.$message.'">
                                                      </div>'; //display after submit if input correct                                    
                                              }
                                              else
                                              {
                                                //if no error messages 
                                                echo'<div class="email-3">
                                                <label for="exampleFormControlInput1" class="form-label">Message <i
                                                class="fa-solid fa-asterisk"></i></label>
                                                  <input type="textarea" cols="40" rows ="5" name="message" class="form-control-email" id="exampleFormControlInput1">
                                                </div>'; //display after submit if input correct    
                                              }
                                            ?>
                                                <a href= "#contact" ><button class="submit"  type="submit" name ="submit" >Submit</button></a>
                                      </div>
                                  </div>

                              </div>
                          </div>     
                      
                      </div>
                      
                      
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
                      </div>
                     
                  </div>      
 
              <div class="coding" id="coding">
                <h1 class="cyberpunk glitched" id="codes">Coding Examples!</h1>
                <div class="slideshow-container-fade">

                  <div class="Containers" id="myBtn-12">
                    <h1 class="java-code">Javascript</h1>                  
                    <a href = "j-page.php" class="j-snip"><img src="img/JAVASCRIPT-demo.png" class="javabtn-2" alt="java snippet"></a>
                
                  </div>
                
                  <div class="Containers" id="myBtn-13">
                    <h1 class="SQL-code">SQL</h1>
                    <a href = "s-page.php" class="j-snip"><img src="img/SQL.png"  class="sqlbtn" alt="SQL snippet"></a>                   
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
                        <div class="html-snip-1">        
                          <a href = "h-page.php" class="j-snip"><img src="img/HTML-demo.png"  class="htmlbtn" alt="HTML snippet"></a>
                        </div>
                    </div>

                    <div class="Containers" id="myBtn-16">
                      <h1 class="php-code">PHP</h1>
                      <div class="php-snip">                        
                        <a href = "p-page.php" class="j-snip"><img src="img/php-snip.png"  class="htmlbtn" alt="PHP snippet"></a>
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

                    <div class="Containers" id="myBtn-17">
                      <h1 class="word-code">WORDPRESS</h1>
                      <div class="word-snip">
                        <img src="img/coming-soon.png" class="wordbtn" alt="wordpress coding">
                      </div>
                    </div>
    
                </div>

                <div class = "c-buttons" id = "c-buttons">
                  <!-- The circles/dots -->
                  <div class ="btn-box">
                  
                    <a href = "#" class="dots" id="java-dot" onclick="currentSlides(1)"><img src="img/R.png"></a>
                    <a href = "j-page.php" class="dots" id="java-dot-2"><img src="img/R.png"></a>
                            
                    <a href = "#" class="dots" id="sql-dot" onclick="currentSlides(2)"><img src="img/sql-logo.png"></a>
                    <a href = "s-page.php" class="dots" id="sql-dot-2" ><img src="img/sql-logo.png"></a>
                  
                    <a href = "#" class="dots" id="html-dot" onclick="currentSlides(3)"><img src="img/html_css.png"></a>
                    <a href = "h-page.php" class="dots" id="html-dot-2"><img src="img/html_css.png"></a>

                    <a href = "#" class="dots" id="php-dot" onclick="currentSlides(4)"><img src="img/new-php-logo.png"></a>
                    <a href = "p-page.php" class="dots" id="php-dot-2" ><img src="img/new-php-logo.png"></a>    
                  </div>          
                </div>
            </div>  

      

            <div class="scs-scheme" id="scheming">
                <h1 class="cyberpunk glitched" id="schemed">SCS Scheme</h1>

                <div class="scheme">

                  <div id="myBtn-10">
                    <img class ="scion" src ="img/scion.jpg">
                    <h1> Scion Coalition Scheme</h1>
                  </div>

                  <div id="myBtn-11">
                    <img class ="scion" src ="img/Treehouse-Logo.png">
                    <h1> Treehouse</h1>
                
                  </div>

                  <div id="myBtn-33">
                    <img class ="scion" src ="img/net.jpg">
                    <h1> Netmatters</h1>
                  </div>
                </div>  
            </div>  

            
            <div id = "cookieModal" class = "cookie">
              <h1> This Portfolio website only uses essential, necessary cookies.
                These cookies let you use all the different parts of the website. 
                Without them, services that you’ve asked for can’t be provided.
                They are purely for functionality. These cookies are on by default but 
                if you are unhappy you can switch them off within the settings of your browser.
              </h1>
              
              
            
            </div>
                
            <div class= "certificate" id = "certificate">
              <h1 class="cyberpunk glitched" id="glitch">Certification</h1>
              <h2 class="Certification">Scroll Down to see pdf's of my course certificates
                from companies such as Netmatters and Udemy
              </h2>
              

              <div class="netmatters-cert-l">
                 <h2 class="cyberpunk glitched" id = "netmatters-glitch"> Netmatters Scion Training Programme</h2>
                 <div class= "netmatters-btn">
                  <a href = "img/netmatters certificate.pdf" class="c-snip"><img class = "cert-img" src = "img/netcert.png"></a> 
                 </div>

                 <h2 class="cyberpunk glitched" id = "netmatters-glitch-click">Click to view PDF</h2>

              </div>       
              
              <div class="udemy-cert-l">
                 <h2 class="cyberpunk glitched" id = "netmatters-glitch">Complete C# Unity Game Developer 3D</h2>
                 <div class= "udemy-btn">
                  <a href = "img/udemy-pdf.pdf" class="c-snip"><img class = "cert-img" src = "img/udemycert.jpg"></a> 
                 </div>

              </div>  
              <h2 class="cyberpunk glitched" id = "netmatters-glitch-click">Click to view PDF</h2>      

            </div>
          
      </div>
     

    
      <!--holds modal pop ups-->
      <div class="scroll-2" id="scroll-2">


        <!--pro bio modal-->
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>I have become well rehearsed in a variety of different coding languages, frameworks and libraries.<br>
            Allowing me to produce a variety of different apps and websites, from a basic site with a small contact form <br>
            to sites that are alot more authentication/authorisatin heavy, with user accounts, password verification and multi table <br>
            databases. I have also utilized AJAX calls and API's to again improve user experience and website capabilities.<br>

            As you can see these skills open me up to creating many varied digital products and websites.
            
            I recently fortook a Netmatters Training course in Web development, this helped me to really home in on my skills,<br>
            insuring my code met industry standard as well as teaching me important soft skills such as time management<br>
            turning me into a professional, well-rounded Junior Developer.

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
            <img src="img/netmattersphoto.png" id="net-small">

            <h3 class="net-pop" id ="net-pop">
                      For this Project we had to rebuild the Netmatters webpage from scratch
                      using a mix of HTML, CSS, Javascript as well as PHP. I used javascript for certian functions 
                      such as the sliding nav menu and cookie sessions. I used PHP to not only store client information within
                      a selected database that i had created using phpadmin and SQL, I also used it to streamline my HTML code, by taking repeated code, storing it within a PHP 
                      function/file and calling on it when needed. Saving myself from repeating code. 
            </h3>          
                      
        

            <button class="n-ref"><a
                href="http://vincentwebdev.co.uk/NETMATTERS">Project</a></button>
            <button class="n-git"><a href="https://github.com/Blackadder1712/Netmatters">Github
                Repository</a></button>

          </div>
        </div>

        <div id="myModal-l" class="modal-l">
          <div class="modal-content-l">
            
            <div class = "first-game">
                <span class="close-l">&times;</span>
                  <h2> Freddy Shooter</h2>
                  <img src="img/zomibe.png" id="lara-small">

                  <h3 class="l-pop">
                              This is a game I am currently creating using C# and Unity, It is a First person shooter 
                              where the player has to collect pizza slices and shoot animated zombies to survive , there are battery
                              and ammo pick ups to help the player along the way. This game takes advantage on animations, raycasting, clickable AI,
                              a variety of complex classes as well as many different packages such as ProBuilder. 
                                  
                  </h3>

                  <button class="l-proj"><a
                      href="https://sharemygame.com/@VincentWebDev/freddy-shooter">Project</a></button>
                  <button class="l-git"><a href="https://github.com/Blackadder1712/first-person-shooter">Github
                      Repository</a></button>
            </div>

              <div class="second-game">
                <h2> Freddy In Space </h2>
                <img src="img/foxy.png" id="lara-small">

                <h3 class="l-pop">
                            This is a game I am currently creating using C# and Unity, it consists of a variety ofdifferent 
                            C# methods, variables and classes to create an interesting variety of game mechanics, from detecting collisions and 
                            differentiating between different gameobjects, to mapping enemy AI .
                            Using C# in conjuction with Unity Ive been able to use C# to manipulate and control game objects,
                              set player actions constraints etc.
                            Unity has allowed me to learn about a variety of different tools in game design such as building terrain,
                            setting lighting and audio etc.
                                
                </h3>

                <button class="l-proj"><a
                    href="https://sharemygame.com/@VincentWebDev/freddy-in-space">Project</a></button>
                <button class="l-git"><a href="https://github.com/Blackadder1712/Shooter-level">Github
                    Repository</a></button>
               </div>

          </div>
        </div>


        <div id="myModal-5" class="modal-5">
          <div class="modal-content-5">
            <span class="close-5">&times;</span>
            <h2> Javascript Array Reflection</h2>
            <img src="img/javaimage.png" id="js-small">
            <h3 class="js-pop">
                          For this Project we had to build a multi-dimensional array which consisted of
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

        <div id="myModal-w" class="modal-w">
          <div class="modal-content-w">
            <span class="close-w">&times;</span>
            <h2>Silent Hill Wordpress Site</h2>
            <img src="img/silent-hill-pic.jpg" id="js-small">
            <h3 class="js-pop">
                          For this Project I built a full 5 page website using Wordpress and Elementor , i used a variety
                          of Plug-ins as well as my own custom html/css to achieve the style and look i wanted.
            </h3>        
            <button class="w-proj"><a
                href="http://vincentwebdev.co.uk/silent_hill/elementor-354/">Project</a>
            </button>
          </div>
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

    </div>
    

    <!--for page fade in-->



    </div>
    </div> <!--Scroll Down Button-->



  </header>














  <!--Sidebar for larger VP-->
 
    <div class="sidebar">
      <nav id="myPages" class="main-pages">
        <a href="index.php" class="side-home">A</a>
          <ul class="pages" id="large">
           
            <li><h1 class = "cyberpunk glitched" id="aboutL"><div>About Me</div></h1></li>
              
            <li><h1 class = "cyberpunk glitched" id ="portL" ><div>Portfolio</div></h1></li>

            <li><h1 class = "cyberpunk glitched" id = "codeL"><div>Coding Examples</div></h1></li>

            <li><h1 class = "cyberpunk glitched" id = "schemeL"><div>SCS Scheme</div></h1></li>

            <li><h1 class = "cyberpunk glitched" id = "certifyL"><div>Certification</div></h1></li>

            <li><h1 class = "cyberpunk glitched" id = "contactL"><div>Contact Me</div></h1></li>

         
            
            <li><a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
                  <img src="img/git.png" alt="Github logo" class="gitbtn">
                </a></li>
             


          </ul>
         <!-- <ul class="pages" id=small>


              <li><a href="#glitch"  class="nav-link-2">About Me</a></li>

              <li><a href="#port" class="nav-link-3">Portfolio</a></li>

              <li><a href="#coding" class="nav-link-4">Coding Examples</a></li>

              <li><a href="#scheming" class="nav-link-5">SCS Scheme</a></li>

              <li><a href="#contact" class="nav-link-6">Contact Me</a></li>
              <div class="socials">
                <a href="https://github.com/Blackadder1712/Portfolio" target="_blank">
                  <img src="img/git.png" alt="Github logo" class="gitbtn">
                </a>
              </div>
             
            </a>



          </ul>-->

        

      </nav>


    </div>
 




























  <script src="js/carousel.js"></script>
  <script src="js/coding-ex.js"></script>
  <script src="js/coding-ex-l.js"></script>
  <script src="js/hover.js"></script>
  <script src="js/hover-2.js"></script>
  <script src="js/hover-l.js"></script>
  <script src="js/hover-w.js"></script>
  <script src="js/hover-3.js"></script>
  <script src="js/hover-4.js"></script>
  <script src="js/hover-5.js"></script>
  <script src="js/hover-6.js"></script>
  <script src="js/hover-7.js"></script>
  <script src="js/hover-8.js"></script>
  <script src="js/hover-10.js"></script>
  <script src="js/hover-11.js"></script>
  <script src="js/hover-13.js"></script>
  <script src="js/sticky.js"></script>
  <script src="js/about-me.js"></script>
  <script src="js/about-me-l.js"></script>
  <script src = "js/portfolio.js"></script>
  <script src = "js/portfolio-l.js"></script>
  <script src = "js/scheming.js"></script>
  <script src = "js/scheming-l.js"></script>
  <script src = "js/contact.js"></script>
  <script src = "js/contact-l.js"></script>
  <script src = "js/certify.js"></script>
  <script src = "js/certify-l.js"></script>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src ="js/cookie.js"></script>
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