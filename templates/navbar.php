<div class="dropdown-menu fixdr" aria-labelledby="navbarDropdown">
                    <?php
                        if(!empty($username)){    
                            echo "<a class='dropdown-item' href='basicsitepage.php'>Basic Site</a>";
                            echo "<a class='dropdown-item' href='automationpracticesitepage.php'>Automation Practice Site</a>";
                            echo "<a class='dropdown-item' href='automationactionssitepage.php'>Automation Actions Site</a>";
                            echo "<a class='dropdown-item' href='ecommercesitepage.php'>Ecommerce Site</a>";
                        }else{
                            echo "<a class='dropdown-item' href='logintobasicsite.php'>Basic Site</a>";
                            echo "<a class='dropdown-item' href='logintoautomationpracticesite.php'>Automation Practice Site</a>";
                            echo "<a class='dropdown-item' href='logintoautomationactionssite.php'>Automation Actions Site</a>";
                            echo "<a class='dropdown-item' href='logintoecommercesite.php'>Ecommerce Site</a>";
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
                echo "<div class='avaandemail'>";
                    echo "<a href='#'><img src='image/avatarjohn.png' class='avataruser'></a>";
                    echo "<div class='emailandbtn'>";
                        echo "<p class='emailuser'>{$username}</p>";
                        echo '<a href="controller/logout.php" class="logoutbtn">Logout</a>';
                    echo "</div>";
                echo "</div>";
            }else{
                echo '<button class="btn mr-2" id="popuplogin" onclick="popuplogin()">Login</button>';
                echo '<button class="btn sign-up" id="popupsignup" onclick="popupsignup()">Sign up</button>';
            }
            ?>
        </div>
   