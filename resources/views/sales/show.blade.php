@extends('layouts.main-app')
   

      @section('content')
          

<div class="table-responsive">


          <table class="table table-dark table-striped my-5 table-hover ">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col">
                  Name
                </th>
                <th scope="col">
                  Description
                </th>
                <th scope="col" >
                  Price
                </th>

                <th scope="col">
                  Quantity Sold
                </th>

                <th scope="col">
                  Action
                </th>
              </tr>
            </thead>
            @foreach ($list as $item)
            <tbody>
              <tr>
                  
                <td>
                      <div >
                        {{$item->sales_name}}
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
                  <form action="{{route('sales.destroy',$item->id)}}" method="POST">

                    <a href="{{route('sales.edit',$item->id)}}" class="btn btn-primary"> <i class="fas fa-edit"></i> </a>        
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                  </form>            
              </td>                         
              @endforeach
              </tr>
            </tbody>
          </table>
     
        </div>
    @endsection    