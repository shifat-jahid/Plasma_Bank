<!-- Header Start -->
<?php

if (!isset($_SESSION)) {
    session_start();
}
require "includes/header.php";
require_once "includes/db.php";

require "dashboard_content/admin_dashboard_header.php";

//Read Post
$query = "SELECT * FROM `contact_us`";
$result = mysqli_query($conn, $query);
?>
<!-- Header End -->

<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/admin_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-4">
            <div class="section-header mb-5">
                <h1>Contact Messages</h1>
            </div>
            <?php
            require "includes/success.php";
            ?>
            <div class="dashboard-content pt-2">
                <div class="row">
                    <!-- Fetching all post by the active user Start  -->

                    <table class="table mt-4">

                        <thead class="thead">
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($result as $row) :
                            ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['message'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            endforeach
                            ?>
                        </tbody>

                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="delete" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">Do you really want to delete!!! </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger" href="admin_delete_contact.php?id=<?= $row['id'] ?>">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fetching all post by the active user End -->
</div>

<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->