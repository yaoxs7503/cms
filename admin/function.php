<?php

function insert_categories(){
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

?>