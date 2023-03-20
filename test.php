<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>
	<div class="myClass">Hello world!</div>
	<div class="myClass">How are you?</div>
	
	<script>
		// Sử dụng phương thức querySelectorAll() trong JavaScript để chọn các phần tử có class là "myClass"
		let elements = document.querySelectorAll(".myClass");
		
		// Lặp qua các phần tử được chọn và hiển thị nội dung của chúng
		elements.forEach(function(element) {
			console.log(element.textContent);
		});
	</script>
</body>
</html>
