<?php
    include ('../../connect_db.php');
    	$v1=$_GET['idarticulo']; echo "" . $v1; 
$result = $con->prepare("SELECT * FROM articulo where idarticulo='$v1'");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['idarticulo'];			
				
				?>

<!DOCTYPE html>
<html>
<head>


		<!-- Latest compiled and minified CSS -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->


<!-- Latest compiled and minified JavaScript -->
	<title></title>
</head>
<body>
	<div id="myModal<?php  echo $v1; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							
										<!-- Modal -->
							<div class="col-md-12" center>
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>

							<div class="modal-body">
							<div class="alert alert-danger">
						
			
							<?php if($row['foto'] != ""): ?>
							<img class="img-thumbnail" src="../../articulos/<?php echo $row['foto']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php endif; ?>
							<form action="edit_PDO.php<?php echo '?idarticulo='.$v1; ?>" method="post" enctype="multipart/form-data">
							<div style="color:blue; margin-left:150px; font-size:30px;">
								<input type="file" name="image" style="margin-top:-115px;">
							</div>
							
							</div>
							<hr>
							<div class="modal-footer">
							<button  class="btn btn-inverse" type="reset" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							
							</div>
							</div>
							</div>
								<?php } ?>

								<br>
								<br>

                        <button type="submit" name="submit" class="btn btn-danger">volver</button>


          
        </div>
        </div>
        </div>
    




    </div>
</body>
</html>