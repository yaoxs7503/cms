<table class="table table-bordered table-hover">

          <thead>
            <tr>
              <th>编码</th>
              <th>用户名</th>
              <th>姓</th>
              <th>名称</th>
              <th>邮箱</th>
              <th>角色</th>
                          </tr>

          </thead>

          <?php
$query="SELECT * FROM users";
$select_posts=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($select_posts)){
  $user_id=$row['user_id'];
  $username=$row['username'];
  $user_password=$row['user_password'];
  $user_firstname=$row['user_firstname'];
  $user_lastname=$row['user_lastname'];
  $user_email=$row['user_email'];
  $user_image=$row['user_image'];
  $user_role=$row['user_role'];
  // $post_date=$row['post_date'];
          echo"<tbody>";
          echo"<tr>";
          echo"<td>$user_id</td>";
          echo"<td>$username</td>";
          echo"<td>$user_firstname</td>";
// $query="SELECT * FROM categories WHERE cat_id= {$user_category_id}";
// $select_categories_id=mysqli_query($connection,$query);
// while($row=mysqli_fetch_assoc($select_categories_id)){
//   $cat_id=$row['cat_id'];
//   $cat_title=$row['cat_title'];
//   echo "<td>$cat_title</td>";
// }
          // echo"<td>$user_category_id</td>";
          echo"<td>$user_lastname</td>";
          echo"<td>$user_email</td>";
          echo"<td>$user_role</td>";
          // echo"<td>$user_data</td>";
          // echo "<td><img width='100' class='img-responsive' src='../images/{$user_image}' ></td>";
          // echo"<td>$user_comment_count</td>";
          // echo"<td>$user_date</td>";
                    echo"<td><a href='users.php?change_to_admin={$user_id}' class='btn btn-warning'>授权为管理员</a>
          <a href='users.php?delete={$user_id}' class='btn btn-danger'>删除用户</a>
          <a href='users.php?source=edit_user&edit_user={$user_id}' class='btn btn-danger'>编辑用户</a>
          <a href='users.php?change_to_sub={$user_id}' class='btn btn-danger'>普通的权限</a></td>";
          echo"</tr>";
          echo"</tbody>";
}

?>
</table>
<?php
if(isset($_GET['change_to_admin'])){
  $the_user_id=$_GET['change_to_admin'];
  $query="UPDATE users SET user_role='admin' WHERE user_id= $the_user_id";
  $change_to_admin_query=mysqli_query($connection,$query);
  header("Location:users.php");

}


?>
<?php
if(isset($_GET['change_to_sub'])){
  $the_user_id=$_GET['change_to_sub'];
  $query="UPDATE users SET user_role='sub' WHERE user_id= $the_user_id";
  $change_to_admin_query=mysqli_query($connection,$query);
  header("Location:users.php");

}


?>
<?php
if(isset($_GET['delete'])){
$the_user_id=$_GET['delete'];
$query="DELETE FROM users WHERE user_id={$the_user_id}";
$delete_query=mysqli_query($connection,$query);
header("Location:users.php");
}

?>
