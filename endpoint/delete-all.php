<?php 
include ("../conn/conn.php");

try {
    $stmt = $conn->prepare("TRUNCATE TABLE tbl_guest");
    $stmt->execute();

    echo "<script>
            alert('All Guests Deleted Successfully');
            window.location.href = 'http://localhost/wedding-guest-e-book/guest-list.php/';
          </script>";
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
