<!--footer-->
    <footer>
        <div class="container py-md-4 mt-md-3">
            <div class="row footer-top-w3layouts-agile py-5">
                <div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
                    <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <div class="footer-title">
                        <h3><?php  echo htmlentities($row->PageTitle);?></h3>
                    </div>
                    <div class="footer-text">
                        <p><?php  echo htmlentities(substr($row->PageDescription,0,200));?>.</p>

                    </div>
                <?php $cnt=$cnt+1;}} ?></div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer-grid">
                    <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <div class="footer-title">
                        <h3><?php  echo htmlentities($row->PageTitle);?></h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li class="hd">Address :</li>
                            <li><?php  echo htmlentities($row->PageDescription);?></li>

                        </ul>
                        <ul>
                            <li class="hd">Phone:+ <?php  echo htmlentities($row->MobileNumber);?></li>
                            <li class="hd">Email:
                               <?php  echo htmlentities($row->Email);?>
                            </li>
                            
                        </ul>
                    </div>
                <?php $cnt=$cnt+1;}} ?></div>
                <div class="col-lg-4 col-md-6 col-sm-6 footer-grid">
                    <div class="footer-title">
                        <h3>Recent Posts</h3>
                    </div>
                    <div class="footer-list">
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g1.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g2.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g3.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g4.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g5.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g6.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g7.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g9.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                <img src="images/g8.jpg" class="img-fluid" alt=" ">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
           
            </div>
        </div>
    </footer>
    <!---->
    <div class="copyright py-3">
        <div class="container">
            <div class="copyrighttop">
                <ul>
                    <li>
                        <h4>Follow us on:</h4>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="copyrightbottom">
                <p>© 2021 Home Loan Management System. All Rights Reserved 
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>