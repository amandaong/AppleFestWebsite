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
       <div class="titleSection eventsTitleSection"> 
            <div class="nav_bar">
                <ul> <li> <a href="index.html" class="otherPages">HOME</a> </li>
                <li> <a href="events.php" class="currentPage">SCHEDULE OF EVENTS</a> </li>
                <li> <a href="food.html" class="otherPages">FOOD</a> </li>
                <li> <a href="crafts.html" class="otherPages">CRAFT SHOW</a> </li>
                </ul>
            </div> 
            
            <div class = "appleFestTitle"> 
                <div class = "eventsTitle"> SCHEDULE OF EVENTS </div>
                <div class = "appleFestSubtitle"> September 29, 2016 - October 2, 2016 </div>
            </div>
      </div>
        <div>
            <div class = "day oddDay"> Thursday 
                <div class = "time"> September 29th</div>
                <div class = "schedule"> 
                    <?php include "scripts/EventsScheduleThursday.php" ?> 
                 </div>
            </div> 
            <div class = "day"> Friday 
                <div class = "time"> September 30th</div> 
                <div class = "schedule"> 
                  <?php include "scripts/EventsScheduleFriday.php" ?> 
                </div>         
            </div>
            <div class = "day oddDay"> Saturday 
                <div class = "time"> October 1st </div> 
                 <div class = "schedule"> 
                  <?php include "scripts/EventsScheduleSaturday.php" ?> 
                </div>  
            </div>
            <div class = "day"> Sunday 
                <div class = "time"> October 2nd</div>
                <div class = "schedule"> 
                  <?php include "scripts/EventsScheduleSunday.php" ?> 
                </div> 
            </div>
        </div>
    </body>
</html>