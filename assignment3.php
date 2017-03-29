<?php 
 include 'ParentClass.php';
 include 'ChildClass.php';

 // Specific hobbie.
 $exOne = new ParentClass("Running", "three", "Physical");
 // Game
 $newEx = new ChildClass("Overwatch", "Five", "Mental", "Console", "Pc","2017");
 // Array of images to be displayed.
 $imageArray = array("Images/league.png","Images/overwatch.png","Images/smash.png");
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="assignment3.css" rel="stylesheet">
        <script src="javaScriptFile.js"></script>
    </head>
    <Title>
        The best website ever Assignment 2
    </Title>
    <!-- Start Nav -->
    <nav class="nav">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Fun Page</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
    </nav>
    <!-- End Nav -->
    <!-- Start Body -->
    <body>
        <div class="mainformdiv">
            <div>
                <form class="mainform" id ="mainform" >
                    <div>
                        <?= $exOne; ?> 
                        <br>
                        <?php
                            for ($i = 0; $i < 3; $i++)
                            { 
                                echo "<img src='$imageArray[$i]' style='width:200px; float:right;'> <br>";
                            }
                        ?>
                        <?= $newEx; ?>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <!-- End Body -->
    <!-- Start Footer -->
    <footer class="footerFinal">
            <div class="leftfoot">
                <P>
                    Thanks for vising my website! 
                    <br>
                    Come back soon!
                </p>
            </div>
             <div class= "rightfoot">
                <p>
                    Designed by:
                    <br>
                    David Anderson Inc.
                </p>
            </div>
             <div class = "centerfoot">
               <p> 
                    My Hours:
               </p>
               <P>
                    Monday: 1:00pm - 12:00am.
               </p>
            </div>
        </footer>
        <!-- End Footer -->
</html>