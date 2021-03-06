@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">category</a> <a href="#" class="current">add category</a> </div>
    <h1> add Product attribute</h1>
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
            <h5>Add product attribute</h5>
          </div>
          <div class="widget-content nopadding">

          <form class="form-horizontal"  method="post" action="{{url('admin/add-attribute')}}/{{$productDetails->id}}" name="add_attribute" id="add_attribute"   enctype="multipart/form-data">
            {{ csrf_field()}}

                        <div class="control-group">
                <label class="control-label">Product Name</label>
                <label class="control-label"><strong>{{$productDetails->product_name}}</strong></label>
                <!-- <div class="controls">
                  <input type="text" name="product_name" id="product_name">
                </div> -->
              </div>
            
              <div class="control-group">
                <label class="control-label">Product Color</label>
                <label class="control-label"><strong>{{$productDetails->product_name}}</strong></label>
              </div>
              <div class="control-group">
                <label class="control-label">Product Code</label>
                <label class="control-label"><strong>{{$productDetails->product_code}}</strong></label>
              </div>            

            

              <div class="control-group">
                <label class="control-label"></label>
              <div class="input_field_wrapper">
               <div>
        <input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:150px; " value=""required/>
        <input type="text" name="size[]" id="size" placeholder="SIZE" style="width:150px; " value=""required/>
        <input type="text" name="price[]" id="price" placeholder="Price" style="width:150px; " value=""required/>
        <input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:150px; " value=""required/>
       
        
    
        <a href="javascript:void(0);" class="add_button" title="Add field">add</a>
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
    


















    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>view attributes</h5>
          </div>
          <div class="widget-content nopadding">
          <form class="form-horizontal"  method="post" action="{{url('admin/edit-attributes')}}/{{$productDetails->id}}" name="edit_attribute" id="edit_attribute"   enctype="multipart/form-data">
            {{ csrf_field()}}
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Attribute Id</th>
                  <th>SKU</th>
                  <th>Size </th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($productDetails['attributes'] as $attribute)
                <tr class="gradeX">
                
                  <td><input type="hidden" name="idAttr[]" value="{{ $attribute->id}}">{{ $attribute->id}}</td>
                  <td>  {{ $attribute->sku}}</td>
                  <td>  {{ $attribute->size}}</td>
                  <td><input type="text" name="price[]" id="price" placeholder="PRICE"  value="{{ $attribute->price}}" required/></td>
                  <td ><input type="text" name="stock[]" id="stock" placeholder="STOCK"  value="{{ $attribute->stock}}" required/></td>
            
                 
                  <td class="center">
                  <input type="submit" value="Update" class="btn btn-primary btn-mini">

                  <a rel="{{$attribute->id}}" rel1="{{url('/admin/delete-attribute')}}/{{$attribute->id}}"  <?php /* href="{{url('/admin/delete-product')}}/{{$product->id}}"*/ ?> href="javascript:" class="btn btn-danger btn-mini deletAttribute">Delete</a>
                  </div></td>
                </tr>
                
          
           
 
           
            </div>
          
        
            @endforeach
              </tbody>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection
