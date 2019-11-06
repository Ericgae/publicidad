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
	<title></title>
</head>
<body>
	<div id="myModal<?php  echo $v1; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							
										<!-- Modal -->
							
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>

							<div class="modal-body">
							<div class="alert alert-danger">
						
			
							<?php if($row['foto'] != ""): ?>
							<img src="../../articulos/<?php echo $row['foto']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php endif; ?>
							<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                            </tbody>
                        </table>


          
        </div>
        </div>
        
    




    </div>
</body>
</html>