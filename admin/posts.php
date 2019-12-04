<?php include "includes/admin_header.php" ?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to admin
            <small>Subheading</small>
          </h1>
          <ol class="breadcrumb">
            <li>
              <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
              <i class="fa fa-file"></i> Blank Page
            </li>
          </ol>
        </div>
      </div>
      <div class="col-lg-12">

        <h1 class="page-header">
          Welcome to admin
          <small>Author</small>
        </h1>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Post ID</th>
              <th>Author</th>
              <th>Title</th>
              <th>Category</th>
              <th>Status</th>
              <th>Image</th>
              <th>Tags</th>
              <th>Comments</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>

          <?php
$query="SELECT * FROM posts";
$select_posts=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($select_posts)){
  $post_id=$row['post_id'];
  $post_author=$row['post_author'];
  $post_category_id=$row['post_category_id'];
  $post_status=$row['post_status'];
  $post_image=$row['post_image'];
  $post_tags=$row['post_tags'];
  $post_comment_count=$row['post_comment_count'];
  $post_date=$row['post_date'];
  echo $post_date;
  echo "<tr></tr>";
}

?>
            <tr>
              <td>10</td>
              <td>Edwin Diaz</td>
              <td>Bootstrap framework</td>
              <td>Bootstrap</td>
              <td>Status</td>
              <td>Image</td>
              <td>Tags</td>
              <td>Comments</td>
              <td>Date</td>
            </tr>
          </tbody>
        </table>

      </div> <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php" ?>