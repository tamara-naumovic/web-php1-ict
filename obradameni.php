<?php
include("control/Controler.php");
$ctrl = Controler::getInstance();

$meni_array = array();

session_start();

if(!empty($_SESSION['loggeduser'])):
    if($_SESSION['loggeduser'][1]=="1"):
        $meni = $ctrl->getMeniAdmin();
        while($row=$meni->fetch_object()):
            $pom = array("href"=>$row->link,"textLink"=>$row->naziv_linka);
            $meni_array[]=$pom;
        endwhile;
        echo json_encode($meni_array);
    elseif($_SESSION['loggeduser'][1]=="2"):
        $meni = $ctrl->getMeniUser();
        while($row=$meni->fetch_object()):
            $pom = array("href"=>$row->link,"textLink"=>$row->naziv_linka);
            $meni_array[]=$pom;
        endwhile;
        echo json_encode($meni_array);
    else:
        $meni = $ctrl->getMeniStandard();
        while($row=$meni->fetch_object()):
            $pom = array("href"=>$row->link,"textLink"=>$row->naziv_linka);
            $meni_array[]=$pom;
        endwhile;
        echo json_encode($meni_array);
    endif;
else:
    $meni = $ctrl->getMeniStandard();
    while($row=$meni->fetch_object()):
        $pom = array("href"=>$row->link,"textLink"=>$row->naziv_linka);
        $meni_array[]=$pom;
    endwhile;
    echo json_encode($meni_array);
endif;
?>
