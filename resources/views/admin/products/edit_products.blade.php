@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">category</a> <a href="#" class="current">add category</a> </div>
    <h1>Product</h1>
  </div>
  <div class="container-fluid"><hr>
  @if(Session::has('flash_message_success'))
        
        <div class="alert  alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{!! session('flash_message_success') !!} </strong>
</div>
@endif
@if(Session::has('flash_message_error'))
        
        <div class="alert  alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{!! session('flash_message_error') !!} </strong>
</div>
@endif 
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add product</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal"  method="post" action="{{url('admin/edit-product')}}/{{$productDetails->id}}" name="edit_product" id="editz_product" novalidate="novalidate" enctype="multipart/form-data">
            {{ csrf_field()}}
            

            <div class="control-group">

            <div class="control-group" style="width:450px;">
                <label class="control-label">Under Category</label>
                <div class="controls">
                  <select name="category_id" id="category_id" width="50px">
                   <?php echo  $categories_dropdawn ?>
                    
                    </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name" value="{{$productDetails->product_name}}">
                </div>
              </div>
            
              <div class="control-group">
                <label class="control-label">Product Color</label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color"value="{{$productDetails->product_color}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code"value="{{$productDetails->product_code}}">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="price" id="price"value="{{$productDetails->price}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                  <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                  <img style="width:30px;" src="{{asset('/images/backend_images/products/small/'.$productDetails->image)}}">
               <a href="{{url('/admin/delete-product-image')}}/{{$productDetails->id}}">delete</a>
                </div>
              </div>

             

 
              <div class="control-group">
                <label class="control-label">description</label>
                <div class="controls">
                  <input type="text" name="description" id="description"value="{{$productDetails->description}}">
                </div>
              </div>
            

              <div class="control-group">
                <label class="control-label">Material $care</label>
                <div class="controls">
                  <input type="text" name="care" id="care" value="{{$productDetails->care}}">
                </div>
              </div>
           
              
              <div class="form-actions">
                <input type="submit" value="add product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>




@endsection
