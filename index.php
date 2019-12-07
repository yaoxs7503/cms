<?php require "includes/db.php"; ?>
<?php
include "includes/header.php";
?>

<body>

    <!-- Navigation -->
    <?php
    include "includes/navigation.php";
    ?>
    <div class="container">
        <!-- Blog Entries Column -->
        <div class="row">
            <!-- Page Content -->
            <div class="col-md-8">
            <?php
            $query = "SELECT * FROM posts";
            $select_posts = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_posts)) {
                $post_title = $row['post_title'];
                ?>
                <!-- First Blog Post -->
                <h2>
                    <a href="#">
                        <?php echo $post_title ?>
                    </a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <?php } ?>

            </div>
            <!-- End col-md-8-->
            <hr />
            <!-- Blog Sidebar Widgets Column -->
        <?php
            include "includes/sidebar.php";
            ?>
            <!--Blog sidebar End-->
        </div>
        <!-- /.row -->
        <?php
        include "includes/footer.php";
        ?>
    </div>
    <!-- /.container -->