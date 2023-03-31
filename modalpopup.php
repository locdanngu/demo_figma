<div class="feedback">
    <img src="image/feedback icon.png" class="imgfb" onclick="popupfeedback()">
</div>

<!-- modal register -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Sign Up and Start Learning!</h2>
            <span class="close">&times;</span>
        </div>

        <hr class="duongthang">
        <form class="bodypopup" method="POST" action="verifyemailpage.php" onsubmit="return checkthongtindangky()">
            <input type="email" id="emaildangky" name="emaildangky" placeholder="Email" class="oinput" required
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Vui lòng nhập đúng định dạng email">
            <!-- Câu lệnh trên kiểm tra tính hợp lệ của email nhập vào  -->
            <input type="password" id="passworddangky" name="passworddangky" placeholder="Password"
                class="oinput passin" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$"
                title="Vui lòng nhập mật khẩu có độ dài từ 8 đến 16 ký tự, bao gồm ít nhất một chữ thường, một chữ hoa và một chữ số">
            <!-- Câu lệnh trên kiểm tra tính hợp lệ của mật khẩu nhập vào -->
            <input type="password" id="passworddangky2" name="passworddangky2" placeholder="Verify password"
                class="oinput passin" required>
            <p class="product">Please use this email & password to login our Demo Sites when using Selenium Test
                Automation.</p>
            <div class="checkboxandtxt">
                <input type="checkbox" required>
                <p class="txtcheck">Yes! I want to receive emails with Selenium Tips and ebook!</p>
            </div>
            <input type="submit" value="Sign up" class="btnsign">
            <div class="thoathuan">
                <p>By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>
                </p>
            </div>
        </form>
        <hr class="duongthang">
        <div class="thoathuan">
            <p>Already have an account? <span id="popuplogin" class="linklogin" onclick="popuplogin()">Log In</span>
            </p>
        </div>
    </div>
</div>


<?php include('guimail.php'); ?>


<!-- modal login -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Log in to your <span style="color: #0744F2">Ms.Robot</span> account!</h2>
            <span class="close">&times;</span>
        </div>
        <hr class="duongthang">
        <form class="bodypopup" method="POST">
            <input type="email" id="emaildangnhap" name="emailemaildangnhap" placeholder="Email" class="oinput" required
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Vui lòng nhập đúng định dạng email">
            <input type="password" id="passworddangnhap" name="passworddangnhap" placeholder="Password"
                class="oinput passin" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$"
                title="Vui lòng nhập mật khẩu có độ dài từ 8 đến 16 ký tự, bao gồm ít nhất một chữ thường, một chữ hoa và một chữ số">
            <input type="submit" value="Login" class="btnsign">
            <div class="thoathuan">
                <p>or <a href="#" onclick="popupfgp()">Forgot password</a>
                </p>
            </div>
        </form>
        <hr class="duongthang">
        <div class="thoathuan">
            <p>Don't have an account? <span onclick="popupsignup()" class="linklogin">Sign up</span></p>
        </div>
    </div>
</div>

<!-- modal forgot password -->
<div id="myModal3" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Forgot password <span style="color: #0744F2">Ms.Robot</span> account!</h2>
            <span class="close">&times;</span>
        </div>
        <hr class="duongthang">
        <form class="bodypopup" method="POST" action="#">
            <input type="email" id="emailtimlai" name="emailtimlai" placeholder="Email" class="oinput" required
                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Vui lòng nhập đúng định dạng email">
            <img src="image/recaptcha.png">
            <input type="submit" value="Reset password" class="btnsign" onclick="popupresetpass()">
            <div class="thoathuan">
                <p>or <a href="#" onclick="popuplogin()">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>


<!-- Gửi mail -->











<!-- modal reset password -->
<div id="myModal4" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Reset password</h2>
        </div>
        <hr class="duongthang">
        <form class="bodypopup" method="POST" action="homepage.php" onsubmit="return checkthongtinresetpass()">
            <input type="password" id="passwordreset" name="passwordreset" placeholder="Password" class="oinput passin"
                required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$"
                title="Vui lòng nhập mật khẩu có độ dài từ 8 đến 16 ký tự, bao gồm ít nhất một chữ thường, một chữ hoa và một chữ số">
            <input type="password" id="passwordreset2" name="passwordreset2" placeholder="Verify password"
                class="oinput passin" required>
            <input type="submit" value="Submit" class="btnsign">
        </form>
    </div>
</div>


<!-- modal feed back -->
<div id="myModal5" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Your feedback!</h2>
            <span class="close">&times;</span>
        </div>
        <hr class="duongthang">
        <form class="bodypopup" method="POST">
            <p class="txtfeedback">How do you feel about our website?</p>
            <div class="vector">
                <div class="phantuvector">
                    <img src="image/vector1.png" class="imgvector">
                    <img src="image/vector6.png" class="imgvector2">
                    <p class="txtvector">angry</p>
                </div>
                <div class="phantuvector">
                    <img src="image/vector2.png" class="imgvector">
                    <img src="image/vector7.png" class="imgvector2">
                    <p class="txtvector">sad</p>
                </div>
                <div class="phantuvector">
                    <img src="image/vector3.png" class="imgvector">
                    <img src="image/vector8.png" class="imgvector2">
                    <p class="txtvector">careless</p>
                </div>
                <div class="selected phantuvector">
                    <img src="image/vector4.png" class="imgvector">
                    <img src="image/vector9.png" class="imgvector2">
                    <p class="txtvector">like</p>
                </div>
                <div class="phantuvector">
                    <img src="image/vector5.png" class="imgvector">
                    <img src="image/vector10.png" class="imgvector2">
                    <p class="txtvector">love</p>
                </div>
            </div>
            <p class="txtfeedback">How like are you to recommend our company/product/service to your friends and
                colleagues?</p>
            <div class="radio">
                <label class="colorradio"><input type="radio" name="option" value="1" required>1</label>
                <label class="colorradio"><input type="radio" name="option" value="2">2</label>
                <label class="colorradio"><input type="radio" name="option" value="3">3</label>
                <label class="colorradio"><input type="radio" name="option" value="4">4</label>
                <label class="colorradio"><input type="radio" name="option" value="5">5</label>
                <label class="colorradio"><input type="radio" name="option" value="6">6</label>
                <label class="colorradio"><input type="radio" name="option" value="7">7</label>
                <label class="colorradio"><input type="radio" name="option" value="8">8</label>
                <label class="colorradio"><input type="radio" name="option" value="9">9</label>
                <label class="colorradio"><input type="radio" name="option" value="10">10</label>
            </div>
            <div class="radio2">
                <p>not at all</p>
                <p>very likely</p>
            </div>
            <p class="txtfeedback">Tell us what you like about our website</p>
            <input type="text" id="password" name="password" placeholder="The great experience" class="oinput nor"
                required>
            <input type="submit" value="Submit" class="btnsign">
        </form>
    </div>
</div>


<!-- modal select question -->
<div id="myModal6" class="modal">
    <div class="modal-content">
        <div class="headpopup">
            <h2 class="headsignup">Select the question category</h2>
            <span class="close">&times;</span>
        </div>
        <hr class="duongthang">
        <div class="bodypopup">
            <p class="tieudeqs">1. Special catalog, you will be expertly answered by our experts.</p>
            <a class="btnsign2" href="logintoask.php">Q & A with Our Test Automation Architect team</a>
            <p class="tieudeqs">2. Free catalogory, you can ask all questions here. No login required.</p>
            <a class="btnsign2 black" href="#">General Discussion</a>
        </div>
    </div>
</div>