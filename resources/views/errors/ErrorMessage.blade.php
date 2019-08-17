@if(session()->has('error'))
    <!-- <p style="color: red;"></p> -->
    <div class="container">
       <div class="alert alert-danger">
           {{session('error')}}
       </div>
     </div> 
@endif