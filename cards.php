<html>
  <head>
    <meta charset="utf-8">
    <title> MTG Card Search Example </title>
      <!-- 
	      Name: Gregory James Caldwell Jr.
			  Email: Gregory.James.Caldwell@gmail.com || Gregory_Caldwell@student.uml.edu
			  File: Card.php
			  Starting Date: Tuesday August 16th, 2016
			  Updated Last:  Tuesday August 23th, 2016
		  -->
		  
      <!-- Useful Resource -->
      <!-- http://mtgjson.com/ -->

	    <!-- Stylesheets (CSS) -->
        
        <!-- CSS Reset -->
          <link rel='stylesheet'  href="css/cssReset.css" />
		
        <!-- Stylesheet for the card.php -->
          <link rel='stylesheet'  href="css/nav.css" />
          
        <!-- Stylesheet for the card.php -->
          <!--link rel='stylesheet'  href="css/search.css" /-->  
    
	      <!-- Stylesheet for the card.php -->
          <link rel='stylesheet'  href="css/card.css" />
        
        <!-- Stylesheet for the Bootstrap - Sandstone -->
          <link rel='stylesheet'  href="//bootswatch.com/sandstone/bootstrap.min.css" />          
        
        <!-- Stylesheet for the card.php -->
          <!--link rel='stylesheet'  href="css/jquery-ui.css" />
        
        <!-- Google Fonts --> 
          <link href="https://fonts.googleapis.com/css?family=Alegreya|
	        Alegreya+Sans|
		      Cormorant+Garamond|
		      Eczar|
		      Fira+Sans|
		      Libre+Franklin|
		      Playfair+Display|
		      Rubik|
		      Space+Mono|
		      Work+Sans" rel="stylesheet">

	    <!-- Utilities & Scripts -->
	
        <!-- JQuery via Cloud Flare -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script> 
	 
	      <!-- JQuery UI via Cloud Flare -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.js"></script>
        <link rel='stylesheet'  href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.css"/>
	
	      <!-- Bootstrap via Cloud Flare --> 
	      <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
        <link rel='stylesheet'  href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"/>	    

        <!-- DataTables via Cloud Flare -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.js"></script> 
        <link rel='stylesheet'  href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/jquery.dataTables.css"/>

        <!-- Personal Scripts -->
        <script type="text/javascript" src="js/autocomplete.js"></script>
        <script type='text/javascript' src='js/manareplacer.js'></script>

      <!-- Changes the small icon on the page to the image referenced. -->
      <link rel="icon" href="images/mtg_card.jpg">
  </head>
  
  <body>
    
    <header>
      
      <nav>
        <ul>
        
          <li id="Home">
            <p><a href="#"> Home </a></p>
          </li>
          
          <li id="Decks">
            <p><a href="#"> Decks </a></p>
          </li>
          
          <li id="cardSearch">
            <p><a href="#"> Card Search </a></p>
          </li>
          
          <li id="Contact">
            <p><a href="#"> Contact </a></p>
          </li>
          
        </ul>
      </nav> 
    </header>
    
    <div class="container-fluid">
      <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="leftColumn" >
            
          </div>
                
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id="middleColumn" >         
            <div id="mainContainer">
              
              <!-- Header Title -->
              <h3 id="headerTitle"> MTG Card Search Example </h3>
                    
              <div class="ui-widget" style="width: 50%;margin: 0 auto;">
                <form action="" method="get" id="searchBar" >
                  <!-- This search box allows the user to search for specific people in the table. -->
                  <input type="search" name="search" id="search" placeholder="Enter a card..." >
                </form>
              </div>
              
              <?php
              
                # Card to look up.
                $card = $_GET["search"] ;
              
                # Database credentials.
                $username = "mmammoss" ;
                $password = "mm5119" ;
              
                /*
                 * Error report configuration.
                 * Code from Prof. Heines 
                 * https://www.teaching.cs.uml.edu/~heines/91.462/91.462-2014-15s/462-lecs/code/showphpsource.php?file=connect-v4i.php&numberlines
                 */
                 
                error_reporting( E_STRICT ) ;
                function terminate_missing_variabless( $errno, $errstr, $errfile, $errline ) {
                  if (( $errno == E_NOTICE ) and ( strstr( $errstr, "Undefined variable" ) ) ) {
                    die ( "$errstr in $errfile line $errline" ) ;
                  }
                  return false;
                }
                $old_error_handler = set_error_handler( "terminate_missing_variables" ) ;
              
                $db = new mysqli("localhost", $username, $password, $username) ;
                if ( $db->connect_errno > 0 ) {
                  die( '<p>Unable to connect to database [' . $db->connect_error . ']</p>\n' ) ;
                }
              
                if (isset($card)) {
              
                  /*
                   * Fetch the row count from `mtg_cards`.
                   */
                  $card_sql_str = str_replace("'", "\\'", $card) ;
                  $sql = "SELECT * FROM `mtg_cards` WHERE `name` = '" . $card_sql_str . "';" ;
              
                  if ( ! $result = $db->query( $sql ) ) {
                    die( '<p>There was an error running card query [' . $db->error . ']</p>\n' ) ;
                  }
              
                  $card_info = $result->fetch_assoc() ;
                  echo "<div class='row'>\n" ;
                  echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' id='innerLeftColumn'>\n" ;
                  echo "<!-- Name of the Card -->\n<h1 id='cardName'>" . $card_info['name'] . "</h1>\n\n" ;
                  echo "<!-- Image of the Card -->\n<div id='cardImage'>\n<img src=" ;
                  echo '"' ;
                  echo $card_info['image'] ;
                  echo '"' ;
                  echo " height=310 width=220 />\n</div>\n\n" ;
                  echo "</div>\n" ;
                  echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' id='innerRightColumn'>\n" ;
                  echo "<!-- Data on the Card -->\n<div id='cardData'>\n" ;
                  echo "<h2>Color: " . $card_info['colors'] . "</h2>\n" ;
                  echo "<h2>Type: " . $card_info['type'] . "</h2>\n" ;
                  echo "<h2 class='hasMana'>Mana Cost: " . $card_info['mana_cost'] . "</h2>\n" ;
                  echo "<h2 class='hasMana'>Text: " . $card_info['text'] . "</h2>\n" ;
                  echo "<h2>Power: " . $card_info['power'] . "</h2>\n" ;
                  echo "<h2>Toughness: " . $card_info['toughness'] . "</h2>\n" ;
                  echo "</div>\n" ;
                  echo "</div>\n" ;
                  echo "</div>\n" ;
                 
                }
              ?>
              
            </div>
          </div>
          
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="rightColumn" >
            
          </div>
      </div>
    </div>
    
  </body>
</html>