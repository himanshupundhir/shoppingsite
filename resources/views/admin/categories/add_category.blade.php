@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">category</a> <a href="#" class="current">add category</a> </div>
    <h1>form validation</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form validation</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('admin/add-category')}}" name="add_category" id="add_category" novalidate="novalidate">
            {{ csrf_field()}}


            <div class="control-group">
                <label class="control-label">Category level</label>
                <div class="controls">
                  <input type="text" name="category_name" id="category_name">
                </div>
              </div>
            <div class="control-group" style="width:450px;">
                <label class="control-label">Category name</label>
                <div class="controls">
                  <select name="parent_id" width="50px">
                    <option value="0">Main category</option>
                    @foreach($levels as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                    @endforeach
                    </select>
                </div>
              </div>
              
 
              <div class="control-group">
                <label class="control-label">description</label>
                <div class="controls">
                  <input type="text" name="description" id="description">
                </div>
              </div>

           
              <div class="control-group">
                <label class="control-label">URL</label>
                <div class="controls">
                  <input type="text" name="url" id="url">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="add category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>




@endsection