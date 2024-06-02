<code>
    <h1>
<?php
function phone() {
    $code = '+98';
    $rand = mt_rand(1000000000, 9999999999);
    $out = $code . $rand;
    return $out;
}
if(isset($_GET['number'])) {
    $number = $_GET['number'];
    for ($i = 1; $i < $number+1; $i++) {
        $rands = rand(0,1);
        $outs = ($rands == 0) ? '<d style="color:green;">true</d>' : '<d style="color:red;">false</d>';
        echo $i," : ",phone()," > ",$outs,"<br>";
    }
}
else {
    echo "<pre>Error Parameter <br> input > <br> data.php?number=20<pre>";
}
?>
</h1>
</code>