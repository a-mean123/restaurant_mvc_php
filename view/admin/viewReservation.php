<div class="container admin bg-light">

<h1 class="mt-4 text-info">Tous les contacts:</h1>

    <div class="row mt-5 mb-4">
    


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Tel</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Drone</th>
      <th scope="col">nbrp</th>
      <th scope="col">nbrt</th>
      <th scope="col">type</th>




    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_r as $c){
        $id = $c->getId();
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getName()."</td>"; 
        echo "<td>".$c->getTel()."</td>"; 
        echo "<td>".$c->getEmail()."</td>"; 

        echo "<td>".$c->getDate()."</td>";

        echo "<td>".$c->getHeure()."</td>";
        echo "<td>".$c->getDrone()."</td>"; 
        echo "<td>".$c->getNbrp()."</td>"; 
        echo "<td>".$c->getNbrt()."</td>"; 
        echo "<td>".$c->getType()."</td>"; 

        echo "<td> <a class='btn btn-danger' href='index.php?controller=reservation&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";

    }

    ?>




  </tbody>
</table>
 
    </div>


</div>