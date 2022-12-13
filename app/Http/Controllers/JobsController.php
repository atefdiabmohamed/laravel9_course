<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\JobsFiles;
use App\Http\Requests\CreateJobsRequest;
use App\Http\Requests\UpdatejobRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class JobsController extends Controller
{
public function index(){
$data=get_cols_where_p(new job(),array("*"),array(),'id','DESC',11);
if(!empty( $data)){
foreach( $data as $info){
$info->files=get_cols_where(new JobsFiles(),array("*"),array("jobsid"=>$info->id));
}
}
return  view('index',['data'=>$data]);
}
public function get_all_jobs(){
$data=get_cols_where_p(new job(),array("*"),array(),'id','DESC',11);
return response()->json( $data);
}
public function create(){
return view('create');
}
public function store(CreateJobsRequest $request){
$datatoinsert['name']=$request->job_name;
$datatoinsert['active']=$request->job_active;
$datatoinsert['created_at']=date("Y-m-d H:i:s");
$flag=insert(new job(),$datatoinsert);
if($flag){
$parentjob=get_cols_where_row(new job(),array("id"),$datatoinsert);
if(!empty($parentjob)){
if($request->has('photo')){
foreach($request->photo as $image){
$datatoinsertFiles['photo']=upload("uploads",$image);
$datatoinsertFiles['created_at']=date("Y-m-d H:i:s");
$datatoinsertFiles['jobsid']=$parentjob['id'];
insert(new JobsFiles(),$datatoinsertFiles);
}
}
}
}
return redirect()->route('jobindex')->with(['success'=>'Added successfully']);
}
public function edit($id){
$data=get_cols_where_row(new job(),array("*"),array("id"=>$id));
return view('edit',['data'=>$data]);
}
public function update($id,UpdatejobRequest $request){
$dataToupdate['name']=$request->job_name;
$dataToupdate['active']=$request->job_active;
$dataToupdate['updated_at']=date("Y-m-d H:i:s");
//equent model
update(new job(),$dataToupdate,array("id"=>$id));
return redirect()->route('jobindex')->with(['success'=>'updated successfully']);
}
public function destroy($id){
//equent model
delete(new job(),array("id"=>$id));
return redirect()->route('jobindex')->with(['success'=>'deleted successfully']);
}
public function ajax_search(Request $request){
if($request->ajax()){
$searchbyjobname=$request->searchbyjobname;
$data=job::where("name","like","%{$searchbyjobname}%")->orderby("id","ASC")->paginate(1);
return view('ajax_search',['data'=>$data]);
}
}
public function createjob_api(Request $request){
$datatoinsert['name']=$request->name;
$datatoinsert['active']=$request->active;
$is_exsists=job::select("*")->where( $datatoinsert)->get();
if(!empty($is_exsists) and count($is_exsists) >0){
$responce=array("code"=>403,"message"=>"exsitis before");
}else{
$datatoinsert['created_at']=date("Y-m-d H:i:s");
$flag=insert(new job(),$datatoinsert);
if($flag){
$responce=array("code"=>200,"message"=>"created successfully");
}else{
$responce=array("code"=>401,"message"=>"created successfully");
}
}
return response()->json($responce);
}
}