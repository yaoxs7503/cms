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
            <small>Author</small>
          </h1>
          <div class="col-xs-6">

            <?php
           insert_categories(); 

            ?>

<?php
deleteCategories()?>

            <form action="" method="post">
              <div class="form-group">
                <label for="cat-title">
                  加入分类
                </label>
                <input type="text" class="form-control" name="cat_title">
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="加入分类">
              </div>
            </form>
            <form action="" method="post">
              <div class="form-group">
                <label for="cat-title">
                  更新分类
                </label>
            <?php
            if (isset($_GET['edit'])) {
              $cat_id = $_GET['edit'];
            $query = "SELECT * FROM categories WHERE cat_id = '{$cat_id}'";
              $select_categories_id = mysqli_query($connection, $query);
              while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                ?>
                <input value="<?php isset($cat_title) ?print $cat_title : 'null';?>" type="text" class="form-control" name="cat_title">
              <?php  }} ?>
        
<?php
// UPDATE QUERY
if(isset($_POST['update_category'])){
  $the_cat_title=$_POST['cat_title'];
  $the_cat_id=$_GET['edit'];
$query="UPDATE categories SET cat_title='{$the_cat_title}' WHERE cat_id ='{$the_cat_id}'";
$update_query=mysqli_query($connection,$query);
if(!$update_query){
  die("更新失败".mysqli_error($connection));
}
header("Location: categories.php");
}




?>
              </div>
              <div class="form-group" method="post">
                <input class="btn btn-primary" type="submit" name="update_category" value="更新">
              </div>
            </form>
          </div>
          <div class="col-xs-6">
            <table class="table table-bordered table-hover">
              <thread>
                <tr>
                  <th>Id</th>
                  <th>Category Title</th>
                </tr>
              </thread>
              <tbody>
            <?php
            findAllCategories();
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>