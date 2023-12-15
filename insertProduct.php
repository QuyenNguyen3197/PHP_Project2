
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Project 2</title>
</head>
<body>
    <?php
        include "includes/header.php";
    ?>
    <div class="container" style= "width:50%; margin:auto;">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" class="form-control" name="ID" id="ID" placeholder="H23203">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Haru dress">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Haru dress is beautiful... ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="500000">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Insert" name="insert">
                <input class="btn btn-primary" type="reset" value="Reset">
            </div>

    </div>
</body>
</html>