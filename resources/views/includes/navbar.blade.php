<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{asset('storage/gg.jpg')}}" alt="business_logo" width="75" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill" >
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

          

          <li class="nav-item"><a class="nav-link active"  aria-current="page" href="{{route('products.create')}}">Add a Product</a></li>
          <li class="nav-item"><a class="nav-link active"  aria-current="page" href="{{route('products.index')}}">View List of Products</a></li>

          <li class="nav-item"><a class="nav-link active"  aria-current="page"   href="{{route('sales.create')}}">Add Sales Transactions</a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page"  href="{{route('sales.index')}}">View List of Transaction</a></li>
    
          {{-- <div class="dropdown" >
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Business Products
            </a>
          
            <ul class="dropdown-menu nav-fill" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('products.create')}}">Add a Product</a></li>
              <li><a class="dropdown-item" href="{{route('products.index')}}">View List of Products</a></li>
            </ul>
          </div>


          <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Sales/Transactions
            </a>
          
            <ul class="dropdown-menu nav-fill" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('sales.create')}}">Add Sales Transactions</a></li>
              <li><a class="dropdown-item" href="{{route('sales.index')}}">View List of Transaction</a></li>
            </ul>
          </div> --}}


        </ul>
     
    
      </div>
    </div>
  </nav>    