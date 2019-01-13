<?php
header('Content-Type:application/json; charset=utf-8');
$movie_info = json_decode(file_get_contents("./collect/movie_info_all_111.json"),true);
$word = $_GET['s'];
$result = array();
if($_GET['s']!=""){
foreach ($movie_info as $value) {
       if(strpos($value['title'],$word) !== false){
           $result[] = $value;
        }
        $i++;
    }}
echo json_encode($result);
