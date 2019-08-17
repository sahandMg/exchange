@if(session()->has('message'))
   <div class="alert alert-danger">
   {{session('message')}}
   </div>
@endif

<!--     <p style="color: green;"></p>
 -->