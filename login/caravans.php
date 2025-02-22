<?php

require_once('db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="caravans.css">

    <title>Caravan Database</title>
</head>
<body>
<nav class="navbar">
    <ul class="navlist">
        <li><a href="index.php">Home</a></li>
        <li><a href="caravans.php">Database</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="login.php">logout</a></li>
    </ul>
</nav>

<body>
    <main class="table">
        <section class="tabel_header">
            <h1>cutsomers orders</h1>

        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>Caravan Name</th>
                        <th>Caravan Colour</th>
                        <th>About Caravan</th>
                        <th>Price</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                     if ($result->num_rows > 0) {
                     while ($row = $result->fetch_assoc()) {
                      echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['colour']}</td>
                            <td>{$row['about']}</td>
                            <td>{$row['price']}</td>
                            <td>
                            <a class='edit-btn' href='edit.php?id=" . $row["name"] . "'>Edit</a>
                            <a class='delete-btn' href='delete.php?id=" . $row["name"] . "'>Delete</a>
                          </td>
                          </tr>";
                }
            }

            ?>
                    
                             
                
                    </tr>
                </tbody>


            </table>

        </section>

        </section>
    </main>
</body>