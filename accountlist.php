
<?php include("includes/header.php"); \header\addHeader(); ?>
В разработке

<?php 
function LoadDataUsers() // Загрузка списка юзеров
{
    $query = mysql_query("SELECT id, fio FROM sobstvenniki");
    $array = mysql_fetch_array($query);
    do
    {
        echo "<a href=\"?id_user=".$array['id'].">".$array['id']." ".$array['fio']."</a>";
    }
    while($array = mysql_fetch_array($query));
}
 
 
function CurrentUser($id_user) //Вывод инфы по конкретному пользователю
{
    if(empty($id_user))
    {
        echo "Юзер не выбран";
    }
    else
    {
        $query = mysql_query("SELECT * FROM sobstvenniki WHERE id='$id_user'");
        $array = mysql_fetch_array($query);
        return $array;
    }
}
?>

<?php include("includes/footer.php"); \footer\addFooter(); ?>