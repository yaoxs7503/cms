 <?php
if(isset($_GET['edit_user'])){
  $the_user_id=$_GET['edit_user'];
  $query="SELECT * FROM users WHERE user_id = $the_user_id";
  $select_user_query=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($select_user_query)){
    $user_id=$row['user_id'];
    $username=$row['username'];
    $user_password=$row['user_password'];
    $user_firstname=$row['user_firstname'];
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
    $user_image=$row['user_image'];
    $user_role=$row['user_role'];

  }
  
}
if(isset($_POST['edit_user'])){
  $user_firsname=$_POST['user_firstname'];
  $user_lastname=$_POST['user_lastname'];
  $user_role=$_POST['user_role'];
  $username=$_POST['username'];
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];
  
  $query="UPDATE users SET "; 
  $query.="user_firstname ='{$user_firstname}',";
$query.="user_lastname ='{$user_lastname}',";
$query.="user_role='{$user_role}',";
$query.="username='{$username}',";
$query.="user_email='{$user_email}',";
$query.="user_password='{$user_password}' ";
$query.="WHERE user_id = '{$the_user_id}' ";

$edit_user_query=mysqli_query($connection,$query);
confirmQuery($edit_user_query);

}

?>
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="title">姓名</label>
<input type="text" name="user_firstname" id="" class="form-control" value="<?php echo $user_firstname; ?>">
</div>

<div class="form-group">
<label for="title">名字</label>
<input type="text" name="user_lastname" id="" class="form-control" value="<?php echo $user_lastname; ?>">
</div>

<div class="form-group">
<label for="title">用户</label>
<input type="text" name="username" id="" class="form-control" value="<?php echo $username; ?>">
</div>


<div class="form-group">
<label for="title">邮件</label>
<input type="email" name="user_email" id="" class="form-control" value="<?php echo $user_email; ?>">
</div>

<div class="form-group">
<select name="user_role" id="">
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
<label for="title"></label>
<input type="password" name="user_password" id="" class="form-control" value="<?php echo $user_password; ?>">
</div>

<div class="form-group">
  <input type="submit" class="btn btn-primary" name="edit_user" value="更新用户" >
</div>
</form>