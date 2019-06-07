 @if (count($errors)) <!--check if there some errors-->
 <div class="alert alert-danger">
   <ul class="list-unstyled">
     @foreach ($errors->all() as $error)

     <li> {{ $error }}</li>

     @endforeach
   </ul>
 </div>
 @endif