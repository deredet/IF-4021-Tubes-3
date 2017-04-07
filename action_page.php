<pre><?php
if( isset($_POST['comment'] ) && !empty( $_POST['comment'] ) )
{
    $txt= $_POST['comment'] . PHP_EOL; 
    file_put_contents('config.in', $txt);
    shell_exec("tugas3.exe");
    $result = file_get_contents("result.out");
    $result = nl2br($result);
    
    echo $result;
    
}
?></pre>