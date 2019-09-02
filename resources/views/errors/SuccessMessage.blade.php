@if(session()->has('message'))
   <div class="alert alert-success text-right" style="direction: rtl;">
   {{session('message')}}
   </div>
@endif

<!--     <p style="color: green;"></p>
 -->