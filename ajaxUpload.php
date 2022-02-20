<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$id = $_GET['id'];

echo $id;

   if(isset($_POST['submit'])){
		extract($_POST);
		$error=array();
		$extension=array("jpeg","jpg","png","gif","zip","rar","7zip");
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
		    $file_name=$_FILES["files"]["name"][$key];
		    $file_tmp=$_FILES["files"]["tmp_name"][$key];
		    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

		    if(in_array($ext,$extension)) {
		        if(!file_exists("assets/img/profilePic/".$file_name)) {
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"assets/img/profilePic/".$file_name);
		            $img_src = "assets/img/profilePic/".$file_name;


		            echo  "<script type='text/javascript'>";
					echo "window.close();";
					echo "</script>";
		        }
		        else {
		            $filename=basename($file_name,$ext);
		            $newFileName=$filename.time().".".$ext;
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"assets/img/profilePic/".$newFileName);
		            $img_src = "assets/img/profilePic/".$newFileName;

                    echo  "<script type='text/javascript'>";
					echo "window.close();";
					echo "</script>";
		        }
		    }
		    else {
		        array_push($error,"$file_name, ");
		    }
		}
   }
?>
<html>
   <body>

      <form action="" method="POST" enctype="multipart/form-data">
        <input class="custom-file-imput " type="file" id="myfile" name="files[]" multiple>
         <input type="submit" name="submit" value="submit" />
      </form>

   </body>
</html>