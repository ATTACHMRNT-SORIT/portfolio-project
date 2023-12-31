<?php include "../inc/app.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<div id="wrapper">
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




<?php
include "../config.php";
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $category = $_POST['category_id'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../uploads/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "portfolio");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO blogs (image, title, content, description, category_id) VALUES ('$filename', '$title', '$content','$description','$category')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>



    <!-- Sidebar -->
    <?php include "../inc/sidebar.php"; ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->


            <?php include "../inc/header.php"; ?>

            <!-- End of Topbar -->
            <div class="container-fluid">

                <!-- Content Row -->
                <div class="row">
                    <div class="container">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <h3>Add Post</h3>
                                <form method="post"  action="" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "portfolio");
                                        if (mysqli_connect_errno()) {
                                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        $sql = "SELECT * FROM categories";
                                        $result = mysqli_query($con, $sql);
                                        ?>
                                        <select id="club" name="category_id" class="form-select">
                                            
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<option value=' . $row['id'] . '>' . $row['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Select image</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description" id="description">
                                    </div>
                                    <textarea id="summernote" name="content"></textarea>
                                    <input type="submit" value="submit" name="upload" class="btn btn-lg btn-success" name="submit" />
                                </form>
                                <!-- <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                       
                       
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> -->
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->
</div>
<script>
    $('#summernote').summernote({
        placeholder: 'Create Post',
        tabsize: 2,
        height: 100
    });
</script>