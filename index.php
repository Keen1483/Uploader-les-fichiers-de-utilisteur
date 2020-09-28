<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="traitment.php" method="POST" enctype="multipart/form-data">
        <p>
            <fieldset>
                <legend>Upload an image file</legend>
                <input type="file" name="myImage">
            </fieldset>
            <input type="submit" value="Enregistrer">  <input type="reset" value="Rénitialiser">
        </p>
    </form>
</body>
</html>