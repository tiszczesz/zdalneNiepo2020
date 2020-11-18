<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik - preglądanie</title>
    <link rel="stylesheet" href="cw5.css">
</head>

<body>
    <div>
        <?php
        require "functions.php";
        $dane = getAllFromFile("info.txt");
        // var_dump($dane);
        echo toTable($dane);
        ?>
    </div>
    <div style="margin:30px;">
        <?php
        $topics = getAllTopic("przedmioty.txt");
        echo "<form id='form1' method='post'>\n";
        echo topicToSelect($topics);
        echo "</form>\n";
        ?>
    </div>
    <div>
        <?php
       // var_dump($_POST);
        if(isset($_POST['przedmiot'])){
           // var_dump($dane);
           $topic = $_POST['przedmiot'];
           $wynik = getAllByTopic($dane,$topic);
           echo toTable($wynik);
        }
        ?>
    </div>
    <script>
        window.onload = function(){
            document.querySelector("#przedmiot").onchange = function(e){
                document.querySelector("#form1").submit();
                console.log(e);
            }
            
        }
    </script>
</body>

</html>