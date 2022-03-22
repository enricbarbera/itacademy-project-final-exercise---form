<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rover Results</title>
</head>
<body>
    <div>
        Initial Rover situation:<br>
        X position: {{$iniData['xPosition']}}
        Y position: {{$iniData['yPosition']}}
        Orientation: {{$iniData['orientation']}}
        <?php
            switch ($iniData['orientation']){
                case 'N':
                    $icon='^';
                    break;
                case 'E':
                    $icon='>';
                    break;
                case 'S':
                    $icon='v';
                    break;
                case 'W':
                    $icon='<';
                    break;
                default:
                    $icon='O';
            }
            for ($i=0;$i<$iniData['height'];$i++){
                echo'<br>';
                for ($j=0;$j<$iniData['width'];$j++){
                    ?>
                    <!-- 
                    <div style="width:20px; height:20px; background:red;">
                    -->
                    <?php
                    if($iniData['yPosition']==$iniData['height']-1-$i && $iniData['xPosition']==$j){
                        echo $icon;
                    }else{
                    echo 'X';
                    }
                }
            }
        ?>
    </div>
    <div>
        Final Rover situation:<br>
        X position: {{$endData['xPosition']}}
        Y position: {{$endData['yPosition']}}
        Orientation: {{$endData['orientation']}}
        <?php
            switch ($endData['orientation']){
                case 'N':
                    $icon='^';
                    break;
                case 'E':
                    $icon='>';
                    break;
                case 'S':
                    $icon='v';
                    break;
                case 'W':
                    $icon='<';
                    break;
                default:
                    $icon='O';
            }
            for ($i=0;$i<$endData['height'];$i++){
                echo'<br>';
                for ($j=0;$j<$endData['width'];$j++){
                    ?>
                    <!-- 
                    <div style="width:20px; height:20px; background:red;">
                    -->
                    <?php
                    if($endData['yPosition']==$endData['height']-1-$i && $endData['xPosition']==$j){
                        echo $icon;
                    }else{
                    echo 'X';
                    }
                }
            }
        ?>
    </div>
</body>
</html>