
<?php

function printTextFile (){
    if(file_exists('includes/courses.txt'))  {
        $coursesTextFile= fopen('includes/courses.txt', 'r');
        while(!feof($coursesTextFile)){
        echo "<li><strong>".fgets($coursesTextFile)."</strong></li>";}
    } else { echo "Filen existerar ej.";}
}

?>