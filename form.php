<?php
mb_internal_encoding ('UTF-8');
print_r($_POST);
$title='КъмСписъка';
include '/var/www/html/Address_book/include/header.php';


if ($_POST){
    $user=trim($_POST['user']);
    $user=str_replace('!','',$user);
    $tel=trim($_POST['tel']);
    $tel=str_replace('!','',$tel);
    $selectedGroup=(int)$_POST['group'];
    
    if (mb_strlen($user)<4){
        $errorr=true;
        echo '<p> Името е късо   </p>';
                   
    }
    if (mb_strlen($tel)<6 || mb_strlen($tel)>12) {
        $errorr=true;
        echo '<p> Телефона е грехен   </p>';            
        $errorr=true;
    }
    if (!array_key_exists($selectedGroup, $group)){
        $errorr=true;
        echo '<p> Невалидна Група </p>';
    }
    
if (!$errorr){
    echo 'Imame validen Zapis';

    $resultForm=$user.'!'.$tel.'!'.$selectedGroup."\n";
if (file_put_contents('data.txt',  $resultForm, FILE_APPEND)){

    echo 'Zapisa e zapisan';

}


}


}

?>

<a href="/Address_book/include"> Към Списъка  </a>    
<h1>Vie ste vuv form </h1>

<form method="POST"> 
    <label for="user">Име на потребител</label><br>
    <input type="text" name="user" /> <br>
    <label for="tel">Телефон</label><br>
    <input type="text" name="tel" />
    <input type="submit" value="buton" />


<select name="group" id="gr1">
<?php
foreach ($group as $key=>$val){
echo '<option value="'.$key.'" >'.$val.'</option>';
}
?>
</select>
</form>

<?php
include '/var/www/html/Address_book/include/footer.php';
?>