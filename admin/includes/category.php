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
