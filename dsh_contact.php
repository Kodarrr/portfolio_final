<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dsh_contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>

<body>
    <div class="home">
        <a class="hme" href="index.php">Home</a>
    </div>

    <h2>Contact Details</h2>

    <div class="contact_details">
        <table>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
            </tr>
            <?php

            include 'info.php';

            // Adding a Contact
            if (isset($_POST['add_contact'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];

                $sql = "INSERT INTO infos (name,phone, email) VALUES ('$name', '$phone', '$email')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('New contact added successfully'); window.location.href='dsh_contact.php';</script>";
                    exit;
                } else {
                    echo "<script>alert('Add contact Failed'); window.location.href='dsh_contact.php';</script>";
                    exit;
                }
            }

            // // Deleting a Contact
            // if (isset($_POST['delete_contact'])) {
            //     $delete_email = $_POST['delete_email'];
            
            //     $sql = "DELETE FROM infos WHERE email='$delete_email'";
            //     if ($conn->query($sql) === TRUE) {
            //         echo "<script>alert('Contact deleted successfully'); window.location.href='dsh_contact.php';</script>";
            //         exit;
            //     } else {
            //         echo "<script>alert('Contact deletion Failed'); window.location.href='dsh_contact.php';</script>";
            //         exit;
            //     }
            // }
            // Deleting a Contact
            if (isset($_POST['delete_contact'])) {
                $delete_email = $_POST['delete_email'];

                // Retrieve the ID associated with the provided email
                $sql_select_id = "SELECT id FROM infos WHERE email='$delete_email'";
                $result = $conn->query($sql_select_id);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $contact_id = $row['id'];

                    // Delete the contact using the retrieved ID
                    $sql_delete = "DELETE FROM infos WHERE id=$contact_id";

                    if ($conn->query($sql_delete) === TRUE) {
                        echo "<script>alert('Contact deleted successfully'); window.location.href='dsh_contact.php';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Contact deletion Failed'); window.location.href='dsh_contact.php';</script>";
                        exit;
                    }
                } else {
                    echo "<script>alert('Contact not found'); window.location.href='dsh_contact.php';</script>";
                    exit;
                }
            }

            // Updating a Contact
            // if (isset($_POST['update_contact'])) {
            //     $name = $_POST['name'];
            //     $phone = $_POST['phone'];
            //     $email = $_POST['email'];
            
            //     $sql = "UPDATE infos SET name='$update_name' phone='$update_phone', email='$update_email' WHERE email='$prev_email'";
            //     if ($conn->query($sql) === TRUE) {
            //         echo "<script>alert('New contact updated successfully'); window.location.href='dsh_contact.php';</script>";
            //         exit;
            //     } else {
            //         echo "<script>alert('New contact update Failed'); window.location.href='dsh_contact.php';</script>";
            //         exit;
            //     }
            // }
            // Update Contact
            if (isset($_POST['update_contact'])) {
                $prev_email = $_POST['prev_email'];
                $update_name = $_POST['update_name'];
                $update_phone = $_POST['update_phone'];
                $update_email = $_POST['update_email'];

                // Retrieve the ID associated with the provided previous email
                $sql_select_id = "SELECT id FROM infos WHERE email='$prev_email'";
                $result = $conn->query($sql_select_id);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $contact_id = $row['id'];

                    // Update the contact using the retrieved ID
                    $sql_update = "UPDATE infos SET name='$update_name', phone='$update_phone', email='$update_email' WHERE id=$contact_id";

                    if ($conn->query($sql_update) === TRUE) {
                        echo "<script>alert('Contact updated successfully'); window.location.href='dsh_contact.php';</script>";
                        exit;
                    } else {
                        echo "<script>alert('Contact update failed'); window.location.href='dsh_contact.php';</script>";
                        exit;
                    }
                } else {
                    echo "<script>alert('Contact not found'); window.location.href='dsh_contact.php';</script>";
                    exit;
                }
            }

            // Display contacts
            $sql = "SELECT * FROM infos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["email"] . "</td>
            </tr>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>

        </table>

    </div>

    <h2>Add New Contact</h2>
    <form action="" method="post">

        <label for="name">Add Name</label><br>
        <input type="text" name="name" required><br>

        <label for="phone">Phone Number</label><br>
        <input type="text" name="phone" required><br>

        <label for="email">Email</label><br>
        <textarea name="email" required></textarea><br>

        <input type="submit" name="add_contact" value="Add Contact">
    </form>

    <!-- <h2>Delete Contact</h2>
    <form action="" method="post">
        <label for="delete_email">Enter email to delete:</label><br>
        <input type="text" id="delete_email" name="delete_email" required><br>
        <input type="submit" name="delete_contact" value="Delete Contact">
    </form> -->
    <h2>Delete Contact</h2>
    <form action="" method="post">
        <label for="delete_email">Enter email to delete:</label><br>
        <input type="text" id="delete_email" name="delete_email" required><br>
        <input type="submit" name="delete_contact" value="Delete Contact">
    </form>

    <h2>Update Contact</h2>
    <form action="" method="post">
        <label for="prev_email">Previous Email:</label><br>
        <input type="text" id="prev_email" name="prev_email" required><br>

        <label for="update_name">Update Name:</label><br>
        <input type="text" id="update_name" name="update_name" required><br>

        <label for="update_phone">New Phone Number:</label><br>
        <input type="text" id="update_phone" name="update_phone" required><br>

        <label for="update_email">New Email:</label><br>
        <input type="text" id="update_email" name="update_email" required><br>

        <input type="submit" name="update_contact" value="Update Contact">
    </form>

    <div class="logout">
        <a href="logout.php" class="logout-button">Logout</a>
    </div>


</body>

</html>