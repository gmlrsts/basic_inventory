@extends('layouts.main-app')

@section('content')
    
    
    @foreach ($list as $item)
    <div class="container " style="margin-top:15%;border-radius:26px; -moz-border-radius:26px;-webkit-border-radius:26px; border:15px solid #2eb9ce;">
      <h1 style="text-align: center">EDIT A PRODUCT</h1>
  
  <form method="POST" action="{{route('sales.update',$item->id)}}"> 
    @csrf
    @method('PATCH')
  <div class="row">
      <div class="col">
          <div class="mb-3">
              <label for="sales_name" class="form-label">Product name</label>
              <input type="text" class="form-control form-control-lg " name="sales_name" id="sales_name"  autocomplete="name"  value="{{$item->sales_name}}">
            </div>
      </div>
  
      <div class="col">
          <div class="mb-3">
              <label for="description" class="form-label">Item Description</label>
              <input type="text" class="form-control form-control-lg" name="description" id="description" autocomplete="description"  value="{{$item->description}}"">
            </div>
      </div>
  </div>
  
  <div class="row">
      <div class="col">
          <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control form-control-lg" name="price" id="price" autocomplete="price"   value="{{$item->price}}"">
            </div>
      </div>
  
      <div class="col">
          <div class="mb-3">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="text" class="form-control form-control-lg " name="quantity" id="quantity" autocomplete="quantity"  value="{{$item->quantity}}"">
            </div>
      </div>
  </div>
  
  <div class="d-grid gap-2">

    <button type="submit" class="btn btn-primary btn-lg" style="margin-left:30%; margin-right:30%;">
      EDIT ITEM
    </button>


    <form action="{{route('sales.index')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-danger btn-lg" style="margin-left:30%; margin-right:30%;">
     CANCEL
    </button>
    </form>
      
    @endforeach
  </div>
  
  </form>  
</div>
  

  @endsection
