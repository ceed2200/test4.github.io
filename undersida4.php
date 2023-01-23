<?php $page_title = "4. Formulär"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Formulär</h2>
    </div>
    <div class="content undersida4-content">
        <h3> Del 1 - Skicka data med GET </h3>

        <?php 
            if (isset($_GET['firstname'], $_GET['lastname'])) {

                if($_GET['firstname'] && $_GET['lastname']) {
	            echo "<p><strong>Hej ". $_GET['firstname']." ".$_GET['lastname']."!</strong></p>";
                } else {echo "<p style='color:red'>Fyll i både förnamn och efternamn!</p>";}
            }
        ?>

        <form method="GET" action="undersida4.php" >
            <label for="firstname">Förnamn:</label>
            <input type="text" id="firstname" name="firstname"><br><br>
            <label for="lastname">Efternamn:</label>
            <input type="text" id="lastname" name="lastname">
            <br>
            <br>
            <input type="submit" value="Skicka in">
            <br>
        </form>
        <br>

        <h3> Del 2 - Skicka data med POST </h3>

        <form method="POST" action="calculate.php" >
            <label for="height">Längd (i meter):</label>
            <input type="number" id="height" name="height"><br><br>
            <label for="width">Bredd (i meter):</label>
            <input type="number" id="width" name="width">
            <br>
            <br>
        <input type="submit" value="Skicka in">
        <br>
        <br>

        <?php 
            if (isset($_POST['height'], $_POST['width'])) {

                if($_POST['height'] && $_POST['width']) {
	            echo "<p><strong>Hej ". $_POST['height']." ".$_POST['width']."!</strong></p>";
                } else {
                echo "<p>Fyll i både längd och bredd!</p>";}
            }
        ?>
        </form>
    </div>
</section>

<?php include("includes/footer.php"); ?>