<?php
require 'connection.php'; // Ensure this contains the $conn connection variable

// Get the slug from the URL, or set an empty string if not provided
$slug = $_GET['slug'] ?? '';
// $slug = 'kayu-manis-premium--kayu-manis-organik-murni-untuk-memasak-dan-baking';


// Validate the slug format (optional)
if (!preg_match('/^[a-z0-9-]+$/', $slug)) {
    // echo json_encode(['error' => 'Invalid slug format.']);
    exit;
}

// Prepare and execute the query to fetch data based on the slug
$query = "SELECT * FROM barang WHERE slug = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the data as an associative array
$barang = $result->fetch_assoc();

// Check if product was found and return JSON
if ($barang) {
    // echo json_encode($barang);
} else {
    // json_encode(['error' => 'Product not found.']);
}

// $name = $barang['name'] ?? '';
// $displayName = strlen($name) > 25 ? substr($name, 0, 45) . '...' : $name;

// Close the statement and connection
$stmt->close();
$conn->close();
