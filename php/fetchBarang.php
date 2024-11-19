<?php

require 'connection.php';

// Query the data
$query = mysqli_query($conn, 'SELECT * FROM barang');

// Initialize an array to store the results
$data = [];

if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
} else {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
}

// Return the results as a JSON
echo json_encode($data);

// Close connection
mysqli_close($conn);
