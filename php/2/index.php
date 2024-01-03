<?php
    session_start();
    if(isset($_GET['source']) != ''){
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

        header('HTTP/1.1 301 Moved Permanetly');
        header('Location: '.$redirect);
        exit();
    }
    $user_name = "Alex";
    setcookie("_user_name", $user_name, time() + 60*3);
    

    $title = "Главная";
    include "./blocks/header.php"
?>

<h1>Главная</h1>


<?php
    // print_r($_GET);
    echo date("d-m-y H:i:s") . '<br>';
    echo date('d-m H:i:s', strtotime('+2 Hour')) . '<br>';

    $lis = [5, 7, 3, 6, 7, 8];
    unset($lis[1]);
    $lis = array_values($lis);

    sort($lis);
    print_r($lis);
    
    echo'<br>';

    rsort($lis);
    print_r($lis);

    echo'<br>';

    echo in_array('3', $lis) .'<br>';

    $arr = array_slice($lis, 2, 2);
    var_dump($arr);
    echo'<br>';

    $arr_1 = [5, 7];
    $arr_2 = [6, 8, 9];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo '<br>';

    $x = "10";
    echo gettype($x) .'<br>';
    echo is_numeric($x) .'<br>';
    echo is_integer($x) .'<br>';

    $str = "Example";
    echo strpos($str, "am") . '<br>';

    $words = "john, bob, alex";
    $arr_w = explode(",", $words);
    print_r($arr_w);
    echo '<br>';
    echo implode(' | ', $arr_w) .'<br>';

    $filename = "text.txt";

    $file = fopen($filename, "a");

    // fwrite($file, "\nExample text\nHello");

    fclose($file);

    $fileo = fopen($filename, "r");

    $content = fread($fileo, filesize($filename));

    fclose($fileo);

    echo "<br><pre>$content</pre><br>";

    file_put_contents("a.txt", "Example");

    echo file_get_contents("a.txt") . '<br>';

    echo file_exists('a.txt'). "<br>";
    //rename("a.txt","newname.txt");
    //unlink("a.txt");

    echo __FILE__ ."<br>";
    echo fileperms(__FILE__) ."<br>";
    // chmod(__FILE__, 0777);

    // phpinfo();
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    echo $_SERVER['HTTP_HOST'] . '<br>';
    echo $_SERVER['REQUEST_URI'] . '<br>';
    echo $_SERVER['HTTP_USER_AGENT'] . '<br>';

    $user_name = "Alex";
    // setcookie("_user_name", $user_name, time() + 0);

    echo $_COOKIE['_user_name']."<br>";

    // setcookie("_user_name", $user_name, time() - 60*3);

    //$_SESSION['user_name'] = $user_name;

    //unset($_SESSION['user_name']);

    //session_destroy();

    if (isset($_SESSION['user_name']) == "Alex") {
        echo "Да, ссесия установлена!";
    }
    require "./blocks/footer.php"
?>