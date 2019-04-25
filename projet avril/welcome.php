<!--
Into this file, we create a layout for welcome page.
-->

<?php

include_once('header1.php');
require_once('connection.php');
require_once('link.php');
$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<html>
	<head>

	<center>
		<h1>Bienvenue <strong><?php echo " $fname  $lname "  ?></strong></h1>
	</center>

</div>
<div class="col-lg-3 col-md-4 col-sm-12 p-0">
                            <div class="card  hovercard" style="background:#B0D7D8   "> 
                                <div class="view overlay">
                                    <a href="#" > <img class="card-img-top" src="images/2.jpg" alt="maison" width="310px" heigh="220px" style="margin-left:-30px" style="margin-right:80px"> </a>
                                  
                                </div>
                                <i class="fa fa-heart fa-2x" id="add-favori"></i>
                                <span class="badge badge-success" id="statut-maison" style="color:red">En construction</span>
                                <a href="#" class="detail-maison"> <i class="fa fa-chevron-circle-right fa-3x"></i> </a>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa fa-home"></i> Duplex</h5>
                                    <h5 class="price text-center p-1"><i class="fa fa-money-check-alt"></i> </h5>
                                    <hr>
                                    <h6><i class="fa fa-bed"></i> 4 pieces, salle de sport, avec piscine</h6>
                                    <h6><i class="fa fa-map-marker-alt"></i> Port bouet - vridi</h6>
                                </div>

                                <div class="rounded-bottom card-bottom-color text-center p-1"> 
                                    debut le 05/02/2019 - par MYDREAM
                                </div>
                            </div> 
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 p-0">
                            <div class="card  hovercard" style="background:#B0D7D8  "> 
                                <div class="view overlay">
                                    <a href="#" > <img class="card-img-top" src="images/2.jpg" alt="maison" width="310px" heigh="220px" style="margin-left:-30px" style="margin-right:80px"> </a>
                                  
                                </div>
                                <i class="fa fa-heart fa-2x" id="add-favori"></i>
                                
                                <span class="badge badge-success" id="statut-maison"  style="color:#03800B  ">Termine</span>
                                <a href="#" class="detail-maison"> <i class="fa fa-chevron-circle-right fa-3x"></i> </a>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa fa-home"></i> villa,basse</h5>
                                    <h5 class="price text-center p-1"><i class="fa fa-money-check-alt"></i> </h5>
                                    <hr>
                                    <h6><i class="fa fa-bed"></i> 3 pieces, Piscine</h6>
                                    <h6><i class="fa fa-map-marker-alt"></i> Cocody - angre 7em</h6>
                                </div>

                                <div class="rounded-bottom card-bottom-color text-center p-1"> 
                                    debut le 02/04/2019 - par MYDREAM
                                </div>
                            </div> 
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 p-0">
                            <div class="card  hovercard" style="background:#B0D7D8  "> 
                                <div class="view overlay">
                                    <a href="#" > <img class="card-img-top"src="images/2.jpg" alt="maison" width="310px" heigh="220px" style="margin-left:-30px" style="margin-right:80px"> </a>
                                  
                                </div>
                                <i class="fa fa-heart fa-2x" id="add-favori"></i>
                                <span class="badge badge-success" id="statut-maison" style="color:red">En construction</span>
                                <a href="#" class="detail-maison"> <i class="fa fa-chevron-circle-right fa-3x"></i></a>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa fa-home"></i> Duplex, avec piscine</h5>
                                    <h5 class="price text-center p-1"><i class="fa fa-money-check-alt"></i> </h5>
                                    <hr>
                                    <h6><i class="fa fa-bed"></i> 4 pieces, salle de sport</h6>
                                    <h6><i class="fa fa-map-marker-alt"></i> Port bouet - vridi</h6>
                                </div>

                                <div class="rounded-bottom card-bottom-color text-center p-1"> 
                                    debut le 01/01/2019 - par MYDREAM
                                </div>
                            </div> 
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 p-0">
                            <div class="card  hovercard" style="background:#B0D7D8    "> 
                                <div class="view overlay">
                                    <a href="#" > <img class="card-img-top"src="images/2.jpg" alt="maison" width="310px" heigh="220px" style="margin-left:-30px" style="margin-right:80px"> </a>
                                  
                                </div>
                                <i class="fa fa-heart fa-2x" id="add-favori"></i>
                                <span class="badge badge-success" id="statut-maison" style="color:red">En construction</span>
                                <a href="#" class="detail-maison"> <i class="fa fa-chevron-circle-right fa-3x"></i> </a>
                                
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa fa-home"></i> Duplex, avec piscine</h5>
                                    <h5 class="price text-center p-1"><i class="fa fa-money-check-alt"></i> </h5>
                                    <hr>
                                    <h6><i class="fa fa-bed"></i> 3 pieces</h6>
                                    <h6><i class="fa fa-map-marker-alt"></i> Abodo</h6>
                                </div>

                                <div class="rounded-bottom card-bottom-color text-center p-1"> 
                                    debut le 014/05/2018 - par MYDREAM
                                </div>
                            </div> 
						</div>


						
		
</body>
<html>						