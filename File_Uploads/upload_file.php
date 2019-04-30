<!DOCTYPE html>
<html>
  <head>
    <title>File Upload</title>
  </head>
  <body>
    <form action="upload_manager.php" method="post" enctype="multipart/form-data">
      <h3>Upload File</h3>
      <label for="fileSelect">Filename: </label>
      <input type="file" id="fileSelect" name="photo">
      <input type="submit" name="upload" value="Upload"><br><br>
      <p><b>Note: </b> Only .jpg, .jpeg, .gif, .png formats allowed with a max size of 5MB</p>
      <ul>
        <li>Sent File: <?php echo $_FILES['image']['name']; ?></li>
        <li>File Size: <?php echo $_FILES['image']['size']; ?></li>
        <li>File Type: <?php echo $_FILES['image']['type']; ?></li>
      </ul>
    </form>
  </body>
</html>
