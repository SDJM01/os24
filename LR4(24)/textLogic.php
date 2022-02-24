<?php

$outputText = "";
//Для вывода текста
//файлы для значений preset
$preset1 = 'C:\xampp\htdocs\LR4\LR4\kinorinhi.htm';
$preset2 = 'C:\xampp\htdocs\LR4\LR4\echomsk.htm';
$preset3 = 'C:\xampp\htdocs\LR4\LR4\vinni.htm';

if (isset($_GET["preset"]) == "1")
{
    $text = file_get_contents($preset1);

}
else{
    if (isset($_GET["preset"]) == "2")
    {
        $text = file_get_contents($preset2);

    }
    if (isset($_GET["preset"]) == "3")
    {
        $text = file_get_contents($preset3);

    }
    else if (isset($_GET["preset"]) == "") {
        $text = "";
    }
    if (isset($_POST['doText']))
    {
        $text = $_POST['text'];
    }
}



function textTask1($text){
        $i = 0;
        $numlist = '<ol class = "ollist">';
        $checktext = preg_match_all('#\s?<h[12][^>]*>(.*?)</h[12][^>]*>\s?#', $text,$matches,PREG_SET_ORDER);
        if ($checktext) {
            $checkerh2 = false;
            if(strpos($matches[0][0], "h2")){
                $checkerh2 = true;
            }
            while($matches[$i][0]){
                if (strpos($matches[$i][0], "h1") && $matches[$i + 1][0]) {
                    $numlist = $numlist . '<li class = "lilist">';
                    if (!strpos($matches[$i + 1][0], "h1")) {
                        $numlist = $numlist . $matches[$i][1] . '<ol class="ollist">';
                    } else {
                        $numlist = $numlist . $matches[$i][1] . '</li>';
                    }
                } elseif (strpos($matches[$i][0], "h2") && $matches[$i + 1][0]) {
                    $numlist = $numlist . '<li class = "lilist">';
                    if (!strpos($matches[$i + 1][0], "h2")&&$checkerh2==false) {
                        $numlist = $numlist . $matches[$i][1] . '</li></ol></li>';
                    }elseif(!strpos($matches[$i + 1][0], "h2")&&$checkerh2==true){
                        $numlist = $numlist . $matches[$i][1] . '</li></ol><ol class = "ollist">';
                        $checkerh2 == false;
                    }
                    else {
                        $numlist = $numlist . $matches[$i][1] . '</li>';
                    }
                }
                elseif(!$matches[1][0]){
                    $numlist = $numlist . '<li class = "lilist">'. $matches[0][1].'</li></ol>';}
                elseif(strpos($matches[$i][0], "h2") && !$matches[$i + 1][0] && $checkerh2 == false){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol></li></ol>';
                }
                elseif(strpos($matches[$i][0], "h2") && !$matches[$i + 1][0] && $checkerh2 == true){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol>';
                }
                elseif(strpos($matches[$i][0], "h1") && !$matches[$i + 1][0]){
                    $numlist = $numlist .'<li class = "lilist">'.$matches[$i][1].'</li></ol>';
                }
                $i++;
            }
            return $numlist;
        } else {
            return 0;
        }
    }

    
function textTask7($text)
{
  
    $symbol1_regex = '/[\!]{4,}/';
    $symbol2_regex = '/[\?]{4,}/';
    $symbol3_regex = '/[\.]{4,}/';
    
    //$resultText = str_replace($symbol1_regex, "!!!", $text);//Заменяем символ &ndash на тире
    //$resultText = str_replace($symbol2_regex, "???", $text);//Заменяем символ &ndash на тире
    //$resultText = str_replace($symbol3_regex, "...", $text);//Заменяем двойное тире на &mdash и неразрывный пробел
    
    $output1 = preg_replace('/[\!]{4,}/', '!!!', $text);
    $output2 = preg_replace('/[\?]{4,}/', '???', $text);
    $output3 = preg_replace('/[\.]{4,}/', '...', $text);
    if ($text = $output1)
    {
        echo $output1;
    }
    
    else if ($text = $output2)
    {
        echo $output2;
    }
    else if ($text = $output3)
    {
        echo $output3;
    }
    //echo preg_replace($symbol2_regex, '???', $text);
    //echo preg_replace($symbol3_regex, '...', $text);
}




function textTask11($text)
{



    $text = stripslashes($text);
    //Регулярки для оглавлений 1-3 уровня
    preg_match_all("/<h1.*?>(.*?)<\/h1>/i", $text, $items);
    preg_match_all("/<h2.*?>(.*?)<\/h2>/i", $text, $items);
    preg_match_all("/<h3.*?>(.*?)<\/h3>/i", $text, $items);

    //Если полученный текст существует, выводим оглавление
    if (!empty($items[0])) {

        ?>

        <div class="texts-list">

            <h3>Содержание</h3>

            <ol>

                <?php

                foreach ($items[1] as $i => $row) {

                    echo '<li><a href="#tag-' . ++$i . '">' . $row . '</a></li>';

                }

                ?>

            </ol>

        </div>

        <?php

    }
    //Цикл для якорных ссылок
    foreach ($items[0] as $i => $row) {
        $text = str_replace($row, '<a name="tag-' . ++$i . '"></a>' . $row, $text);
    }	
    
    // //Удаляем вложенные в H1 теги
    // $config = HTMLPurifier_Config::createDefault();
    // $config->set('HTML.AllowedElements', ['h1']); // Разрешаем только тег a
    // $purifier = new HTMLPurifier($config);
    // $text = $purifier->purify($text);
    echo $text;
}

function textTask16($text)
{
    $patterns = array("/рот[а-я]/m", "/пух[а-я]/m", "/делать[а-я]/m", "/ехать[а-я]/m", "/около[а-я]/m",
        "/Для[а-я]/m", "/Рот[а-я]/m", "/Пух[а-я]/m", "/Делать[а-я]/m", "/Ехать[а-я]/m", "/Около[а-я]/m", "/Для[а-я]/m");
    $replacements = array(" ###", " ###", " ######", " #####", " #####", " ###", " ###", " ###", " ######", " #####", " #####", " ###");
    $text = preg_filter($patterns, $replacements, $text);
    return $text;
}

?>

