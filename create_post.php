<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Blog Post</title>
  <!-- Tailwind CSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
  <div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold text-center">Add Blog Post</h1>
    <form action="add_post.php" method="post" class="bg-white p-5 rounded-lg shadow mt-10">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="title">
          Title
        </label>
        <input 
          class="border border-gray-400 p-2 w-full" 
          type="text" 
          name="title" 
          id="title" 
          required
        >
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="description">
          Description
        </label>
        <textarea 
          class="border border-gray-400 p-2 w-full" 
          name="description" 
          id="description" 
          rows="5" 
          required
        ></textarea>
      </div>
      <input 
        type="submit" 
        value="Add Blog Post" 
        class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600"
      >
    </form>
  </div>
</body>
</html>