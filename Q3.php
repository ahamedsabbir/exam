<?php
if(isset($_FILES['fname'])){
    $fileinfo = $_FILES['fname'];
    $allowed = ['application/pdf', 'application/msword', 'image/webp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png'];
    $size =  $fileinfo['size'];
    if(in_array($fileinfo['type'],$allowed) && $size <= 1024*400){
       move_uploaded_file($fileinfo['tmp_name'],"files/".$fileinfo['name']);
       $messaeg = "success!!"; 
    }
    else{
        $messaeg = "check type and size";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>File upload: <?php echo isset($messaeg)?$messaeg:"";?></h1>
    <fieldset>
        <legend>File</legend>
        <form action="" method="post" enctype="multipart/form-data">
        <label style="padding: 5px; border:2px solid gray" for="fname">Select File</label>
        <input type="file" name="fname" id="fname" required style="display:none">
        <hr>
        <input type="submit" value="upload" name="upload">
    </form>
    </fieldset>
</body>
</html>