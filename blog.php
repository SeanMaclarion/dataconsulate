<?php
require('blogheader.php');

require("connection.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(isset($_SESSION["user"]))
{
	
$temp = $_SESSION["user"];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user FROM blog_users WHERE user = '$temp'";
$result = mysqli_query($conn, $sql);

		
}


require("sidebar.php");
?>
<head>
<link rel="stylesheet" type="text/css" href="blog.css">
</head>
<div class="wrapper" style="overflow: auto;">
<div class="content">
<div id="blog">
<?php
$page=$_REQUEST['p'];
$limit=3;
if($page=='')
{
 $page=1;
 $start=0;
}
else
{
 $start=$limit*($page-1);
}
$query=mysqli_query($conn,"select * from blog_posts limit $start, $limit");
$tot=mysqli_query($conn, "select * from blog_posts");
$total=mysqli_num_rows($tot);
$num_page=ceil($total/$limit);
if ($result->num_rows > 0)
{
	while($row=mysqli_fetch_array($query))
	{
	   echo "<br>";
	   echo "<br>". "<a href='view_post.php?id=".$row["id"]."'>" . $row["postTitle"] . "</a>" ."<br>". "<img src='images/".$row["postImage"]."'/ height='auto' width='100%'>" ."<br>";	
				echo substr($row["postContent"], 0, 500) . "...";
				echo "<a href='view_post.php?id=".$row["id"]."'>" . "Click here to read more</a><br>";
				
				if ($row["editUser"] != "")
				{
					echo "Edited on " . $row["editDate"] . " at " . $row["editTime"] . " by " . $row["editUser"] . "<br>";
				}
				else
				{
						echo "Posted on " . $row["postDate"] . " at " . $row["postTime"] . " by " . $row["username"] . "<br>";
				}
				
				$sql2 = "SELECT tags FROM blog_posts WHERE id=".$row["id"];
				$result2 = mysqli_query($conn,$sql2);
				$tagsArray = array();
				if ($result2)
				{
					$row2 = mysqli_fetch_row($result2);
					$tags = $row2[0];
					$tagsArray = explode(",",$tags);
				}
				$index = 0;
				$count = count($tagsArray);

				while ($index < $count)
				{
				  echo "<a href='view_tags.php?p=1&tags=".$tagsArray[$index]."'>" . $tagsArray[$index] . "</a>";
				  $index++;
				}
				if(isset($_SESSION["user"]))
				{
					echo "<br><a href='edit_post.php?id=".$row["id"]."'><button>Edit Post</button></a><br>";
				}
				
		}
}
else
{
		echo "No results";
}





function pagination($page,$num_page)
{
  echo'<ul style="list-style-type:none;">';
  for($i=1;$i<=$num_page;$i++)
  {
     if($i==$page)
{
 echo'<li style="float:left;padding:5px;">'.$i.'</li>';
}
else
{
 echo'<li style="float:left;padding:5px;"><a href="blog.php?p='.$i.'">'.$i.'</a></li>';
}
  }
  echo'</ul>';
}
if($num_page>1)
{
 pagination($page,$num_page);
}
$conn->close();
?>

</script>
</div>

</div>
</div>
<?php
require("footer.php");
?>

