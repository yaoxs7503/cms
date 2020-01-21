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

            if (isset($_GET['category'])) {
                $post_category_id=$_GET['category'];
            }
                $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id ";
                        
            $select_posts = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_posts)) {
                $post_title = $row['post_title'];
                $post_author=$row['post_author'];
                $post_date=$row['post_date'];
                $post_image=$row['post_image'];
                $post_content=$row['post_content'];
                ?>
                <!-- First Blog Post -->
                <h2>
                    <a href="#">
                        <?php echo $post_title ?>
                    </a>
                </h2>
                <p class="lead">
                    由 <a href="index.php">
                        <?php echo $post_author ?>
                    </a>
                    填写
                </p>
                <p><span class="glyphicon glyphicon-time"></span>
                <?php echo $post_date ?></p>
            </p> 
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
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