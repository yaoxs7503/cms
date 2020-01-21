<table class="table table-bordered table-hover">

          <thead>
            <tr>
              <th>ID</th>
              <th>作者</th>
              <th>内容</th>
              <th>邮箱</th>
              <th>状态</th>
              <th>回复信息</th>
              <th>时间</th>
              <th>状态</th>
            </tr>

          </thead>

          <?php
$query="SELECT * FROM comments";
$select_comments=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($select_comments)){
  $comment_id=$row['comment_id'];
  $comment_post_id=$row['comment_post_id'];
  $comment_author=$row['comment_author'];
  $comment_email=$row['comment_email'];
  $comment_content=$row['comment_content'];
  $comment_status=$row['comment_status'];
  $comment_date=$row['comment_date'];
          echo"<tbody>";
          echo"<tr>";
          echo"<td>$comment_id</td>";
          echo"<td>$comment_author</td>";
          echo"<td>$comment_content</td>";
// $query="SELECT * FROM categories WHERE cat_id= {$post_category_id}";
// $select_categories_id=mysqli_query($connection,$query);
// while($row=mysqli_fetch_assoc($select_categories_id)){
//   $cat_id=$row['cat_id'];
//   $cat_title=$row['cat_title'];
//   echo "<td>$cat_title</td>";
// }
          // echo"<td>$post_category_id</td>";
          echo"<td>$comment_email</td>";
          echo"<td>$comment_status</td>";


          $query="SELECT * FROM posts WHERE post_id =$comment_post_id ";

          $select_post_id_query=mysqli_query($connection,$query);
          while($row=mysqli_fetch_assoc($select_post_id_query)){
            $post_id=$row['post_id'];
            $post_title=$row['post_title'];
          echo"<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
          }


          echo"<td>$comment_date</td>";
          echo"<td><a href='posts.php?approve={$comment_id}' class='btn btn-warning'>发布</a>
          <a href='posts.php?unapprove={$comment_id}' class='btn btn-primary'>不发布</a>
          <a href='posts.php?delete={$comment_id}' class='btn btn-success'>编辑</a>
          <a href='posts.php?delete={$comment_id}' class='btn btn-danger'>删除</a></td>";
          echo"</tr>";
          echo"</tbody>";
}

?>
</table>
<?php
if(isset($_GET['approve'])){
  $the_comment_id=$_GET['approve'];
$query="UPDATE comments SET comment_status = '审核通过' WHERE comment_id={$the_comment_id}";
  $unapprove_comment_query=mysqli_query($connection,$query);
  header("Location:posts.php");

}
if(isset($_GET['unapprove'])){
  $the_comment_id=$_GET['unapprove'];
$query="UPDATE comments SET comment_status = '审核未通过' WHERE comment_id={$the_comment_id}";
  $unapprove_comment_query=mysqli_query($connection,$query);
  header("Location:posts.php");
}
if(isset($_GET['delete'])){
$the_comment_id=$_GET['delete'];
$query="DELETE FROM comments WHERE comment_id={$the_comment_id}";
$delete_query=mysqli_query($connection,$query);
header("Location:posts.php");
}



?>