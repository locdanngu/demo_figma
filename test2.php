<!DOCTYPE HTML>
<html>

<head>
	<title>Drag and Drop box</title>
	<script>
	function allowDrop(ev) {
		ev.preventDefault();
	}

	function dragStart(ev) {
		ev.dataTransfer.setData("text", ev.target.id);
	}

	function dragDrop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		ev.target.appendChild(document.getElementById(data));
	}
	</script>
	<style>
	#box {
		margin: auto;
		width: 50%;
		height: 200px;
		border: 3px solid green;
		padding: 10px;
	}
	
	#box1,
	#box2,
	#box3 {
		float: left;
		margin: 5px;
		padding: 10px;
	}
	
	#box1 {
		width: 50px;
		height: 50px;
		background-color: #F5B5C5;
	}
	
	#box2 {
		width: 100px;
		height: 100px;
		background-color: #B5D5F5;
	}
	
	#box3 {
		width: 150px;
		height: 150px;
		background-color: #BEA7CC;
	}
	
	p {
		font-size: 20px;
		font-weight: bold;
		text-align: center;
	}
	
	.gfg {
		font-size: 40px;
		color: #009900;
		font-weight: bold;
		text-align: center;
	}
	</style>
</head>

<body>
	<div class="gfg">GeeksforGeeks</div>
	
<p>Drag and drop of boxes</p>


	<div id="box">
		<div id="box1" draggable="true"
			ondragstart="dragStart(event)">
		</div>
		<div id="box2" draggable="true"
			ondragstart="dragStart(event)">
		</div>
		<div id="box3" ondrop="dragDrop(event)"
			ondragover="allowDrop(event)">
		</div>
	</div>
</body>

</html>
