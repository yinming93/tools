<?php 
header("Content-type: text/html; charset=utf-8"); 
$DB_DBName = addslashes($_POST['kname']);
$DB_TBLName = addslashes($_POST['bname']);
foreach ($_POST as $k => $v) {
		if(!$v){
			echo "<script>";
			echo "alert('数据库名和表名都不能为空');";
			echo "window.location='index.php';";
			echo "</script>";
			exit; 
		}
	}
$savename = date("YmjHis"); 
$Connect = @mysql_connect('localhost','root','ymbb1027Ca$$w0rd') or die("Couldn't connect."); 

$sql1="select `TABLE_NAME` from `INFORMATION_SCHEMA`.`TABLES` where `TABLE_SCHEMA`='$DB_DBName' and `TABLE_NAME`='$DB_TBLName' ";
$query1 = mysql_query($sql1);
$row1 = mysql_fetch_assoc($query1);
if (!$row1) {
			echo "<script>";
			echo "alert('数据库或者表不存在，请输入正确的库名表名！');";
			echo "window.location='index.php';";
			echo "</script>";
			exit; 
}else{
	mysql_query("Set Names 'gbk'"); 
$file_type = "vnd.ms-excel"; 
$file_ending = "xls"; 
header("Content-Type: application/$file_type;charset=big5"); 
header("Content-Disposition: attachment; filename=".$savename.".$file_ending"); 
//header("Pragma: no-cache"); 

$now_date = date("Y-m-j H:i:s"); 
$title = "数据库名:$DB_DBName,数据表:$DB_TBLName,备份日期:$now_date"; 

$sql = "Select * from $DB_TBLName"; 
$ALT_Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database"); 
$result = @mysql_query($sql,$Connect) or die(mysql_error()); 

// echo("$title\n");   
$sep = "\t"; 
for ($i = 0; $i < mysql_num_fields($result); $i++) { 
echo mysql_field_name($result,$i) . "\t"; 
} 
print("\n"); 
$i = 0; 
while($row = mysql_fetch_row($result)) { 
$schema_insert = ""; 
for($j=0; $j<mysql_num_fields($result);$j++) { 
if(!isset($row[$j])) 
$schema_insert .= "NULL".$sep; 
elseif ($row[$j] != "") 
$schema_insert .= "$row[$j]".$sep; 
else 
$schema_insert .= "".$sep; 
} 
$schema_insert = str_replace($sep."$", "", $schema_insert); 
$schema_insert .= "\t"; 
print(trim($schema_insert)); 
print "\n"; 
$i++; 
} 
return (true); 
}



?> 
