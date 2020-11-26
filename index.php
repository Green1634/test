<!-- <?php  echo "write something " ; ?> -->
<?php  echo "hello word " ; ?> <br/>

<?php 
 $num = 'hello';
 $num2 = 'Oluwakemi';

 echo $num." ".$num2


?> <br/>

<?php  define('AGE', 14);
echo AGE; ?> <br/>

<?php $old_age = 15;
$new_age = 40;
$new_age = $old_age + $new_age;
echo $new_age; ?> <br/>




 <?php $name = "stelle";
function write(){
    global $name;
    echo "$name";
}
write(); ?> <br/>

<?php function number (){
    static $num = 2;
    print $num; $num++;
}
number();
number();
number();
number();
number();
?> <br/>


<?php 
$fname = "stella";
$lname = "Onwuchekwa";
$fullname = $fname." ".$lname;
echo $fullname; 
?> <br/>

<?php $ladies = array("Toluwase", "Oluwakemi", "Kemi", "Tola", "Esther", "Shola", "Ayo", "Mide", "");
print "I like " . $ladies[0] . "<br/> " . $ladies[1] . "<br/> " . $ladies[2] . "<br/>". $ladies[3] ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php print   $ladies[0]. ", the string lenght is " .strlen($ladies[0]). ", the word count is ". str_word_count($ladies[0]) .", the reverse is ". strrev($ladies[0]) 
  . ",<br/> " .$ladies[1]. ", the string lenght is " .strlen($ladies[1]). ", the word count is ". str_word_count($ladies[1]) .", the reverse is ". strrev($ladies[1]) 
  . ",<br/> " .$ladies[2]. ", the string lenght is " .strlen($ladies[2]). ", the word count is ". str_word_count($ladies[2]) .", the reverse is ". strrev($ladies[2]) 
  . ",<br/>".$ladies[3]. ", the string lenght is " .strlen($ladies[3]). ", the word count is ". str_word_count($ladies[3]) .", the reverse is ". strrev($ladies[3]) 
  . ",<br/>".  $ladies[4]. ", the string lenght is " .strlen($ladies[4]). ", the word count is ". str_word_count($ladies[4]) .", the reverse is ". strrev($ladies[4]) 
  . ",<br/>".  $ladies[5]. ", the string lenght is " .strlen($ladies[5]). ", the word count is ". str_word_count($ladies[5]) .", the reverse is ". strrev($ladies[5]) 
  . ",<br/>". $ladies[6]. ", the string lenght is " .strlen($ladies[6]).", the word count is ". str_word_count($ladies[6]) .", the reverse is ". strrev($ladies[6]) 
  . ",<br/>".  $ladies[7]. ", the string lenght is ".strlen($ladies[7]). ", the word count is ". str_word_count($ladies[7]) .", the reverse is ". strrev($ladies[7]) 
  ?> </h2>
</body>
</html>