<h1>Exercice 1</h1>

<?php
$semaine =array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
?>

<div class="container">
    <table class="table table-striped table-hover">
        <tr>
            <th>Jour</th>
        </tr>
        <?php
        foreach ($semaine as $jour) {
            echo "<tr><td>   $jour </td></tr>";
        }
        ?>



    </table>




</div>

  <h1>Exercice 2</h1>
<?php
$tableau = array();
$tableau["Lundi"] = "école";
$tableau["mardi"] = "école";
$tableau["mercredi"] = "école";
$tableau["jeudi"] = "école";
$tableau["vendredi"] = "école";
$tableau["samedi"] = "maison";
$tableau["dimanche"] = "maison";
?>

<div class="container">

    <table class="table">
        <tr>
            <th>Jour</th>
            <th>Ce que je fais</th>
        </tr>
            <?php
            foreach ($tableau as $key => $valeur){

             echo " <tr>
                         <td>   ".$key."     </td>  
                         <td>   ".$valeur."  </td>
                    </tr>";
            }
            ?>
    </table>
</div>


</div>

<h1>Exercice 3</h1>
<?php
$tableau = array();
$tableau["Lundi"] = "école";
$tableau["mardi"] = "école";
$tableau["mercredi"] = "école";
$tableau["jeudi"] = "école";
$tableau["vendredi"] = "école";
$tableau["samedi"] = "maison";
$tableau["dimanche"] = "maison";
?>

<div class="container">

    <table class="table">


        <tr>
            <th>Semaine</th>
            <th>Jour</th>
            <th>Ceque je fais</th>

        </tr>




                             <?php for ($i=1;$i<5;$i++){

                                ?>
                                 <tr>
                                     <td><?php echo "$i";?> </td>

                                     <?php foreach ($tableau as $key => $valeur){

                                         echo "<td> $key </td>
                                                <td> $valeur </td> ";

                                     } ?>



                                 </tr>


                                 <?php
                             }
                             ?>









    </table>
</div>