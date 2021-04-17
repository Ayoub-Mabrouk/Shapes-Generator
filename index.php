<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            display: flex;
            justify-content: space-evenly;
        }
        #myCanvas {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div id="container">
        <fieldset>
            <legend>Circle</legend>
            <form action="process.php" method="POST">
                <label>X Position</label>
                <input type="text" name="Xaxes" id=""><br>
                <label>Y Position</label>
                <input type="text" name="Yaxes" id=""><br>
                <label>Radius</label>
                <input type="text" name="R" id=""><br>
                <button name="Create_circle">Submit</button>
            </form>
        </fieldset>
        <fieldset>
            <legend>Square</legend>
            <form action="process.php" method="POST">
                <label>X Position</label>
                <input type="text" name="Xaxes" id=""><br>
                <label>Y Position</label>
                <input type="text" name="Yaxes" id=""><br>
                <label>Width</label>
                <input type="text" name="Width" id=""><br>
                <button name="Create_square">Submit</button>
            </form>
        </fieldset>
        <fieldset>
            <legend>Rectangle</legend>
            <form action="process.php" method="POST">
                <label>X Position</label>
                <input type="text" name="Xaxes" id=""><br>
                <label>Y Position</label>
                <input type="text" name="Yaxes" id=""><br>
                <label>Width</label>
                <input type="text" name="Width" id=""><br>
                <label>Height</label>
                <input type="text" name="Height" id=""><br>
                <button name="Create_rect">Submit</button>
            </form>
        </fieldset>
    </div>
    <div id="myCanvas">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/p5@1.3.1/lib/p5.js"></script>
    <script src="index.js"></script>
</body>

</html>