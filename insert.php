<?php
if(!empty($_POST['name']) || !empty($_POST['phone']) || !empty($_FILES['imageup']['name']) || !empty($_POST['typer']) || !empty($_POST['message'])){
    $uploadedFile = '';
    if(!empty($_FILES["imageup"]["type"])){
        $fileName = time().'_'.$_FILES['imageup']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["imageup"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["imageup"]["type"] == "image/png") || ($_FILES["imageup"]["type"] == "image/jpg") || ($_FILES["imageup"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['imageup']['tmp_name'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $typer = $_POST['typer'];
    $message = $_POST['message'];
    echo $name ,  $uploadedFile , $phone  , $typer , $message;
    //include database configuration file
    include_once 'dbConfig.php';
    
    //insert form data in the database

     $query = "INSERT INTO form_data(`name`, `phone`, `file_name`, `typer`, `message`) VALUES ('".$name."','".$phone."','".$uploadedFile."','".$typer."','".$message."')";

     $statement = $connect->prepare($query);

     if($statement->execute())
     {
      echo 'Image save into database';
     }

    
    //echo $insert?'ok':'err';
}