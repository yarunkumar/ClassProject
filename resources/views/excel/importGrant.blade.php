

<!DOCTYPE html>
<html>
<head>
    <title>Import Grants</title>
</head>
<body>
<form action="" method="postImport" ecntype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="file" name="grant">
        <input type="submit" value="Import"></input>
</form>
</body>
</html>
