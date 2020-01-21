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

            if (isset($_GET['p_id'])) {
                $the_post_id=$_GET['p_id'];
            }
                $query = "SELECT * FROM posts WHERE post_category_id = $the_post_id";
                        
            $select_posts = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_posts)) {
                $post_title = $row['post_title'];
                $post_author=$row['post_author'];
                $post_date=$row['post_date'];
                $post_image=$row['post_image'];
                $post_content=$row['post_content']; ?>
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

            <?php
            } ?>

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
                <!-- Blog Comments -->
                <?php
if (isset($_POST['create_comment'])) {
                $comment_author=$_POST['comment_author'];
                $comment_email=$_POST['comment_email'];
                $comment_content=$_POST['comment_content'];
                $query="INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date) ";
                $query.="VALUES ($the_post_id,
    '{$comment_author}','{$comment_email}','{$comment_content}','未审核',now())";
                $create_comment_query=mysqli_query($connection, $query);
                if (!$create_comment_query) {
                    die('查询失败'.mysqli_error($connection));
                }
                $query="UPDATE posts SET post_comment_count=post_comment_count+1 ";
                $query .="WHERE post_id=$the_post_id ";
                $update_comment_count=mysqli_query($connection,$query);
            }


?>
               <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post">

                        <div class="form-group">
                            <label for="作者">作者</label>
                            <input type="text" class="form-control" name="comment_author" id="">
                        </div>
                        <div class="form-group">
                            <label for="邮箱">邮箱</label>
                            <input type="email" class="form-control" name="comment_email" id="">
                        </div>
                            <div class="form-group">
                            <label for="评论"> 你的评论</label>
                                <textarea id="my-textarea" class="form-control" name="comment_content" rows="3"></textarea>
                            </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">提交</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

             
                <?php
$query="SELECT * FROM comments WHERE comment_post_id={$the_post_id} ";
$query .="AND comment_status='审核通过' ";
$query .="ORDER BY comment_id DESC ";
$select_comment_query=mysqli_query($connection, $query);
if (!$select_comment_query) {
    die('查询失败'. mysqli_error($connection));
}
while ($row=mysqli_fetch_array($select_comment_query)) {
    $comment_date=$row['comment_date'];
    $comment_content=$row['comment_content'];
    $comment_author=$row['comment_author']; ?>

                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <?php echo $comment_author ?>
                            <small><?php echo $comment_date; ?></small>
                        </h4>
                        <?php echo $comment_content ?>
                        <!-- Nested Comment -->
                        <?php
} ?>
                        
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>


    </div>
        <?php
        include "includes/footer.php";
        ?>
    <!-- /.container -->
