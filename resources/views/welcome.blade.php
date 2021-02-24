@extends('layouts.main-app')


@section('content')
   



<div class="container my-5">
    <div class="jumbotron">
        <h1 class="display-4">WELCOME TO INVENTORY SYSTEM</h1>
        <p class="lead">This is a simple inventory system in which includes adding of new products into inventory and managing transactions.</p>
        <hr class="my-4">
        <p>If you have any queries, kindly note the details below</p>
      </div>



      <div class="row" id="Row">
        <div class="col-sm-6">
          <div class="card h-80">
            <img src="{{asset('storage/rosatase.jpg') }}" class="card-img-top" alt="Rosatase_Photo">
            <div class="card-body">
              <h5 class="card-title">Member 1</h5>
              <p class="card-text">NAME: Rosatase,Gemuel Mico</p>
              <p class="card-text">EMAIL: micorosatase13@gmail.com</p>
              <p class="card-text">CONTACT NUMBER: 09390070605</p>           
             </div>
            <div class="card-footer">
              <small class="text-muted">BS CpE 3-7P</small>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card h-80">
            <img src="{{asset('storage/delacruz.jpg')}}" class="card-img-top" alt="Dela Cruz_Photo">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">NAME: Dela Cruz, Ernesto III.</p>
              <p class="card-text">EMAIL: errol.delapogi@gmail.com</p>
              <p class="card-text">CONTACT NUMBER: 09064893585</p>            
            </div>
            <div class="card-footer">
              <small class="text-muted">BS CpE 3-7P</small>
            </div>
          </div>
        </div>
      </div>


    

@endsection