@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
  @if(Session::has('flash_message_success'))
        
        <div class="alert  alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{!! session('flash_message_success') !!} </strong>
</div>
@endif 
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>view banner</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Banner Id</th>
                  <th>Title</th>
                  <th>Link </th>
                  <th>image</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($banners as $banner)
                <tr class="gradeX">
                
                  <td>{{$banner->id}}</td>
                  <td>{{$banner->title}}</td>
                  <td>{{$banner->link}}</td>
                  <td>{{$banner->image}}</td>
                  <td>{{$banner->status}}</td>
                  <td>
                  @if(!empty($banner->image))
                  <img  style="width:100px" src="{{asset('/public/images/frontend_images/banners/'.$banner->image)}}">
                  @endif
                  </td>
                  <td class="center">
                  
                  <a href="{{url('/admin/edit-banner')}}/{{$banner->id}}" class="btn btn-primary btn-mini">Edit</a>
                  <a rel="{{$banner->id}}" rel1="{{url('/admin/delete-banner')}}/{{$banner->id}}"  <?php /* href="{{url('/admin/delete-product')}}/{{$product->id}}"*/ ?> href="javascript:" class="btn btn-danger btn-mini deletRecord">Delete</a>
                  </td>
                </tr>
                
          
           
            </div>
          
        
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

















@endsection