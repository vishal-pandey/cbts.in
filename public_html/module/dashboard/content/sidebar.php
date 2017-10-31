<div class="sidebar" data-color="purple" data-image="./module/dashboard/assets/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <?php
            if (isset($_GET['module'])) {
                $file = './module/dashboard/user-module/'.$_GET['module'].".php";
                if (file_exists($file)) {
                    $module = $_GET['module'];
                }
                else{
                    $module = "home";
                }
            }else{
                $module = "home";
            }
        ?>

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://www.cbts.in/" class="simple-text">
                    CBTS.in
                </a>
            </div>

            <ul class="nav mynav" id="<?php echo $module; ?>">
                <li class="home">
                    <a href="./?module=home">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="user">
                    <a href="./?module=user">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="password">
                    <a href="./?module=password">
                        <i class="pe-7s-unlock"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <li class="buy">
                    <a href="./?module=buy">
                        <i class="pe-7s-cart"></i>
                        <p>Buy Tests</p>
                    </a>
                </li>
                <li class="coupon">
                    <a href="./?module=coupon">
                        <i class="pe-7s-ticket"></i>
                        <p>Redeem Coupon</p>
                    </a>
                </li>
                <li class="freetest">
                    <a href="./?module=freetest">
                        <i class="pe-7s-cash"></i>
                        <p>Free Tests</p>
                    </a>
                </li>
                <li class="mytest">
                    <a href="./?module=mytest">
                        <i class="pe-7s-mouse"></i>
                        <p>My Tests</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var module = $(".mynav").attr("id");
            // $("li.home").removeClass("active");
            if (module == '') {
                $("li.home").addClass("active");    
            }
            $("li."+module).addClass("active");
        })
    </script>