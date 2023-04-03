<div class="dropdown-menu fixdr" aria-labelledby="navbarDropdown">
                    <?php
                        if(!empty($username)){    
                    ?>
                            <a class='dropdown-item' href='basicsitepage.php'>Basic Site</a>
                            <a class='dropdown-item' href='automationpracticesitepage.php'>Automation Practice Site</a>
                            <a class='dropdown-item' href='automationactionssitepage.php'>Automation Actions Site</a>
                            <a class='dropdown-item' href='ecommercesitepage.php'>Ecommerce Site</a>
                    <?php
                        }else{
                    ?>
                            <a class='dropdown-item' href='logintobasicsite.php'>Basic Site</a>
                            <a class='dropdown-item' href='logintoautomationpracticesite.php'>Automation Practice Site</a>
                            <a class='dropdown-item' href='logintoautomationactionssite.php'>Automation Actions Site</a>
                            <a class='dropdown-item' href='logintoecommercesite.php'>Ecommerce Site</a>
                    <?php
                        }
                    ?>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="image/co.png" width="53" height="30">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:0">
                        <a class="dropdown-item" href="#"><img src="image/vietnam.png" width="53" height="30"></a>
                        <a class="dropdown-item" href="#"><img src="image/USA.png" width="53" height="30"></a>
                    </div>
                </li>
            </ul>
            <?php
            if(!empty($username)){
            ?>
                <div class='avaandemail'>
                    <a href='#'><img src='image/avatarjohn.png' class='avataruser'></a>
                    <div class='emailandbtn'>
                        <p class='emailuser'><?php echo $username; ?></p>
                        <a href="controller/logout.php" class="logoutbtn">Logout</a>
                    </div>
                </div>
            <?php
            }else{
            ?>
                <button class="btn mr-2" id="popuplogin" onclick="popuplogin()">Login</button>
                <button class="btn sign-up" id="popupsignup" onclick="popupsignup()">Sign up</button>
            <?php
            }
            ?>
        </div>
   