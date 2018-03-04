 
<form action="" method="POST" enctype="MULTIPART/FORM-DATA">
 <?php if(isset($erreur)){
        echo "<div class='alert alert-danger'>".$erreur."</div>";
      }?>
  <div class="form-group">
   <div class="form-group">
    <label for="exampleInputPassword1">Nom &amp; Prenom</label>
    <input type="text" name="nom" class="form-control" id="exampleInputPassword1" placeholder="Nom & Prenom">
  </div>
    <label for="exampleInputEmail1">Adresse Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Votre Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de Naissance</label>
    <input type="date" name="datnaiss" class="form-control" id="exampleInputPassword1" placeholder="00/00/0000">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Telephone</label>
    <input type="text" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Telephone">
  </div>
    <div class="form-group">
       <label for="exampleInputPassword1">Sexe:</label>
      <select name="sexe" class="form-control"s>
        <option value="">Sexe:</option>
        <option value="Masculin">Masculin</option>
        <option value="Feminin">Feminin</option>
      </select>
    </div>
  <div class="form-group">
    <label for="exampleInputFile">Choisir une photo</label>
    <input type="file" name="photo" id="exampleInputFile">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox">j'approuve les conditions d'inscription
    </label>
  </div>
  <button type="submit" class="btn btn-primary glyphicon glyphicon-ok"> Valider</button>
</form>