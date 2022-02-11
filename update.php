<?php 
	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>pizza</title>
     <meta name="description" content="Description">
     <meta name="keywords" content="Keywords" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Cache-Control" content="max-age=31536000">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" type="text/css" href="./css/main.css"> -->
 </head>

 <style>
 	body {
 		min-width: 100vw;
 		min-height: 100vh;
 	}
 	.center {
 		height: 100vh;
 		display: flex;
 		align-items: center;
 		justify-content: center;
 	}
 </style>
 <body>

 	<div class="center">
 		<div class="col-md-4">
 			<div class="row">
 				<label>Formaten</label>
 				<select class="form-control" name="formaat" required>
 					<option <?if($_POST["formaat"] == 20){echo selected;}?>20</option>
 					<option <?if($_POST["formaat"] == 25){echo selected;}?>25</option>
 					<option <?if($_POST["formaat"] == 30){echo selected;}?>30</option>
 					<option <?if($_POST["formaat"] == 35){echo selected;}?>35</option>
 					<option <?if($_POST["formaat"] == 40){echo selected;}?>40</option>
 				</select>
 				<label>Sauzen</label>
 				<select class="form-control" name="saus" required>
 					<option<?if($_POST["saus"] == "tomantensaus"){echo selected;}?>Tomaten saus</option>
 					<option<?if($_POST["saus"] == ""){echo selected;}?>Extra tomaten saus</option>
 					<option<?if($_POST["saus"] == ""){echo selected;}?>Spicy tomatewnsaus</option>
 					<option<?if($_POST["saus"] == ""){echo selected;}?>bbq saus</option>
 					<option<?if($_POST["saus"] == ""){echo selected;}?>creme fraiche</option>
 				</select>
 				<label>Toppings</label>
 				<div class="form-check">
  					<input class="form-check-input" type="radio" name="topping">
  					<label class="form-check-label">
    					Topping
  					</label>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="radio" name="topping2">
  					<label class="form-check-label">
    					Topping
  					</label>
				</div>
				<div class="form-check">
  					<input class="form-check-input" type="radio" name=topping3>
  					<label class="form-check-label">
    					Topping
  					</label>
				</div>
				<label>Kruiden</label>
				<div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden">
					<label class="form-check-label">
					    kruiden
					</label>
				</div>
				<div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden2">
					<label class="form-check-label">
					    kruiden
					</label>
				</div><div class="form-check">
 					<input class="form-check-input" type="checkbox" name="kruiden3">
					<label class="form-check-label">
					    kruiden
					</label>
				</div>
				<button class="btn btn-block btn-info" type="submit" name="submit">Update</button>
 			</div>
 		</div>
 	</div>
 
 <!-- <script src="./js/main.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 </body>
 </html>