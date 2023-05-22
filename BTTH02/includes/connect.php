<?php
try {                                                               // Try following code
    $conn = new PDO('mysql:host=localhost;dbname=dhtl;port=3307','root','');           // Create PDO object
} catch (PDOException $e) {                                         // If exception thrown
    echo $e->getMessage();        // Re-throw exception
}

?>