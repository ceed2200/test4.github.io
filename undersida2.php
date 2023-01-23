<?php $page_title = "2. Villkor"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Villkor</h2>
    </div>
    <div class="content undersida2-content">
        <?php
            echo "<p><strong>Datum/klockslag: ".date("Y-m-d:H.i")."</strong></p>"
        ?>

        <?php
            if (date("l")=="Sunday")
            echo "<p><strong>Idag är det söndag.</strong></p>";
            else echo "<p><strong>Idag är det inte söndag.</strong></p>";
        ?>

        <?php
            $current_hour = date("H");
            if ($current_hour >= 6 && $current_hour<9)
            echo "<p><strong>Det är morgon.</strong></p>";
            else if ($current_hour>=9 && $current_hour<12) echo "<p><strong>Det är förmiddag.</strong></p>";
            else if ($current_hour>=12 && $current_hour<18) echo "<p><strong>Det är eftermiddag.</strong></p>";
            else echo "<p><strong>Det är kväll/natt.</strong></p>";
        ?>

        <?php
            $current_weekday = date("l");
            switch($current_weekday){
                case "Monday":
                    echo "<p><strong>Idag är det måndag.</strong></p>";
                    break;
                case "Tuesday":
                    echo "<p><strong>Idag är det tisdag.</strong></p>";
                    break;
                case "Wednesday":
                    echo "<p><strong>Idag är det onsdag.</strong></p>";
                    break;
                case "Thursday":
                    echo "<p><strong>Idag är det torsdag.</strong></p>";
                    break;
                case "Friday":
                    echo "<p><strong>Idag är det fredag.</strong></p>";
                    break;
                case "Saturday":
                    echo "<p><strong>Idag är det lördag.</strong></p>";
                    break;
                case "Sunday":
                    echo "<p><strong>Idag är det söndag.</strong></p>";
            }
        ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>