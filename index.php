<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Employee portal</title>
        <meta name="author" content="Mei Hirata"/>
        <meta name="description" content="employee portal demo"/>
        <!-- Google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
         <!--Link CSS file--> 
        <link rel="stylesheet" href="style.css"> 

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

        <main>
        <div class="welcome">
            <div class="company_img">
                <h1>Welcome to Employee Portal</h1>
                 <!-- Image : left side -->
                <img src="Company-amico.png">
            </div>

            <div class="container">
                <!-- Form section-->
                <div id="portal-form">
                    <div class='fieldset'>
                    <legend>Enter Your information</legend>
                        <form action="/assignment1/index.php" method="post">
                            <!-- Full name -->
                            <div class='row'>
                                <input type="text" name="fullName" id="fullName" placeholder="First and last Name" data-required="true"><br/>
                            </div>
                            <!-- Employee ID -->
                            <div class='row'>
                                <input type="text" name="id" id="id" placeholder="Employee ID" data-required="true"><br/>
                            </div>
                            <!-- Department: Drop down -->
                            <div class='row'>
                                <label for="dept">Department</label>
                                    <select name="dept" id="dept">
                                        <option value="HR">Human resources</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="IT">IT</option>
                                        <option value="sales">Sales</option>
                                        <option value="account">Accounting</option>
                                    </select>
                            </div>
                            <!-- Position -->
                            <div class='row'>
                                <input type="text" name="position" id="position" placeholder="Position"><br/>
                            </div>
                            <!-- Working hour -->
                            <div class='row'>
                                <label for="workHour">Working Hours</label>
                                <input type="text" name="workHour" id="workHour" placeholder="Total Hours in 1 Week"><br/>
                            </div>

                            <!-- Submit button-->
                            <button type="submit" value="SEND" id="nextStep">SUBMIT</button>
                        </form>
                </div>
            </div>
        </div>
        </main>
        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <p>MEI Inc.</p>
                <div class="footer-info">
                    <p>&copy; 2023 Employee Portal by Mei Hirata</p>
                </div>
            </div>
        </footer>
        
        <?php
        if($_SERVER['REQUEST_METHOD']='POST')
        {
            $fullName=$_POST['fullName'];
            $id=$_POST['id'];
            $dept=$_POST['dept'];
            $position=$_POST['position'];
            $workHour=$_POST['workHour'];

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
                //submit the insertion queries/data to database

                $sql="INSERT INTO `employee` (`FullName`, `ID`, `Department`, `Position`, `WorkHour`) VALUES ('$fullName', '$id', '$dept', '$position', '$workHour')";
                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo '<script>alert("Your data has been sent successfully")</script>';
                }
                else{
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }

        }
        ?>
    </body>
</html>


