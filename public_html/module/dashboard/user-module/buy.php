        
        <?php
            $val = "Buy Test | CBTS.in"; 
            include './module/dashboard/content/topnav.php'; 
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php  
                    $sql = "select * from package";
                    $result = $conn->query($sql);
                    while ($package = $result->fetch_assoc()) {
                        $no_of_test = 0;
                        $ptable = "p".$package['pid'];
                        $sql1 = "select test from {$ptable}";
                        $result1 = $conn->query($sql1);
                        while($row = $result1->fetch_assoc()){
                            $no_of_test++;
                        }
                        $date = date_create($package['creation']);
                        $date = date_format($date,"d M Y");
                        if(strlen($package['description']) > 30){
                            $dotdot = '...';
                        }else{
                            $dotdot = '';
                        }
                        echo "
                            <div class='card col-sm-3 col-xs-12' style='text-align:center;'>
                                <h3>{$package['name']}</h3>
                                <hr>
                                <div><b>Description</b><br><p>".substr($package['description'] , 0 , 30).$dotdot."</p></div>
                                <div><b>No Of Test : </b>{$no_of_test}</div>
                                <div><b>Added On : </b>{$date}</div>
                                <div><blockquote style='background-color:rgb(238,238,238);' >&#8377; {$package['price']}</blockquote></div>
                                <hr>
                                <div><button class='btn btn-success buy-now'>Buy Now</button></div>
                                <br>
                                
                            </div>";
                    }
                ?>
                </div>



                <div class="row">
                    <div class="col-md-6">
                    </div>

                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>