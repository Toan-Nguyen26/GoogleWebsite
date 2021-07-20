<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toan's Nguyen Main Page</title>
</head>
<body>
    <form method="GET" action="{{ url('index') }}">
        <button type="submit" class="btn btn-primary" name='logout'>Return</button>
     </form>
    <div class='container'>
    <?php
    $web = session('res');
    //echo var_dump($web);
    $count = count($web->hits->hits);
    if($count > 0){
            echo "<table class='table table-bordered'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Title</div></th>";
                        echo "<th>Description</th>";
                        echo "<th>URL</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                for($i = 0; $i < $count;$i++){
                	$link = stripslashes(json_encode($web->hits->hits[$i]->_source->url));
                    $des = $web->hits->hits[$i]->_source->description;
                    $title = $web->hits->hits[$i]->_source->title;
                    if(strlen($title) > 50){
                        $title = substr($title, 0, 50);
                        $title .= "...";
                    }
                    if(strlen($des) > 150){
                        $des = substr($des, 0, 150);
                        $des .= "...";
                    }
                   echo "<tr>";
                            echo "<td>" . $title . "</td>";
                            echo "<td>" . $des ."</td>";
                            echo "<td>" . "<a href=$link >". $link ."</a>" ."</td>";
                        echo "</tr>";
                 }
                   echo"</tbody>";
                echo "</table>";
               }
     else{
    echo "ERROR: Could not able to execute at all";
    }
    ?>
    </div>
</body>
</html>
