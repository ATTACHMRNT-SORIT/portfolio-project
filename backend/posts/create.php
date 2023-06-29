<?php include "../inc/app.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
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
                                <h3>Add Post</h3>
                                <form method="post" action="addentry.php">
                                    <div class="mb-3">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "portfolio");
                                        if (mysqli_connect_errno()) {
                                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        $sql = "SELECT * FROM categories";
                                        $result = mysqli_query($con, $sql);
                                        ?>
                                        <select id="club" name="category_id">
                                            <option value=""></option>
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
                                    <input type="submit" value="submit" name="submit" class="btn btn-lg btn-success" name="submit" />
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