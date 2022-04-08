if(isset($_POST["categoryhome"])){
	$category_query = "SELECT * FROM categories WHERE cat_id!=1";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "				<div id='responsive-nav'>
					<ul class='main-nav nav navbar-nav'>
                    <li class='active'><a href='index.php'>Home</a></li>
                    <li><a href='store.php'>All type</a></li>>";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
            
            $sql = "SELECT COUNT(*) AS count_items FROM products,categories WHERE product_cat=cat_id";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
			echo "<li class='categoryhome' cid='$cid'><a href='store.php'>$cat_name</a></li>";
		}
        
		echo "</ul>
				</div>";
	}
}
