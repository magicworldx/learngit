<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include('file/file.php');
include('admin/conn.php');
$gp=new gpifream();

$select=$gpdb->gp_select_all('tb_admin');
echo "<xmp>";
print_r($select);
echo "</xmp>";
?>