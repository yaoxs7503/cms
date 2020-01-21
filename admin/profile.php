<?php include "includes/admin_header.php" ?>
<?php
if(isset($_SESSION['username'])){
  $username=$_SESSION['username'];
  $query="SELECT * FROM users WHERE username='{$username}'";
  $select_user_profile_query=mysqli_query($connection,$query);
  while($row=mysqli_fetch_array($select_user_profile_query)){
    $user_id=$row['user_id'];
    $username=$row['username'];
    $user_firstname=$row['user_firstname'];
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
    $user_image=$row['user_image'];
    $user_role=$row['user_role'];
  }
  
}

if(isset($_POST['edit_user'])){
  $user_firstname=$_POST['user_firstname'];
  $user_lastname=$_POST['user_lastname'];
  $user_role=$_POST['user_role'];
  $username=$_POST['username'];
  $user_email=$_POST['user_email'];
  $user_password=$_POST['password'];

  $query="UPDATE users SET ";
  $query.="user_firstname ='{$user_firstname}', ";
  $query.="user_lastname ='{$user_lastname}', ";
  $query.="user_role ='{$user_role}', ";
  $query.="username='{$username}', ";
  $query.="user_email='{$user_email}' ";
  $query.="WHERE username='{$username}'";

  $edit_user_query=mysqli_query($connection,$query);
  confirmQuery($edit_user_query);
}
?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            欢迎查看相关数据
            <small>作者</small>
          </h1>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">姓名</label>
        <input type="text" name="user_firstname" id="" value="<?php echo $user_firstname; ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="post_status">名字</label>
        <input type="text" name="user_lastname" id="" value="<?php echo $user_lastname; ?>" class="form-control">
      </div>
      <div class="form-group">
        <select name="user_role" id="">
<option value='superadmin'>超级管理员</option>
<option value='student'>学生</option>
          <?php
  if($user_role=='admin'){
    echo "<option value='subscriber'>订阅者</option>";
  }else{
    echo "<option value='admin'>管理员</option>";
  }

?>
        </select>
</div>


 <div class="form-group">
        <label for="post_tags">名字</label>
        <input type="text" name="username" id="" value="<?php echo $username; ?>" class="form-control">
      </div>

 <div class="form-group">
        <label for="post_content">邮箱</label>
        <input type="email" name="user_email" id="" value="<?php echo $user_email; ?>" class="form-control">
      </div>

 <div class="form-group">
        <label for="post_content">密码</label>
        <input type="password" name="password" id="" value="<?php echo $user_password; ?>" class="form-control">
      </div>

<!-- 上传的内容为按钮的内容 -->
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="edit_user" value="更新用户" >
</div>


      </div>
    </form>
          
        </div>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php" ?>