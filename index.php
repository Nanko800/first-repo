<?php 
$title='ЦелияСписъкСприятели';
include '/var/www/html/Address_book/include/header.php';

  ?>
  
  <table>
<tr>
<td>Име</td>
<td>Телефон</td>
<td>Група</td>
<td></td>
</tr>

<?php
if(file_exists ('data.txt')){

  $result=file ('data.txt');
  foreach($result as $val){
    $columns=explode('!', $val);
echo '<tr>
<td> '.$columns[0].' </td>
<td> '.$columns[1].' </td>
<td> '.$group[trim($columns[2])].' </td>

</tr>';
}


}
?>

</table>



    
<a href="/Address_book/include/form.php">  Добави нов контакт </a>

<p>Нова програма</p> 
<h1>Tova e h1</h1>

<?php

include '/var/www/html/Address_book/include/footer.php';

?>












