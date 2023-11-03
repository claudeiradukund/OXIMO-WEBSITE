<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View More Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin-bottom: 20px;
}

img {
    max-width: 100%;
    height: auto;
}

#view-more-btn {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#view-more-btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <ul id="image-list">
            <li>
                <img src="photo/about.jpg" alt="Image 1">
                <p>Location: Location 1</p>
            </li>
            <li>
                <img src="photo/about_back.jpeg" alt="Image 2">
                <p>Location: Location 2</p>
            </li>
            <!-- Add more items here as needed -->
        </ul>
        <button id="view-more-btn">View More</button>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const imageList = document.getElementById("image-list");
    const viewMoreBtn = document.getElementById("view-more-btn");

    viewMoreBtn.addEventListener("click", function() {
        // You can add more list items dynamically here
        // For example:
        imageList.innerHTML += `
            <li>
                <img src="photo/director_image.jpg" alt="Image 3">
                <p>Location: Location 3</p>
            </li>
            <li>
                <img src="photo/house.jpg" alt="Image 4">
                <p>Location: Location 4</p>
            `;
    });
});

    </script>
</body>
</html>
