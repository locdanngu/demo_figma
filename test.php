<!DOCTYPE html>
<html>

<head>
    <title>My Page</title>
</head>

<body>
    <div id="my-element" style="height: 500; background-color:red;">Hello world!</div>
    <div id="my-element" style="height: 500; background-color:red;">Hello world!</div>
    <button class="down">xuống</button>
    <button class="down">xuống</button>

    <script>
    const down = document.querySelectorAll('.down');
    const button = document.querySelector('#my-button');

    down.addEventListener('click', function() {
        const myElement = document.querySelectorAll('#my-element');
        myElement.forEach(myElement => {
            myElement.style.height = '300px';
        });
    });
    </script>
</body>

</html>