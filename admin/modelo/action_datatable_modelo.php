

<?php
 
 // DataTables PHP library
 
 include $_SERVER['DOCUMENT_ROOT'] . "/admin/php/DataTables.php";
  
 use
 DataTables\Database,
 DataTables\Database\Query,
 DataTables\Database\Result;
 
 
 
         $RAW_SQL_QUERY="SELECT * FROM modelo WHERE 1";        
         $r=$db->sql($RAW_SQL_QUERY)->fetchAll();
 
         $arr=array("data"=>$r,"options"=>'',"files"=>'');//DATATABLE CLIENT SIDE PARSES
         
         echo json_encode($arr);
 
 
 
 exit();
 