<<?php
// Include the database configuration file
require_once "../config/config.php";
echo "Hello world!<br />";



// File upload path
$targetDir = "https://not4you.se/uploads/";
$fileName = basename($_FILES["file"]["name"]);
$statusMsg = '';
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

echo "post: ";
echo $_POST["submit"];
echo "<br /> File: ";
echo $_FILES["file"]["name"];
echo "<br />";
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    echo "Submit!<br />";
    $allowTypes = array('.bin','.ino','.esp32');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into binFiles (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, bin files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

