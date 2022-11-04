<?php 

function get_cols_where_p($model=null,$columns=array(),$where=array(),$orderbyfiled='id',$orderbytype='ASC',$paginationcounter=11){
    $data=$model::select($columns)->where($where)->orderby($orderbyfiled,$orderbytype)->paginate($paginationcounter);
    return  $data; 
}
function get_cols_where($model=null,$columns=array(),$where=array(),$orderbyfiled='id',$orderbytype='ASC'){
    $data=$model::select($columns)->where($where)->orderby($orderbyfiled,$orderbytype)->get();
    return  $data; 
}

function get_cols_where_limit($model=null,$columns=array(),$where=array(),$orderbyfiled='id',$orderbytype='ASC',$limit=5){
    $data=$model::select($columns)->where($where)->orderby($orderbyfiled,$orderbytype)->limit($limit)->get();
    return  $data; 
}

function insert($model=null,$dataToinsert=array()){
   $flag= $model::create($dataToinsert);
   return  $flag;
}
function update($model=null,$dataToupdate=array(),$where=array()){
   $flag= $model::where($where)->update($dataToupdate);
   return  $flag;
}
function get_cols_where_row($model=null,$columns=array(),$where=array()){
$datarow=$model::select($columns)->where($where)->first();
return $datarow;
}

function delete($model=null,$where=array()){
    $flag=$model::where($where)->delete();
    return $flag;
}


