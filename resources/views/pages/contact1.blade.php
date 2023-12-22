<!doctype html>


<html lang="en">


<head>


   <meta charset="utf-8" />


   <meta name="viewport" content="width=device-width, initial-scale=1" />


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
       crossorigin="anonymous" />




<div class="container info">
       <div class="row">


           <div class="card col-lg-3 col-md-3 col-sm-8 text-center mx-auto">
               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
               <div class="card-body">
                   <h4 class="card-title">{{$name}}</h4>
                   <br>
                   <h6>{{$role}} At {{$company}}</h6>
                   <p> <i> {{$quote}}  </i> </p>
               </div>
           </div>


       </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>


</body>


</html>