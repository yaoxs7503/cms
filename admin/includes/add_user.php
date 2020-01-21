<?php
if(isset($_POST['create_user'])){
// $user_id=$_POST['user_id'];
echo $user_firstname=$_POST['user_firstname'];
$user_lastname=$_POST['user_lastname'];
$user_role=$_POST['user_role'];
// $user_image_temp=$_FILES['image']['tmp_name'];
// echo $post_image;
// echo $post_image_temp;
$username=$_POST['username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
// $user_date=date('y-m-d');
// $post_comment_count=4;
// echo $post_date;
// move_uploaded_file($post_image_temp,"../images/$post_image");
$query="INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password)";
$query.="VALUES ('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}')";
$create_user_query=mysqli_query($connection,$query);
confirmQuery($create_user_query);

}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">姓</label>
<input type="text" name="user_firstname" id="" class="form-control">
</div>

<div class="form-group">
<label for="lastname">名字</label>
<input type="text" name="user_lastname" id="" class="form-control">
</div>


<select name="user_role" id="">
  <option value="请选择">选择需要的角色</option>
  <option value="admin">管理人员</option>
  <option value="subscriber">订阅人员</option>

</select>

<div class="form-group">
<label for="post_tags">用户名</label>
<input type="text" class="form-control" name="username" id="">
</div>


<div class="form-group">
<label for="post_content">邮箱</label>
<input type="email" name="user_email" id="" class="form-control">
</div>

<div class="form-group">
<label for="post_content">密码</label>
<input type="password" name="user_password" id="" class="form-control">
</div>

<!-- 上传的内容为按钮的内容 -->
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="create_user" value="增加用户" >
</div>
</form>