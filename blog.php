<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "blog_posts";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM blogs";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
  <!-- Add Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
  <div class="container mx-auto">
    <?php if (mysqli_num_rows($result) > 0): ?>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="bg-white p-5 rounded-lg shadow mt-10">
          <h3 class="text-xl font-bold"><?php echo $row['title']; ?></h3>
          <p class="text-gray-700"><?php echo $row['description']; ?></p>
          <a href="post.php?id=<?php echo $row['id']; ?>" class="text-blue-500">Read More</a>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-center">No blog posts found.</p>
    <?php endif; ?>
  </div>
  
  
</body>
</html>