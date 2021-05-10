<div class="container">

    <div class="row">
    <div class="col-9">
    <h1 class="lead display-4">Tout les plats</h1>
    </div>
    
    <div class="col-3">
    <a class="btn btn-primary mt-4" href="index.php?controller=admin&action=createplat">Ajouter un plat </a>
    </div>

    </div>



    <div class="row mt-5 mb-4">
    


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_p as $c){
        $id = $c->getId();
        $img = $c->getImage();
       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getTitre()."</td>"; 
        echo "<td>".$c->getDescription()."</td>"; 
        echo "<td>" .$c->getPrix()." </td>"; 
        echo "<td class='w-25'> <img class='w-25' src='assets/images/$img'>  </td>"; 
       
        echo "
        <td> <a class='btn btn-info' href='index.php?controller=admin&action=readplat&id=$id'> Modifier </a> </td>
        <td> <a class='btn btn-danger' href='index.php?controller=plat&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";
        
    }

    ?>




  </tbody>
</table>
 
    </div>


</div>


