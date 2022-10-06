<h1>Exercice n°1</h1>
<?php

for ($i=1;$i<=10;$i++){
   echo "--- Ceci est la ligne n° $i" ;
   ?>
   </br>
<?php
}
?>
<br>
<br>


<h1>Exercice n°2</h1>
<?php

for ($i=1;$i<=10;$i++){
    echo "<ul><li>ceci est la ligne N°.$i.</li></ul>";
}
?>
<br>
<br>



<h1>Exercice n°3</h1>
<table class="table">
    <tr>
        <th>#</th>
        <th>Libellé</th>
    </tr>

    <?php
    for ($i=1;$i<=10;$i++){
        echo '<tr><td>  '.$i.' </td>    <td> Ceci est la ligne n°'.$i.'</td>          </tr> ';

    }
    ?>

</table>
<br>


<h2>Version tableau</h2>
<table class="table">

    <tr>
        <th>#</th>
        <th>Libellé</th>
    </tr>
    <tr>
        <td>
            <?php
            $tableau=array();
            $tableau[1] = 1;
            $tableau[2] = 2;
            $tableau[3] = 3;
            $tableau[4] = 4;
            $tableau[5] = 5;
            $tableau[6] = 6;
            $tableau[7] = 7;
            $tableau[8] = 8;
            $tableau[9] = 9;
            $tableau[10] = 10;
            foreach($tableau as $mavar){

                echo $mavar ;
                ?>
                <br>
                <?php
            }

            ?>
        </td>
        <td>
            <?php
            $tableau=array();

            $tableau[1] = "Ceci est la ligne N°1";
            $tableau[2] = "Ceci est la ligne N°2";
            $tableau[3] = "Ceci est la ligne N°3";
            $tableau[4] = "Ceci est la ligne N°4";
            $tableau[5] = "Ceci est la ligne N°5";
            $tableau[6] = "Ceci est la ligne N°6";
            $tableau[7] = "Ceci est la ligne N°7";
            $tableau[8] = "Ceci est la ligne N°8";
            $tableau[9] = "Ceci est la ligne N°9";
            $tableau[10] = "Ceci est la ligne N°10";

            foreach($tableau as $mavar){

                echo $mavar ;
                ?>
                <br>
                <?php
            }

            ?>
        </td>
    </tr>
</table>
<h1>Exercice 4</h1>
<table class="table">
    <tr>
        <th>#</th>
        <th>Libellé</th>
    </tr>

    <?php
    for ($i=1;$i<=10;$i++){

        if ($i%2 ==0){
            echo '<tr class="text-success"> <td >  '.$i.' </td>    <td> V Ceci est la ligne n°'.$i.'  </td>          </tr> ';
        }else{
            echo '<tr class="text-danger"> <td>  '.$i.' </td>    <td> R Ceci est la ligne n°'.$i.'   </td>          </tr> ';
        }


    }
    ?>

</table>
