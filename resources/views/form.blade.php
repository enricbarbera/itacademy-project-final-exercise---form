<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rover Form</title>
</head>
<body>
    <form method="post", action="{{route('play')}}">
        <p>
            Square width:
            <input type="number" name="width">
        </p>
        <p>
            Square height:
            <input type="number" name="height">
        </p>
        <p>
            Rover initial X position:
            <input type="number" name="xPosition">
        </p>
        <p>
            Rover initial Y position:
            <input type="number" name="yPosition">
        </p>
        <p>
            Rover initial orientation (N, E, S, W):
            <select name="orientation">
                <option value="N">North</option>
                <option value="E">East</option>
                <option value="S">South</option>
                <option value="W">West</option>
            </select>
        </p>
        <p>
            Movement sequence (A to advance, R to turn right, L to turn left, ex(AAALAALAAARARAAL)):
            <input type="text" name="movement">
        </p>
        <input type="submit" value="send">
    </form>
</body>
</html>