<?php

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'your_username';
$dbPassword = 'your_password';
$dbName = 'your_database_name';

// Establish database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Set headers to allow cross-origin resource sharing (CORS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Check the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

// Handle GET request
if ($method === 'GET') {
    // Retrieve product(s) from the database
    
    // Check if an ID is specified for a single product or if it's a list request
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id = $productId";
    } else {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = isset($_GET['limit']) ? $_GET['limit'] : 10;
        $offset = ($page - 1) * $limit;
        $sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
    }
    
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        $response = [];
        
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
        
        echo json_encode($response);
    } else {
        echo json_encode(['message' => 'No products found.']);
    }
}

// Handle POST request
elseif ($method === 'POST') {
    // Create a new product
    
    // Get the POST data
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Validate and sanitize the data (you can add more validation if needed)
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    
    // Insert the product into the database
    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)";
    $result = $connection->query($sql);
    
    if ($result) {
        echo json_encode(['message' => 'Product created successfully.']);
    } else {
        echo json_encode(['error' => 'Failed to create product.']);
    }
}

// Handle PUT request
elseif ($method === 'PUT') {
    // Update an existing product
    
    // Get the PUT data
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Validate and sanitize the data (you can add more validation if needed)
    $productId = $data['id'];
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    
    // Update the product in the database
    $sql = "UPDATE products SET name='$name', description='$description', price=$price WHERE id=$productId";
    $result = $connection->query($sql);
    
    if ($result) {
        echo json_encode(['message' => 'Product updated successfully.']);
    } else {
        echo json_encode(['error' => 'Failed to update product.']);
    }
}

// Handle DELETE request
elseif ($method === 'DELETE') {
    // Delete an existing product
    
    // Get the product ID from the request parameters
    $productId = $_GET['id'];
    
    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id = $productId";
    $result = $connection->query($sql);
    
    if ($result) {
        echo json_encode(['message' => 'Product deleted successfully.']);
    } else {
        echo json_encode(['error' => 'Failed to delete product.']);
    }
}

// Handle SEARCH request
elseif ($method === 'SEARCH') {
    // Search for products based on a keyword
    
    // Get the keyword from the request parameters
    $keyword = $_GET['keyword'];
    
    // Search the products in the database
    $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%' OR description LIKE '%$keyword%'";
    $result = $connection->query($sql);
    
    if ($result->num_rows > 0) {
        $response = [];
        
        while ($row = $result->fetch_assoc()) {
            $response[] = $row;
        }
        
        echo json_encode($response);
    } else {
        echo json_encode(['message' => 'No products found for the given keyword.']);
    }
}

// Close the database connection
$connection->close();
?>
