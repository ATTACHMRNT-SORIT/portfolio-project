<?php include "../inc/app.php"; ?>

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
                                    <textarea id="summernote" name="entry"></textarea>
                                    <input type="submit" value="submit" class="btn btn-lg btn-success" name="submit" />
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
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>