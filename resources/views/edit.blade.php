@extends('main')
@section('title')
تعديل وظيفة 
@endsection

@section('content')

<form method="post" action="{{ route('updatejob',$data['id']) }}"  style="width: 80%; margin:0 auto;">
    @csrf
    <div class="form-group">
      <label for="job_name"> job name </label>
      <input type="text" class="form-control" id="job_name"  name="job_name" value="{{ old('job_name',$data['name']) }}">
    @error('job_name')
    <span class="text-danger"> {{ $message }}</span> 
    @enderror
    </div>
    <div class="form-group"> 
        <label for="job_name"> active status  </label>
       <select class="form-control"  name="job_active" id="job_active">
        <option value="">Select status</option>
       <option @if(old('job_active',$data['active'])==1) selected  @endif value="1">yes</option>
       <option @if(old('job_active',$data['active'])==0 and old('job_active',$data['active'])!="" ) selected  @endif value="0"> no</option>
       </select>
       @error('job_active')
       <span class="text-danger"> {{ $message }}</span> 
       @enderror
      </div>
     
    <button type="submit" class="btn btn-primary">update job</button>
  </form>


@endsection