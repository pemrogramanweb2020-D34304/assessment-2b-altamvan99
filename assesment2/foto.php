<!DOCTYPE html>
<html>
<head>
	<title>Foto</title>
</head>
<body>
<form name="visi" method="post" action="posting.php" enctype="multipart/form-data">

Gambar<br>
<img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
<input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
<br><br>
<input type="submit" width="120" height="24" name="simpan" value="Submit" >
</form>
</body>
</html>