   <?php
function get_image_name($idarticulo)
{
 include('db.php');
 $statement = $connection->prepare("SELECT foto FROM articulo WHERE idarticulo = '$idarticulo'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["foto"];
 }
}
?>
