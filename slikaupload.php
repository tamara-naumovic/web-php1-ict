<?php
if (($_FILES['slikaUpload']['name']!="")){
    // Gde storujemo
     $target_dir = "images/";
     $file = $_FILES['slikaUpload']['name'];
     $path = pathinfo($file);
     $filename = $_POST["nazivSlike"];
     $ext = $path['extension'];
     $temp_name = $_FILES['slikaUpload']['tmp_name'];
     $path_filename_ext = $target_dir.$filename.".".$ext;
    // Da li fajl vec postoji
    if(file_exists($path_filename_ext)) {
        include("control/Controler.php");
        $ctrl = Controler::getInstance();
        $slika = $ctrl->getPoslednjaSlikaID();
        $row=$slika->fetch_object();
        $id = strval(intval($row->id)+1);
        $filename = $id.$_POST["nazivSlike"];
        $path_filename_ext = $target_dir.$filename.".".$ext;
     }
     echo $path_filename_ext;
     move_uploaded_file($temp_name,$path_filename_ext);
     $slikainsert = $ctrl->insertSlika(["'$path_filename_ext'","'$filename'"]);
    //  print_r($slikainsert); 
     header('Location: admin.php');
     
    }
?>
