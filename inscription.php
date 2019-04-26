<?php

$fname = $lname = $email = $descript = $phone= "";
$fnameErr = $lnameErr = $emailErr = $descriptErr = $phoneErr= "";

require "admin/constbd.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);

    $errors=[];

   if (empty($fname)) {
		$errors[]= "Ton PRENOM s'il te plait ^_^";
	}

	if (empty($lname)) {
		$errors[] = "Ton NOM ^_^";
	}

	if (empty($email)) {
   		$errors[] = "Ton EMAIL s'il te plait ^_^";
  	}
	
	  if (empty($phone)) {
		$errors[] = "Ton contact s'il te plait ^_^";
   	}
	
  	if (empty($descript)) {
		$errors[] = "Laissez-nous une indication ^_^";
  	}


  	if(count($errors)==0){
       
       $req=$connect->prepare("INSERT INTO clientInfo(nom,prenoms,email,habitat,phone) VALUES(?,?,?,?,?)");
       $req->execute([
						$fname,
						$lname,
						$email,
						$habitat,
						$phone
                  	]);

		$req=$connect->prepare("INSERT INTO clientServ(typServ,descript) VALUES(?,?)");
		$req->execute([
						$typServ,
						$descript	
					]);
  	}



 }

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<title>inscription</title>
</head>
<body>
	<div class=" container main-page">
		<?php if(count($errors)!=0) { ;?>
            <?php foreach ($errors as $error) {  ?>
            	<div class="container">
            		<div class="alert alert-danger" role="alert">
                        <strong>Erreur!</strong><?php echo $error; ?>
                    </div>
                 </div>  

	        <?php } ?>
	            <?php } ?>

		<form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

			<fieldset class="form-group">
				<!-- <legend>Personal Information:</legend> -->
				<h2>Name</h2>
				<div class="row">				
				  	<div class="form-group col-md-4">
					  <input type="text" class="form-control" name="lname"value="<?php echo $lname;?>"> 
					    <span class="error"><?php echo
					    $lnameErr;?></span>
					    <h3>Last</h3>  
				 	</div>

				 	<div class="form-group col-md-6">
					    <input type="text" class="form-control" name="fname"value="<?php echo $fname;?>">
					    <span class="error"><?php echo $fnameErr;?></span>
					    <h3>First</h3>			   
				 	</div>
			 	</div>
			 	
				<h2>Your mail</h2>
			 	<div class="form-group row">
				    <div class="col-md-8">
				      	<input type="email" class="form-control" name="email"value="<?php echo $email;?>">
				      	<span class="error"><?php echo $emailErr;?></span>
				    </div>
				</div>

				<h2>Your contact</h2>
			 	<div class="form-group row">
				    <div class="col-md-6">
				      	<input type="tel" class="form-control" name="phone" placeholder="format: 1111-1111" pattern="[0-9]{4}-[0-9]{4}" value="<?php echo $phone;?>">
				      	<span class="error"><?php echo $phoneErr;?></span>
				    </div>
				</div>

			</fieldset>
			<div class="form-inline">
				<label for="habitat"> Your Locality</label>
				<select class="col-md-5" name="habitat" class="form-control">
				  	<option value="Abidjan">Abidjan</option>
				  	<option value="Yakro">Yakro</option>
				  	<option value="Bouaké">Bouaké</option>
				  	<option value="korhogo">korhogo</option>
				  	<option value="Odiene">Bassam</option>
				  	<option value="San Pédro">San Pédro</option>
				  	<option value="Gagnoa">Gagnoa</option>
				</select>
			</div>
			
			<label for="typServ">Your Services</label>
			<select id="typServ" class="form-control col-md-6" name="typServ">
			    <optgroup label="Main-d'oeuvre">
			        <option>Architecte</option>
					<option>Maçon</option>
					<option>Plombier</option>
					<option>Menuisier</option>
					<option>Peintre</option>
					<option>Démarcheur</option>
					<option>Electricien</option>
					<option>Conseiller</option>
			    </optgroup>
			</select>
			<h3>Your Description</h3>
			 <div class="form-group row">
			    <label for="descript"></label>
				<textarea class="col-md-8" rows="5" cols="50" name="descript" value="<?php echo $descript;?>" placeholder="expliquez-nous votre problème!"></textarea>
				<span class="error"></span>
			</div>

  			<input type="submit" class="btn btn-success btn-md"  onclick="alert('Etes-Vous sur de valider votre transaction ?')" value= "VALIDATE">
		</form>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>