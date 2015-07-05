<!DOCTYPE html>
<html>
    
    <head>
        <title>Home</title>
        
                
        <!-- this ensures mobile phones don't display desktop versions -->
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <link href="static/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/css/styles.css" rel="stylesheet">

    </head>

    <body>

        <div class="wide"></div>
        
        <div class="wrapper">
        <div class="navbar navbar-inverse">
            
            <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="#">Greening Space</a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a>
                </li>
                <li><a href="#empty_spaces">Empty Spaces</a>
                </li>
                <li><a href="#com_gardens">Community Gardens</a>
                </li>
                <li><a href="#about">About</a>
                </li>
            </ul>
          </div>
        <!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
        <?php
            if ($_GET["find"]==empty_spaces)
                echo "<iframe width='100%' height='520' frameborder='0' src='https://pryor365.cartodb.com/viz/b393cbe0-2221-11e5-9d47-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>";
            else
                echo "<iframe width='100%' height='520' frameborder='0' src='https://pryor365.cartodb.com/viz/b393cbe0-2221-11e5-9d47-0e4fddd5de28/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>";
        ?>
    </div>
        
                <!-- import jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="static/js/bootstrap.js"></script>
        
        
    </body>
    
</html>
