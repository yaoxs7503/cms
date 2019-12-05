<?php
function confirmQuery($result){
  global $connection;
  if(!$result){
    die("查询失败".mysqli_error($connection));
  }
};
function insert_categories()
{
  global $connection;
  if (isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];
    if ($cat_title == "" || empty($cat_title)) {
      echo "这个表格不可以为空";
    } else {
      $query = "INSERT INTO categories(cat_title) VALUES ('{$cat_title}') ";
      $create_category_query = mysqli_query($connection, $query);
      if (!$create_category_query) {
        die('查询失败' . mysqli_error($connection));
      } else {
        echo "添加成功";
      }
    }
  }
}

function findAllCategories()
{
  global $connection;
  $query = "SELECT * FROM categories";
  $select_categories_sidebar = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href=
 'categories.php?delete={$cat_id}'>删除</a></td>";
    echo "<td><a href=
 'categories.php?edit={$cat_id}'>更新</a></td>";
    echo "</tr>";
  }

}
                

function deleteCategories(){
  global $connection;
if (isset($_GET['delete'])) {
                    $the_cat_id = $_GET['delete'];
                    $query = "DELETE FROM categories WHERE cat_id={$the_cat_id} ";
                    $delete_query = mysqli_query($connection, $query);
                    header("Location: categories.php");
                  }
}
?>
