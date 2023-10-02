<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Employee portal</title>
        <meta name="author" content="Mei Hirata"/>
        <meta name="description" content="employee portal_view page"/>
        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
         <!--Link CSS file--> 
        <link rel="stylesheet" href="view.css"> 

    </head>

    <body>
        <header>
            <nav id="navbar" class="">
                <div class="nav-wrapper">
                    <!-- Navbar Logo -->
                    <div class="logo">
                        <img src="logo-demo3.png">
                    </div>
                    <!-- Navbar Links -->
                    <ul id="menu">
                        <li><a href="/assignment1/index.php">Home</a></li>
                        <li><a href="/assignment1/viewdata.php">Directory</a></li>
                    </ul>
                </div>
            </nav>
        </header>

    <div class="container">
    <?php     
        //Database Connectivity
        $servername="localhost";
        $username="root";
        $password="";
        $database="assignment1";

        //creating a connection

        $conn=mysqli_connect($servername, $username, $password, $database);

        //die if connection failed
        if(!$conn)
        {
            die("Sorry, connection failed!!".mysqli_connect_error());
        }
        else
        {
            echo "<h1>Employee Directory</h1>";
        }

        // SELECT * FROM command
        $sql = "SELECT * FROM `employee`";
        $result=mysqli_query($conn, $sql);

        echo "<table>
        <tr> 
            <th> Full Name </th> 
            <th> Employee ID </th> 
            <th> Department </th> 
            <th> Position </th> 
            <th> Working Hours </th> 
        </tr>";


        //Display the records using while statement
        while($row=mysqli_fetch_assoc($result))
        {
            
            echo "<tr> 
                    <td>".$row['FullName']."</td> 
                    <td>". $row['ID'] ."</td> 
                    <td>".$row['Department'] ."</td> 
                    <td>". $row['Position'] ."</td> 
                    <td>". $row['WorkHour']. "</td>
                </tr>";
            
        }
        echo "</table>"
    ?>
    </div>
        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <p>MEI Inc.</p>
                <div class="footer-info">
                    <p>&copy; 2023 Employee Portal by Mei Hirata</p>
                </div>
            </div>
        </footer>
    </body>
</html>