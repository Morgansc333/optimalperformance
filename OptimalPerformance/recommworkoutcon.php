<?php
#the below line links to a php file that connects to the database
include("DBworkoutscon.php");

$db= $conn;

$tableName="diary";

#the colums that are being retrieved
$columns= ['id', 'date','exercise','sets','reps', 'kg','rpe'];

#this is clarifying which table and which array of colums need to be retrieved
$fetchData = fetch_data($db, $tableName, $columns);

#retrieving the data from the correct table with the correct columns specified above 
function fetch_data($db, $tableName, $columns){

#connecting and table error handlers 
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);

#sql query that will sort the data from the specified table
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY date DESC";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
    
  # empty table error handler
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
