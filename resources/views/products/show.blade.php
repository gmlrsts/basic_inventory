@extends('layouts.main-app')
   

      @section('content')
          


          <table class="table table-dark table-striped my-5 table-hover table-responsive">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                  Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                  Price
                </th>

                <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                  STOCKS
                </th>

                <th scope="col" class="px-20 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                  Action
                </th>
              </tr>
            </thead>
            @foreach ($list as $item)
            <tbody>
              <tr>
                  
                <td>
                      <div >
                        {{$item->name}}
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <div > {{$item->description}}</div>
                </td>
                <td>
                  <span>
                    {{$item->price}}
                  </span>
                </td>
                <td >
                    {{$item->quantity}}
                </td>

                <td >
                  <form action="{{route('products.destroy',$item->id)}}" method="POST">

                    <a href="{{route('products.edit',$item->id)}}" class="btn btn-primary"> EDIT </a>        
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">

                  </form>            
              </td>                         
              @endforeach
              </tr>
            </tbody>
          </table>
     

    @endsection    