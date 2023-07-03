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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Contact Messages</h6>
                    </div>
                    <?php
                    $db = mysqli_connect("localhost", "root", "", "portfolio");
                    $query = " SELECT * from contacts ";
                    $result = mysqli_query($db, $query);

                    ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                    ?>

                                            <tr>
                                                <th scope="row"><?php echo $row['id']; ?></th>
                                              
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['subject']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                      

                                                <td>
                                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                    <?php }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->
</div>