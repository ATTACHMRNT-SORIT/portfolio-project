<?php include "../inc/app.php"; ?>
<?php
include "../config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO `categories`(`name`) 
  VALUES ('$name')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error during insertion of data";
    }
    $conn->close();
}

?>
<div id="wrapper">
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
                                <h3>Add Category</h3>
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                                    </div>


                                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
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