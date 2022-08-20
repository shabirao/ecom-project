@extends('master')
@section('content')

<div class=" custem-product">

    <div class="col-sm-6">
    <table class="table">
   
      <tr>
        <th>Price</th>
        <th>{{$total}} Rs.</th>
      </tr>
    
    <tbody>
      <tr>
        <td>Tax</td>
        <td>10 Rs.</td>
      </tr>      
      <tr >
        <td>Delivery Charges</td>
        <td>100 Rs.</td>
       
      </tr>
      <tr >
        <td>Total Amount</td>
        <td> {{$total+100+10}}</td>
      </tr>
    </tbody>
  </table>
  <form method="post" action="orderplace" >
      @csrf
  <div class="form-group">
   <textarea placeholder="enter your address" name="address" class="form-control" ></textarea>

  </div>
  <div class="form-group">
    <label for="">Payment Method </label>
    <p> <input type="radio"  value="cash" name="Payment"> <span>Online Payment</span></p>
   <p> <input type="radio"  value="cash" name="Payment"> <span>EMi Payment</span></p>
   <p> <input type="radio"  value="cash" name="Payment"> <span> Payment on Delivery</span></p>
   <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>
</div>
</div>
@endsection