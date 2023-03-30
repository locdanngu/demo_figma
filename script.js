// Lấy các phần tử cần thiết
var modalsign = document.getElementById("myModal");
var modallog = document.getElementById("myModal2");
var modalfgp = document.getElementById("myModal3");
var modalresetpass = document.getElementById("myModal4");
var modalfeedback = document.getElementById("myModal5");
var modalselectqs = document.getElementById("myModal6");
var span = document.getElementsByClassName("close")[0]; //đăng ký
var span2 = document.getElementsByClassName("close")[1]; //đăng nhập
var span3 = document.getElementsByClassName("close")[2]; //quên mật khẩu
var span4 = document.getElementsByClassName("close")[3]; //feed back
var span5 = document.getElementsByClassName("close")[4]; //select question
// Khi người dùng nhấn nút, hiển thị popup
function popupsignup() {
    modalsign.style.display = "block";
    modallog.style.display = "none";
    // Xử lý sự kiện click
}
// Khi người dùng nhấn vào nút đóng, ẩn popup
span.onclick = function() {
    modalsign.style.display = "none";
}
// Khi người dùng nhấn bên ngoài popup, ẩn popup
function popuplogin() {
    modalfgp.style.display = "none"
    modallog.style.display = "block";
    modalsign.style.display = "none";
    // Xử lý sự kiện click
}
span2.onclick = function() {
    modallog.style.display = "none";
}

function popupfgp() { //forgot password
    modallog.style.display = "none";
    modalfgp.style.display = "block";
}
span3.onclick = function() {
    modalfgp.style.display = "none";
}

function popupresetpass() {
    modalfgp.style.display = "none"
    modalresetpass.style.display = "block"
}

function popupfeedback() {
    modalfeedback.style.display = "block"
}
span4.onclick = function() {
    modalfeedback.style.display = "none";
}

function popupselectqs() {
    modalselectqs.style.display = "block"
}

span5.onclick = function() {
    modalselectqs.style.display = "none";
}

window.onclick = function(event) { //Xử lí sự kiện khi bấm ngoài pop up
    if (event.target == modalsign) {
        modalsign.style.display = "none";
    }

    if (event.target == modallog) {
        modallog.style.display = "none";
    }

    if (event.target == modalfgp) {
        modalfgp.style.display = "none";
    }

    if (event.target == modalresetpass) {
        modalresetpass.style.display = "none";
    }

    if (event.target == modalfeedback) {
        modalfeedback.style.display = "none";
    }

    if (event.target == modalselectqs) {
        modalselectqs.style.display = "none";
    }
}



const navbarDropdown = document.getElementById("navbarDropdown"); //lấy nút bấm dropdown trên thanh navbar
const navbars = document.querySelector(".navbar-expand-lg"); //lấy thanh navbar

navbarDropdown.addEventListener("click", function() { //thêm sự kiện khi bấm vào
    if (navbars.style.backgroundColor === "") { //toán tử so sánh kiểu và giá trị trong JavaScript
        navbars.style.backgroundColor = "transparent"; //biến đổi màu nav mất đi
        navbars.style.boxShadow = "none";
    } else {
        navbars.style.backgroundColor = ""; //trả lại màu nav như cũ
        navbars.style.boxShadow = "";
    }
});

document.addEventListener("click", function(e) { //nếu click bên ngoài nút dropdown thì cũng trả lại màu
    if (e.target !== navbarDropdown) {
        navbars.style.backgroundColor = "";
        navbars.style.boxShadow = "";
    }
});

//khảo sát hài lòng (sad, like, angry...)
const imageContainers = document.querySelectorAll('.phantuvector'); //chọn 1 phần tử chứa ảnh và text

imageContainers.forEach((container) => {
    const image = container.querySelector('.imgvector'); //khi bấm vào 1 ảnh
    const imageText = container.querySelector('.txtvector'); //chọn txt đi cùng ảnh đó

    image.addEventListener('click', () => {
        // Loại bỏ lớp CSS "selected" khỏi tất cả các phần tử "image-container"
        imageContainers.forEach((container) => {
            container.classList.remove('selected');
        });

        // Thêm lớp CSS "selected" vào phần tử "image-container" tương ứng với ảnh được chọn
        container.classList.add('selected');
    });
});



//check thông tin nhập vào form đăng ký đúng chưa
function checkthongtindangky() {
    var passworddangky = document.getElementById("passworddangky").value;
    var passworddangky2 = document.getElementById("passworddangky2").value;
    if (passworddangky != passworddangky2) {
        alert("Mật khẩu nhập lại không đúng");
        return false;
    }
    return true;
}
