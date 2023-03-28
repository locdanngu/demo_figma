<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mở trình duyệt nhỏ</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
  }

  form {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  button {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
  }

  button:hover {
    background-color: #3e8e41;
  }
</style>

  </head>
  <body>
    <button onclick="openSmallWindow()">Mở trình duyệt nhỏ</button>

    <script>
      function openSmallWindow() {
        // Tạo một cửa sổ pop-up nhỏ
        var smallWindow = window.open("test2.php", "smallWindow", "width=400,height=400");

        // Thêm một form đăng nhập vào cửa sổ pop-up
        var loginForm = document.createElement("form");
        var usernameLabel = document.createElement("label");
        var usernameInput = document.createElement("input");
        var passwordLabel = document.createElement("label");
        var passwordInput = document.createElement("input");
        var submitButton = document.createElement("button");
        usernameLabel.innerHTML = "Tên đăng nhập:";
        usernameInput.setAttribute("type", "text");
        usernameInput.setAttribute("name", "username");
        passwordLabel.innerHTML = "Mật khẩu:";
        passwordInput.setAttribute("type", "password");
        passwordInput.setAttribute("name", "password");
        submitButton.innerHTML = "Đăng nhập";
        loginForm.appendChild(usernameLabel);
        loginForm.appendChild(usernameInput);
        loginForm.appendChild(passwordLabel);
        loginForm.appendChild(passwordInput);
        loginForm.appendChild(submitButton);
        smallWindow.document.body.appendChild(loginForm);

        // Thêm sự kiện đăng nhập vào form
        loginForm.addEventListener("submit", function(event) {
          event.preventDefault();

          // Lấy thông tin đăng nhập từ form
          var username = usernameInput.value;
          var password = passwordInput.value;

          // Xử lý đăng nhập ở đây
          console.log("Đăng nhập với tên đăng nhập: " + username + ", mật khẩu: " + password);

          // Đóng cửa sổ pop-up
          smallWindow.close();
        });
      }
    </script>
  </body>
</html>
