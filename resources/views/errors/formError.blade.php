<!-- <ul> -->
    @foreach($errors->all() as $error)
     <div class="alert alert-danger text-right" style="direction: rtl;">
           {{$error}}
       </div>
    @endforeach
<!-- </ul> -->