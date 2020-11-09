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
                .insert{
                    padding: 220px 0px 100px 0px;
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

        <!-- insert -->
        <div class="insert" id="insert">
            <?php
                function valid($sname, $error){
                    ?>
                    
                   <?php
                    if($error!='')
                    {
                        echo '<div style="color:red;">'.$error.'</div>';
                    }    
                    ?>               
                    <h1> Insert </h1><br><br>
                    <form action="" method="post">
                        <table border="1" class="center">
                            <tr>
                                <th colspan="2">Insert Records</th>
                            </tr>
                            <tr>
                                <td width="179">Stud Name</td>
                                <td><label>
                                    <input type="text" name="StudName" value="<?php $StudName; ?>" />
                                </label></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><label>
                                    <input type="submit" name="submit" value="Insert Records">
                                </label></td>
                            </tr>
                        </table>
                    </form>   
<?php
                }
                
                
                        

        require "db.php";
        if (isset($_POST['submit'])){
            $StudName =$_POST['StudName'];

            if ($StudName == '' ){
                $error = 'Please enter the details!';

                valid($StudName, $error);
            }
            else{

                $sql="INSERT student SET StudName='$StudName'";
                $result= $conn->query($sql);

                header("Location: Dashboard.php");
            }
        }
        else{
            valid('','','','');
        }
?>
            
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