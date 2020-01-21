<div class="col-md-4">
<!-- Login -->
                <div class="well">
                    <h4></h4>
    <form action="includes/login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="输入用户名">
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="" placeholder="输入密码" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" name="login" type="submit">登录</button>
                        </span>
                    </div>
                </form>
                    <!-- /.input-group -->
                </div>


                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                           <ul class="list-unstyled">
                               <?php
$query = "SELECT cat_id,cat_title FROM categories";
$select_categories_sidebar= mysqli_query($connection, $query);
while($row=mysqli_fetch_assoc($select_categories_sidebar)){
    $cat_title=$row['cat_title'];
    $cat_id=$row['cat_id'];
    echo "<li><a href='category.php?category={$cat_id}'>{$cat_title}</a></li>";
}

?>
                           </ul> 
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>