<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Gallery</title>
    <style type="text/css">
    .img-box{
      display: inline-block;
      text-align: center;
      margin: 0 15px;
    }
    </style>
  </head>
  <body>
    <?php
    //Array containing sample image file name.
    $images=array("1.png","2.png","3.png");

    //Loop through array to create image gallery
    foreach($images as $image)
    {
      echo '<div class="img-box">';
      echo '<img src="images/'.$image.'" width="200" alt="'.pathinfo($image,PATHINFO_EXTENSION).'">';
      echo '<p><a href="download.php?file='.urlencode($image).'">Download</a></p>';
      echo '</div>';
    }
     ?>
  </body>
</html>
