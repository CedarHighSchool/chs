<?php
include("../../assets/inc/headtag.php");
$year = $_POST['year'];
$yearStart = $_POST['yearStart'];
$quarter = $_POST['quarter'];
$group = $_POST['group'];

$target_dir = "../../gallery/sample/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$uploaded = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    //Check if already exits
    
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        //header("location: //eth189hunt.host-gsoft.ga/MagicTGathering/addCards.php?upload=error");
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        $uploaded = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        $uploaded = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //header("location: upload.php?yearStart=" . $yearStart);
        $uploadOk = 0;
        $uploaded = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if($uploaded == 1){
    	
		
		
	    if ($uploadOk == 0) {
	        echo "Sorry, your file was not uploaded.";
	        header("location: /db/gallary/upload.php?yearStart=" . $yearStart);
	    // if everything is ok, try to upload file
	    } else {
	        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $photoUrl = "/gallery/sample/" . basename($_FILES["file"]["name"]);
            if($group == ""){
                $group = 0;
            }
            if($quarter == ""){
                $quarter = 0;
            }
            $res = mysqli_stmt_init($mysqli);
            mysqli_stmt_prepare($res, "INSERT INTO `photoAll` (`photoUrl`, `group`, `quarter`, `yearId`) VALUES (?, ?, ?, ?);");
            mysqli_stmt_bind_param($res, "siii", $photoUrl, $group, $quarter, $year);
            mysqli_stmt_execute($res);
            print_r($res['error_list']);
	        	
	            
	            $uploaded = 1;
	            
	            
	        } else {
	            
	            $uploaded = 0;
	        }

	    }
    }
}?>
<button><a href="upload.php">Upload More</a></button>
<button><a href="quarters.php?yearStart<?=$yearStart?>">See Year</a></button>