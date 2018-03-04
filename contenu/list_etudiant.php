

<?php 
    include_once("include/connexion.php");
    $sql="SELECT * FROM etudiant";
    $stmt= $connexion->prepare($sql);
    $stmt->execute();
?>
<div class="panel panel-info table-responsive">
            <table class="table table-striped table-condensed table-bordered">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Nom et prenoms</th>
                  <th>Date de Naissance</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Sexe</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php  
                $i=1;
                while($row=$stmt->fetch()){?>
                
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['daten']; ?></td>
                        <td><?php echo $row['telephone'] ;?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['sexe']; ?></td>
                        <td><img src="image/photo/<?php echo $row['photo']; ?>" width="160" height="160"/></td>
                        <td>
                            <a href="modifie_etudiant.php?id=<?php echo $row['id']; ?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="supprime_etudiant.php?id=<?php echo $row['id']; ?>">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                

             <?php  
                                $i++;
            }?>
        
                
              </tbody>
            </table>
             <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
</div>









                       
                 

 