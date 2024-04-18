<?php
include("../conn/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name'], $_POST['relationship'], $_POST['message'], $_POST['first_child'], $_POST['number_of_child'])) {
        $name = $_POST['name'];
        $relationship = $_POST['relationship'];
        $message = $_POST['message'];
        $firstChild = $_POST['first_child'];
        $numberChildren = $_POST['number_of_child'];

        try {
            $stmt = $conn->prepare("INSERT INTO tbl_guest (name, relationship, message, first_child, number_of_child) VALUES (:name, :relationship, :message, :first_child, :number_of_child)");
            
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":relationship", $relationship, PDO::PARAM_STR);
            $stmt->bindParam(":message", $message, PDO::PARAM_STR);
            $stmt->bindParam(":first_child", $firstChild, PDO::PARAM_STR);
            $stmt->bindParam(":number_of_child", $numberChildren, PDO::PARAM_STR);

            $stmt->execute();

            echo "
                <script>
                    alert('Guest Sucessfully Added!');
                    window.location.href = 'http://localhost/wedding-guest-e-book/guest-form.php/';
                </script>
                ";

            exit();
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

    } else {
        echo "
            <script>
                alert('Please fill in all fields!');
                window.location.href = 'http://localhost/wedding-guest-e-book/guest-form.php/';
            </script>
        ";
    }
}
?>
