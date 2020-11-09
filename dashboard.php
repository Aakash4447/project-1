<html>
    <head>
        <title>Personal Information</title>
        <link rel="shortcut icon" href="Images/LOGO.png" />      <!-- title logo -->

        <!-- for bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/ok.css">

        
        <style>
                .Table{
                    padding: 200px 0px 100px 0px;
                    text-align: center;
                }
                .center{
                    margin-left: auto;
                    margin-right: auto;
                    text-align:center;
                }
         </style>

    </head>
    <body>


        
        <!-- navigation bar -->
        <div class="nb">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="Images/LOGO.png" height="100px" width="100px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="col-auto">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            
                            <!--<a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>-->
                            <li class="nav-item">
                                <a class="nav-link" href="#top">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#interest">Interest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ft">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </nav>
        </div>

        <!-- table -->
        <div class="Table" id="Table">
            <div class="container">
                <h1> Student Table </h1><br><br>
                <?php
                require "db.php";
                $sql="SELECT * FROM student ORDER BY Average DESC";
                $result=$conn->query($sql);
                
                echo "<table border='1' cellpadding='10' class='center'>";
                echo "<tr>
                <th>StudName</font></th>
                <th>CD</font></th>
                <th>DMBI</font></th>
                <th>DCS</font></th>
                <th>Total</font></th>
                <th>Average</font></th>
                <th>Edit</font></th>
                <th>Delete</font></th>
                </tr>";

                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                    echo '<td><b>' . $row['StudName'] . '</font></b></td>';
                    echo '<td><b>' . $row['CD'] . '</font></b></td>';
                    echo '<td><b>' . $row['DMBI'] . '</font></b></td>';
                    echo '<td><b>' . $row['DCS'] . '</font></b></td>';
                    echo '<td><b>' . $row['Total'] . '</font></b></td>';
                    echo '<td><b>' . $row['Average'] . '</font></b></td>';
                    echo '<td><b><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
                    echo '<td><b><a href="delete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
                    echo "</tr>";
                }
                echo"</table>";
                    
                ?><br><br>
                <a href="insert.php"><button class="btn btn-secondary button-outline-info">Insert Data</button></a>                
            </div>
        </div>
        



          <!-- Footer -->
          <div class="foot" id="ft">          
                <footer class="page-footer bg-dark">
                    <div class="bg-sucess">
                        <div class="container">
                            <div class="row py-3 d-flex align-items-center">
                                <div class="col-sm">
                                    <img src="Images/LOGO.png" height="200px" width="200px">
                                </div>
                                <div class="col-sm">
                                    <p>Address: </p>
                                    <p>Pal,</p>
                                    <p>Surat.</p>
                                </div>
                                
                                <div class="col-sm">
                                        <p><img src="Images/email.png" height="20px" width="20px">      aakashprajapati232@gmail.com</p><br>
                                        <p><img src="Images/phone.png" height="20px" width="20px">      9924053524</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
          </div>
    
    </body>
</html>