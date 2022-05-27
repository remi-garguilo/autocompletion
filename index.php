<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- import stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
</head>
  <body>
    <header>
      <nav>
        <ul id="nav_bar">
          <li class="nav-links" id="gmail"><a href="#">Gmail</a></li>
          <li class="nav-links"><a href="#">Images</a></li>
          <li id="sign_in"><a href="#">Sign In</a></li>
        </ul>  
      </nav>  
    </header>  
    
    <!-- GOOGLE IMG -->  
    <div class="google">
      <a id="google_logo"><img height="200px" width="400px" src="https://www.pngmart.com/files/16/Google-Logo-PNG-File.png" alt=" photo google-logo_zpspkcztsjo.png"/></a>
    </div>
    
    <!-- FORM SEARCH -->  
    <div class="form">  
      <form action="recherche.php">
        <label for="form-search"></label>

        <input type="text" name="search" id="form-search" placeholder="Search your best model computer">
        <div id="sectionUp"></div>
        <div id="sectionDown"></div>

      </form>
    </div> 
    
    <!-- BUTTONS -->
    <div class= "buttons">
      <input type="submit" value="I'm Feeling Lucky" id="im_feeling_lucky">
    </div>
      
    <!-- FOOTER -->
    <footer>
        <ul class="footer-left">
          <li><a href="#">Advertising</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">About</a></li> 
        </ul>
        <ul class="footer-right">    
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
    </footer>
  </body>
    
</html>