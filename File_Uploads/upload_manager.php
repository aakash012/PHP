<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0)
  {
    $allowed=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
    $filename=$_FILES["photo"]["name"];
    $filetype=$_FILES["photo"]["type"];
    $filesize=$_FILES["photo"]["size"];

    //verify file extension
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if(!array_key_exists($ext,$allowed)) die("Error: Please select a valid file extension ");

    //verify file mcrypt_enc_get_supported_key_sizes
    $maxsize=5*1024*1024;
    if($filesize>$maxsize) die("Error: File Size must be below 5MB ");

    //Verify MYME type of the get_included_files
    if(in_array($filetype,$allowed))
    {
      //check whether file exists before uploading it
      if(file_exists("images/".$filename))
      {
        echo $filename." already exists";
      }
      else
      {
        move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".$filename);
        echo "Your File was uploaded successfully";
      }
    }
    else
    {
      echo "Error: There was a problem uploading your file. Please try again!!!";
    }
  }
  else
  {
    echo "Error: ".$_FILES["photo"]["error"];
  }
}
?>
