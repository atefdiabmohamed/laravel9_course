<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">active</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

     @if(!@empty($data))
     @php $i=1;    @endphp
    @foreach ($data as $info )
      <tr>
        <td> {{ $i }} </td>
        <td> {{ $info->name }} </td>
        <td> @if($info->active==1) مفعل @else معطل @endif </td>
        <td> 
 <a href="{{ route('editjob',$info->id) }}" style="color: white" class="btn btn-sm btn-primary">edit</a>
 <a href="{{ route('deletejob',$info->id) }}" style="color: white" class="btn btn-sm btn-danger">delete</a>

        </td>
    </tr>  
   @php  $i++; @endphp
    @endforeach

     @else   

     @endif
   
    </tbody>
  </table>
  <br>
  <div class="col-md-12" id="ajax_search_pagination">
    {{ $data->links() }}

  </div>
 
