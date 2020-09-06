<?php

    if(isset ($_POST["upload"])){
        // var_dump($_FILES); //display information of uploaded file
        if (isset($_FILES["file"]) && !$_FILES["file"]["error"]){
            move_uploaded_file($_FILES["file"]["tmp_name"],'./media/'.$_FILES["file"]["name"]);
            echo "uploaded successfully";
        }else{
            echo "error";
        }
    }
?>
<html>

<body>
    <form method="post" action='' enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" name="upload" value="Upload" />
    </form>
</body>

</html>
