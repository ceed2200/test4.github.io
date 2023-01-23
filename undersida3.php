<?php $page_title = "3. Upprepningar"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Upprepningar</h2>
    </div>
    <div class="content">
        <div class="grid-container-undersida3"> 
            <div class="undersida3-grid-part-1">
                <h3>Del 1</h3>

                <?php

                for ($i=10; $i>0; $i--) {
                 echo "<p><strong>".$i."</strong></p>";
                 };

                ?>

            </div>



            <div class="undersida3-grid-part-2">
                <h3>Del 2</h3>

                <?php
                $courses_firstyear = array("Webbutveckling I", 
                                        "Introduktion till programmering i JavaScript", 
                                        "Grafisk teknik för webb",
                                        "Webbanvändbarhet",
                                        "Databaser",
                                        "Webbutveckling II",
                                        "Webbdesign för CMS",
                                        "Webbutveckling III");
                ?>

                <ul class="array">                         
    
                    <?php
                        foreach ($courses_firstyear as $value) {
                        echo "<li><strong>".$value."</strong></li>";
                        };

                    ?>

                </ul>   
            </div>
            <div class="undersida3-grid-part-3">
                <h3>Del 3</h3>
    
                <?php 
                    sort($courses_firstyear);
                ?>

                <ol class="array">                         
                    
                    <?php
                        foreach ($courses_firstyear as $value) {
                        echo "<li>".$value."</li>";
                        };

                    ?>

                </ol>  
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>