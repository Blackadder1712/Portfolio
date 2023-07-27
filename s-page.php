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
    <body onload="init();" style="margin: 0; padding: 0; background-color: #000000; width:100%; overflow-y:scroll">

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
    <div class = "j-page-layout">
      <button class="dropbtn" id="dropbtn" data-text="Back to Coding Examples">
        <a href = "index.php#coding" class = "back-btn">Back to Coding Examples</a>
      </button>
      <h1 class="cyberpunk glitched" id="coding">SQL Coding Snippet</h1>

      
        <ul class="j-desc">
                <li><a href="#java-info" class="Description">Description</a></li>
                <li><a href="index.php#coding" class="Description" id = "back">Back to Coding Examples</a></li>
        </ul>
  
      
      <img src="img/SQL.png" class="javascript-page" alt="sql snippet">
      
      <img src="img/sql-code.png" class="javascript-page" alt="sql snippet">



                 <h1 class="cyberpunk glitched" id="java-info">Description</h1>



                <div class = "j-info">
                    
                    <h3 class="js-pop"> Above is an image displaying a movie database and an image of the SQL query I used to manipulate 
                        ,search through and use to gather specific data needed from the tables within said database.
                        I first of all set the columns of the tables i required an alias using the AS keyword. This makes 
                        the code more efficient and easier to read and understand. Once required tables were connected using the INNER JOIN keyword I 
                        could then sort through the data i needed by using the genre ID's and movie language column, filtering through the column to find specific data i needed
                        from it, using the WHERE keyword . Finally i sorted the data by release date using the ORDER BY keyword. 
        
        

                    </h3>
                    
                    <ul class="j-desc">
                       <li><a href="s-page.php" class="Description">Scroll Up ^</a></li>
                    </ul>
                </div> 
      


      <!--<h1 class="cyberpunk glitched" id="glitch">Snippet description</h1>-->




      
    </div>


    </body>

