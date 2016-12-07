<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Apple Fest Website: Events </title>
        <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
        <link rel="stylesheet" href="styles/styles.css" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>        
        <script src="js/main.js"></script>
    </head>

    <body>
       <div class="titleSection craftTitleSection"> <!-- nav_bar needs to be inside title section div for js animations to work-->
             <div class="nav_bar">
                <ul> <li> <a href="index.html" class="otherPages">HOME</a> </li>
                <li> <a href="events.php" class="otherPages">SCHEDULE OF EVENTS</a> </li>
                <li> <a href="food.php" class="otherPages">FOOD</a> </li>
                <li> <a href="crafts.php" class="currentPage">CRAFT SHOW</a> </li>
                </ul>
            </div> 

             <div class = "appleFestTitle"> 
                <div class = "craftTitle"> CRAFT SHOW </div>
            </div>
        </div>
            <div class="craftList"> <p>There are many fun arts and crafts being sold at the Harvest Festival! <span class = "nextLine"> Here are some of the most popular crafts: </span></p> 
            
        <div class="craftItem">
            <img class="craftImage" src="images/clothing.jpg" alt="Clothing"> <!-- https://www.flickr.com/photos/106103661@N02/15430235036/in/album-72157648366747526/ -->
            <div class="title">Clothing</div>
            <p>The festival will have clothing handmade by local artisans.</p>
        </div>
        

        <div class="craftItem">
            <img class="craftImage" src="images/jewelry.jpg" alt="Jewelry"> <!-- https://www.flickr.com/photos/106103661@N02/15452945212/in/album-72157648366747526/ -->
            <div class="title">Jewelry</div>
            <p>Diverse and unique jewelry is available. </p>
        </div>

        <div class="craftItem">
            <img class="craftImage" src="images/paintings.jpg" alt="Paintings"> <!-- https://www.flickr.com/photos/106103661@N02/10397071653/in/album-72157648008079417/ -->
            <div class="title">Paintings</div>
            <p>Original paintings will be sold.</p>
        </div>

        <div class="craftItem">
            <img class="craftImage" src="images/artPiece.jpg" alt="Art Piece"> <!-- https://www.flickr.com/photos/106103661@N02/10397068263/in/album-72157648008079417/ -->
            <div class="title">Art</div>
            <p>A wide range of art is on display.</p>
        </div>

        <img class="sign" alt = "sign" src="images/craftSign.jpg"> <!--https://www.flickr.com/photos/106103661@N02/21839168830/in/album-72157657274645113/-->
        
    
       </div>  

       <?php include "includes/footer.php" ?> 
    </body>

</html>