<?php
include "../config.php";
$category_id = $_GET['id'];
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $sql = "UPDATE `categories` SET `name`='$name' WHERE `id` = '$category_id'";
    $result =  $conn->query($sql);
    if ($result == TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "There was an error";
    }
}


// if (isset($_GET['id'])) {

    $category_id = $_GET['id'];
    $sql = "SELECT * FROM `categories` WHERE `id`='$category_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name =  $row['name'];
            $id =  $row['id'];
        }

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>EDIT DATA</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

        </head>

        <body>
            <div class="container">
                <h1>EDIT CATEGORY</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name ?>" />
                    </div>
              



                    <button type="submit" name="update" value="update" class="btn btn-primary">Update Category</button>
                </form>
            </div>

            <!-- <h1>Hello bootstrap</h1> -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>

<?php
    } else {
        header('Location: create.php');
    }
// }
?>