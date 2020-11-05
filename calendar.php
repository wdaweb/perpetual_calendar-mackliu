<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆製作</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    
        table{
            width:750px;
            margin:auto;
            border:1px solid #ccc;
        }
        table  td {
            border:1px solid #ccc;
            text-align:center;
            padding:10px 0;
        }
        table td:hover{
            background:yellow;
        }
    </style>

</head>
<body>
<h3>月曆製作</h3>
<?php

$thisMonth=date('m');
echo "這個月=>".$thisMonth;
echo "<br>";
$monthDays=date('t');
echo "這個月天數=>".$monthDays;
echo "<br>";
$firstDate=strtotime(date('Y-m-').'1');
//echo $firstDate;
$startDayWeek=date('w',$firstDate);
echo "第一天星期=>".$startDayWeek;
echo "<br>";


?>
<a href="calendar.php?year=xxx&month=<?=$thisMonth-1;?>">上一個月</a>
<a href="calendar.php?year=xxxx&month=<?=$thisMonth+1;?>">下一個月</a>
<table>
<tr>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>

<?php

for($i=0; $i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){

        echo "<td>";
        if($i==0 && $j<$startDayWeek){
            echo "&nbsp;";
        }else if((($i*7) + ($j+1) - $startDayWeek)>$monthDays){

        }else{
            echo (($i*7) + ($j+1) - $startDayWeek);
        }
        
        echo "</td>";
    }
    echo "</tr>";

}

?>
</table>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

