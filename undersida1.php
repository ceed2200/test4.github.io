<?php $page_title = "1. Variabler"; include("includes/header.php"); ?>

<section>
    <div class="content-intro">
        <h2>Variabler</h2>
    </div>
    <div class="content undersida1-content">
        <?php $creator_name="Cecilia Edvardsson"; $creator_age="34"; $creator_email="ceed2200@student.miun.se"; ?>
        <?php echo "<p><strong>Hej!<br><br> Jag heter ". $creator_name.", är ". $creator_age." år gammal och nås på följande e-post:<br><br> <a style='color:blue' href=mailto:".$creator_email.">ceed2200@student.miun.se</a>.</strong></p>" ?>
    </div>
</section>

<?php include("includes/footer.php"); ?>