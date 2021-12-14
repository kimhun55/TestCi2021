<html>
<head>
<title>Upload Form</title>
</head>
<body>



<form action="<?php echo site_url('main/do_upload');?>" method="POST" enctype="multipart/form-data">

<input type="file" name="fileupload"  />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>