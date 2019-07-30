<?php

    //include database configuration file
    include_once 'dbConfig.php';

$query = "SELECT * FROM form_data ORDER BY id DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="row">
	  <div class="col s12 m3 widimage" style="margin-bottom:16px;">
	   <img src="uploads/'.$row['file_name'].'" class="img-thumbnail" />
	  </div>
	   <div class="col s12 m9" style="margin-bottom:16px;">
	   <h2>'.$row['name'].'</h2>
	   <p>'.$row['phone'].'</p>
	   <p>'.$row['typer'].'</p>
	   <p>'.$row['message'].'</p>
	  </div>
  </div>
  <div class="row">
	  <button onclick="del('.$row['id'].');return false;" class="btn btn-red">احذف</button>
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;

?>