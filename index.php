<?php
    include("./include/function.php");
    $language = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

    $contenu = json_decode(getContenu($language), true);

    $menu = json_decode(getJsonData($language), true);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
</head>
<body>

    <div class="header">
        <ul>
            <?php for($i=0; $i<count($menu[0]); $i++) { ?>
                <li><a href="#"><?php echo $menu[0][$i]; ?></a></li>
            <?php } ?>

            <li>
                <select name="langues" id="langues" onChange="reloadPage()">
                    <option value="">Les langues</option>
                    <?php for($i=0; $i<count($menu[1]); $i++) { 
                        $one = $menu[1][$i];
                        if($one["code"] !== $language) { ?>
                        <option value="<?php echo $one["code"]; ?>"><?php echo $one["nom"]; ?></option>
                    <?php } }?>
                </select>
            </li>
        </ul>
    </div>
    
    <div class="content">

        <h1>Everything</h1>

        <p><?php echo $contenu['contenu']; ?></p>

    </div>
    
    <script>
        function reloadPage(){
            var variable = document.getElementById("langues");
            var choosen = variable.options[variable.selectedIndex].value;
            let url = window.location.href;    
            console.log(url);
            if (url.indexOf('?') > -1){
                console.log("here");
                var regex = /([\?&])lang=[^&]*/;
                url = url.replace(regex, "$1lang=" + choosen);
            } else {
                url += 'index.php?lang=' + choosen;
            }
            console.log(url);
            window.location.href = url;
        }
    </script>
</body>
</html>
