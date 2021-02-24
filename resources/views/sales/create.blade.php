@extends('layouts.main-app')

@section('content')
    


<div class="container my-5" style="border-radius:26px; -moz-border-radius:26px;-webkit-border-radius:26px; border:15px solid #2eb9ce;">
    <h1 style="text-align: center">ENTER ITEM SALES</h1>



<form method="POST" action="{{route('sales.store')}}"> 
    @csrf
<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="sales_name" class="form-label">Product Name</label>
            <input type="text" class="form-control form-control-lg " name="sales_name" id="sales_name"  autocomplete="name"  placeholder="Name of Product Sold">
          </div>
    </div>

    <div class="col">
        <div class="mb-3">
            <label for="description" class="form-label">Item Description</label>
            <input type="text" class="form-control form-control-lg" name="description" id="description" autocomplete="description"   placeholder="Item Description">
          </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control form-control-lg" name="price" id="price" autocomplete="price"   placeholder="Price in PHP">
          </div>
    </div>

    <div class="col">
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control form-control-lg " name="quantity" id="quantity" autocomplete="quantity"  placeholder="Quantity">
          </div>
    </div>
</div>

<div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary btn-lg my-3">
      ADD TO SALES LIST
    </button>
</div>

</form>  
    </div>






@endsection
