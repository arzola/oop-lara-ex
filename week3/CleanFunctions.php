<?php
//Bad
function query($table, $fields, $wheres, $orderby)
{

}

query('table_users','id,name,title',['name>4'],['title'=>'asc']);

//Good
//TODO
