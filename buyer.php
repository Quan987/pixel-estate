<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Dashboard</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard">
        <div class="welcome-note" id="welcomeNote"></div>

        <input type="text" id="searchInput" class="search-bar" placeholder="Search...">
        <button onclick="search()">Search</button>

        <div class="search-results" id="searchResults">
        </div>
		
		<div class="property-card" onclick="viewPropertyDetails(1)">
		<img src="property-image.jpg" alt="Property Image" style="width: 100%;">
		<h3>Property Name</h3>
		<p>Location: Atlanta, GA</p>
		<p>Price: $1,000,000</p>
		<button onclick="addToWishlist(1)">Add to Wishlist</button>
        </div>
		
		<div class="property-card" onclick="viewPropertyDetails(2)">
		<img src="property-image2.jpg" alt="Property Image" style="width: 100%;">
		<h3>Property Name</h3>
		<p>Location: Buckhead, GA</p>
		<p>Price: $800,000</p>
		<button onclick="addToWishlist(2)">Add to Wishlist</button>
        </div>
		
		<div class="property-card" onclick="viewPropertyDetails(3)">
		<img src="property-image3.jpg" alt="Property Image" style="width: 100%;">
		<h3>Property Name</h3>
		<p>Location: Macon, GA</p>
		<p>Price: $1,500,000</p>
		<button onclick="addToWishlist(3)">Add to Wishlist</button>
        </div>
		
		<div class="property-card" onclick="viewPropertyDetails(4)">
		<img src="property-image4.jpg" alt="Property Image" style="width: 100%;">
		<h3>Property Name</h3>
		<p>Location: Alpharetta, GA</p>
		<p>Price: $2,000,000</p>
		<button onclick="addToWishlist(4)">Add to Wishlist</button>
        </div>
    </div>


	
	 <script src="myscripts.js"></script> 
</body>
</html>