<!DOCTYPE html>
 <meta charset="UTF-8">
 <head>
 <?php $ladies = array("stella", "sonio", "sophia", "keyu", "bolanle");
echo $ladies[3];?>
 </head>
 <body>
 <h2><?php echo "Hello Ms Stella"; ?> <h2>
 <h3><?php echo "Name:"." ". $ladies[0]. ", the string lenght is " .strlen($ladies[0]). ", the word count is ". str_word_count($ladies[0]) .", the reverse is ". strrev($ladies[0])?><h3>
 <h3><?php echo "Name:"." ". $ladies[1]. ", the string lenght is " .strlen($ladies[1]). ", the word count is ". str_word_count($ladies[1]) .", the reverse is ". strrev($ladies[1])?><h3>
 <h3><?php echo "Name:"." ". $ladies[2]. ", the string lenght is " .strlen($ladies[2]). ", the word count is ". str_word_count($ladies[2]) .", the reverse is ". strrev($ladies[2])?><h3>
 <h3><?php echo "Name:"." ". $ladies[3]. ", the string lenght is " .strlen($ladies[3]). ", the word count is ". str_word_count($ladies[3]) .", the reverse is ". strrev($ladies[3])?><h3>
 <h3><?php echo "Name:"." ". $ladies[4]. ", the string lenght is " .strlen($ladies[4]). ", the word count is ". str_word_count($ladies[4]) .", the reverse is ". strrev($ladies[4])?><h3>
 
<?php $data = ["stella", "uche"]; //or
$data = array("stella", "uche");
// you can overite data in an array
$data[1] = "stella";
print_r ($data); ?> <br/>

<?php //$data = ["stella => 13", "Uche => 12"];
$data = ["stella"=> "13", "Uche" => "12"];
print_r ($data);?>

<br/>
<?php $students = [
    ["name" => "stella", "age" => "13", "height"=> "6ft"],
    ["name => ella", "age => 19", "height=> 8ft"],
    ["name" => "tella", "age" => "23", "height"=> "6ft"]
];
    echo $students[0]["name"];
    echo $students[0]["age"];
    echo $students[0]["height"];

    echo $students[1]
    // var_dump(is_array($students))
    // print_r($students);?>
</body>
</html>