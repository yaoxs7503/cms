<?php
if(isset($_POST['create_post'])){
$post_title=$_POST['title'];
$post_author=$_POST['author'];
$post_category_id=$_POST['post_category'];
$post_status=$_POST['post_status'];
$post_image=$_FILES['image']['name'];
$post_image_temp=$_FILES['image']['tmp_name'];
// echo $post_image;
// echo $post_image_temp;
$post_tags=$_POST['post_tags'];
$post_content=$_POST['post_content'];
$post_date=date('y-m-d');
// $post_comment_count=4;
// echo $post_date;
move_uploaded_file($post_image_temp,"../images/$post_image");
$query="INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status)";
$query.="VALUES ('{$post_category_id}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";
$create_post_query=mysqli_query($connection,$query);
confirmQuery($create_post_query);

}
?>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title">上传标题</label>
<input type="text" name="title" id="" class="form-control">
</div>


<select name="post_category" id="">
<?php
$query="SELECT * FROM categories"; 
$select_categories=mysqli_query($connection,$query);
confirmQuery($select_categories);
while($row=mysqli_fetch_assoc($select_categories)){
  $cat_id=$row['cat_id'];
  $cat_title=$row['cat_title'];
  echo "<option value='{$cat_id}'>{$cat_title}</option>";
}
?>
</select>

<div class="form-group">
<label for="title">上传作者</label>
<input type="text" class="form-control" name="author" id="">
</div>


<div class="form-group">
<label for="post_status">上传状态</label>
<input type="text" name="post_status" id="" class="form-control">
</div>

<div class="form-group">
<label for="post_image">上传图片</label>
<input type="file" name="image" id="">
</div>

<div class="form-group">
<label for="post_tags">上传标签</label>
<input type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
<label for="post_content">上传内容</label>
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
</div>
<!-- 上传的内容为按钮的内容 -->
<div class="form-group">
  <input type="submit" class="btn btn-primary" name="create_post" value="上传内容" >
</div>
</form>