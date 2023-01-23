<?php $page_title = "4. Formulär"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Formulär - Uträkning av area</h2>
    </div>
    <div class="content calculate-content">
        
        <?php 
            if (isset($_POST['height'], $_POST['width'])) {

                if($_POST['height'] && $_POST['width']) {
	            echo "<p><strong>Längden ". $_POST['height']." meter och bredden ".$_POST['width']." meter ger en area på ".$_POST['height']*$_POST['width']." kvadratmeter.</strong></p>";
                } else {echo "<p>Fyll i längd och bredd</p>";}
            }
        ?>

        <br>
        <a style='color:blue' href="undersida4.php">Gå tillbaka till föregående sida.</a>
        
        </div>
    </section>

<?php include("includes/footer.php"); ?>