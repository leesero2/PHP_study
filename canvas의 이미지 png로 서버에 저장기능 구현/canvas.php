<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .canvas{border:1px solid #aaa; }
    </style>
    <script>
        function draw(){
        var canvas = document.getElementById("a");
        if(canvas.getContext){
            alert('그림 그리기 가능')
        }
    }
        </script>
</head>
<body onload="draw();">
    <canvas id="a" width="500" height="500" class="canvas"></canvas>
</body>
</html>