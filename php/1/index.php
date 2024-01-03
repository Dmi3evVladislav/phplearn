<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="blocks">
        
        <div class="first">
            <div class="str bl">
                <?php
                    echo "Hello<br>\n";
                    echo "My name is Vlad <br>";
                 
                    //Комментарий
                    #Комментарий
                    /*
                        Многострочный комментарий
                    */
                     
                 
                    //Создание переменных
                 
                    $num = 0;
                    $num = 8;
                    $abc = 4;
                 
                    $bool = true;
                 
                    $a = 0.5;
                    $b = "0.5";
                 
                    echo $a + $b . '<br>';
                    echo $a + floatval($b) . '<br>';
                 
                    //intval() floatval() и тд.
                 
                    //Работа со строками
                 
                    $name = "Vladislav";
                    $secname = "Dmitriev";
                    echo 'ФИ: ' . $name . ' ' . $secname . '<br>';
                 
                    $str = "Hello";
                    echo "Message: $str" . '!<br>'; //Кавычки имеют смысл! В двойные можно писать переменные, но потребляют в 2 раза больше памяти
                    echo 'Message: $str <br>';
                    echo "<input type='text'> <br>";
                 
                    echo strlen($str) . '<br>';
                    echo trim("   aboba   ") . '<br>';
                    echo strtolower($str) . '<br>';
                    echo strtoupper($str) . '<br>';
                    echo strtolower("ВЛAD") . '<br>';
                    echo strtoupper("влad") . '<br>';
                    echo strtoupper(trim("   aboba   ")) . '<br>';
                    echo md5("qwerty") . '<br>'; //хэширование
                    echo sha1('qwerty') . '<br>';
                 
                    //Констатнты
                 
                    define("MY_AGE", 17);
                    echo MY_AGE . '<br>';
                ?>
            </div>
            <div class="math bl">
                <?php
                    //Математические функции
                    echo "Математические функции <br><br>";

                    $x = 10;
                    $y = 20;

                    echo $x + $y .'<br>';
                    echo $x - $y .'<br>';
                    echo $x * $y .'<br>';
                    echo $x / $y .'<br>';
                    echo $x % $y .'<br>';

                    $x += 10; //$x = $x + 10;

                    echo $x  .'<br>';

                    echo M_PI  .'<br>';
                    echo M_E  .'<br>';

                    echo abs(-22) .'<br>';
                    echo ceil(3.1) .'<br>'; //округление в большую
                    echo floor(3.9) .'<br>'; //округление в меньшую
                    echo round(3.5) .'<br>'; //округление по правилам
                    echo round(3.67453494, 2) .'<br>'; //округление по правилам
                    echo mt_rand(0, 100) .'<br>'; //рандомное число от и до

                    echo min(2, 4, 7, 1) .'<br>'; //минимальное
                    echo max(2, 4, 7, 1) .'<br>'; //максимальное
                ?>
            </div>
            <div class="ifelse bl">
                <?php
                    //Условные конструкции
                    echo "Условные конструкции <br><br>";

                    $f = 7;
                    $iswg = true;

                    if($f == 5) {
                        echo '$a = 5 <br>';
                    }
                    else if($f == 6) {
                        echo '$a = 6 <br>';
                    }
                    else {
                        echo '$a != 5 <br>';
                    }

                    if($f == 7 || $iswg) {
                        echo 'Good<br>';
                    };

                    if($f == 7 && $iswg) {
                        echo 'Good<br>';
                    };
                ?>
            </div>
        </div>
        <div class="second">
            <div class="swcase bl">
                    <?php
                //Switch-case
                echo "Switch-case<br><br>";

                $z = 7;
                switch($z) {
                    case 6:
                        echo "Var: 6 <br>";
                        break;
                    case 8:
                        echo "Var: 8 <br>";
                        break;
                    default: 
                        echo "no case <br>";
                        break;
                }
                    ?>
            </div>
            <div class="arr bl">
                <?php
                    //Массивы и тп.
                    echo "Массивы и тп.<br><br>";

                    $nums = array(4, 5, 7, 2, 0, -23, 6);
                    $nums[0] = 1;
                    echo $nums[0] . '<br>';

                    $arr = [4, true, 6, "8", 0.4];
                    echo $arr[3] . '<br>';

                    $list = ["age" => 50, "name" => "Vlad", "hobby" => "prog"];
                    echo $list["age"] . '<br><br>';

                    // Многомерные массивы
                    $matrix = [
                        [4, 6.4, 8], 
                        [3, 2], 
                        [1, 5, 8, "9"]
                    ];

                    echo $matrix[0][1] . '<br>';

                ?>
            </div>
            <div class="cycles bl">
                <?php
                    //Циклы
                    echo "Циклы<br><br>";

                    for($i = 0; $i < 5 ; $i++) {
                        echo $i .' ';
                    };
                    echo "<br>";
                    $w = 0;
                    while($w < 5) {
                        echo $w .' ';
                        $w++;
                    }
                    echo "<br>";
                    $g = 100;
                    do {
                        echo $g .' ';
                    } while ($g < 5);
                    echo "<br>";

                    for($i = 0; $i < 10 ; $i++) {
                        if ( $i == 5) {
                            continue;
                        }
                        if ( $i == 8) {
                            break;
                        }
                        echo $i .' ';
                    };
                    echo "<br>";

                    $fa = [5, 7, 3, 8, "some", 45.7, true];

                    for( $i = 0; $i < count($fa); $i++) {
                        echo $fa[$i] .' ';
                    }
                    echo "<br>";
                    $arrnum = [0, 2, 4, 5];
                    foreach ($list as $item => $value) {
                        echo "Key: $item. Value: $value <br>";
                    }
                    foreach ($arrnum as $item => $value) {
                        echo "Index: $item. Value: $value <br>";
                    }
                    foreach ($arrnum as  $value) {
                        echo "Value: $value <br>";
                    }
                ?>
            </div>
            <div class="func bl">
                    <?php
                        //Функции
                        echo "Функции<br><br>";
                        
                        function info($word){
                            echo "$word<br>";
                        };

                        function math($x, $y){
                            $res = $x + $y;
                            return $res;
                        };

                        info('Hello');
                        info(math(4, 6));

                        function summary($arr){
                            $summ = 0;
                            foreach($arr as $value) {
                                $summ += $value;
                            }
                            return $summ;
                        }

                        info(summary([0, 2, 6, 2, 5, 4]));

                        $h = 2;

                        function globf(){
                            global $h;
                            echo "$h<br>";
                        };

                        function click(){
                            static $count;
                            //$count = 0;
                            $count++;
                            echo $count . '<br>';
                        }

                        globf();
                        click();
                        click();
                        click();
                        
                    ?>
            </div>
        </div>
    </div>


    <style>

        .blocks {
            display: flex;
        }
        .first {
            margin-right: 6%;
            width: 100%;
        }
        .second {
            width: 100%;
        }
        .bl {
            border: 2px solid black;
            padding: 1%;
            margin-bottom: 1%;
        }
    </style>
</body>
</html>