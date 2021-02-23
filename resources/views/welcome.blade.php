@extends('layouts.main-app')


@section('content')
   
<div class="container my-5">
    <div class="jumbotron">
        <h1 class="display-4">WELCOME TO INVENTORY SYSTEM</h1>
        <p class="lead">This is a simple inventory system in which includes adding of new products into inventory and managing transactions.</p>
        <hr class="my-4">
        <p>If you have any queries, kindly note the details below</p>
      </div>


      <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('storage/rosatase.jpg')}}" class="card-img-top mx-4" alt="Rosatase_Gemuel_Photo" style="width: 300px;">
                <div class="card-body">
                  <p class="card-text">NAME: ROSATASE, GEMUEL MICO F.</p>
                  <p class="card-text">EMAIL: micorosatase13@gmail.com</p>
                  <p class="card-text">CONTACT NUMBER: 09390070605</p>
                </div>
              </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem; height:58.6vh;">
                <img src="{{asset('storage/delacruz.jpg')}}" class="card-img-top mx-4 my-2" alt="Ernesto Dela Cruz" style="width: 300px;">
                <div class="card-body">
                  <p class="card-text">NAME: Dela Cruz, Ernesto III.</p>
                  <p class="card-text">EMAIL: errol.delapogi@gmail.com</p>
                  <p class="card-text">CONTACT NUMBER: 09064893585</p>
                </div>
              </div>
        </div>

        
      </div>






</div>




<ul class="box">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
@endsection