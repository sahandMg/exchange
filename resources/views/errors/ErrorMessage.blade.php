@if(session()->has('error'))
    <!-- <p style="color: red;"></p> -->
    <div class="container">
       <div class="alert alert-danger text-right" style="direction: rtl;">
           {{session('error')}}
       </div>
     </div> 
@endif