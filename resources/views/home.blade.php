<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
        
            <div class="navbar-brand">Result</div>
            <form action="{{route('search')}}" class="d-flex">
                <input type="search" class="form-control" name="search" placeholder="enter roll no">
                <input type="submit" class="btn btn-warning">
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3">
            @if(session("msg"))
                <div class="alert alert-success">
                    {{session("msg")}}
                </div>
                @endif
           <div class="mb-3">
               <div class="card">
                   <div class="card-body">
                       <h3 class="text-success">Result Details</h3>
                       <div class="mb-3">
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error("name")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">contact</label>
                            <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                            @error("contact")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">email</label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control">
                            @error("email")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">maths</label>
                            <input type="text" name="maths" value="{{old('maths')}}" class="form-control">
                            @error("maths")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">sci</label>
                            <input type="text" name="sci" value="{{old('sci')}}" class="form-control">
                            @error("sci")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">sst</label>
                            <input type="text" name="sst" value="{{old('sst')}}" class="form-control">
                            @error("sst")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">hindi</label>
                            <input type="text" name="hindi" value="{{old('hindi')}}" class="form-control">
                            @error("hindi")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">eng</label>
                            <input type="text" name="eng" value="{{old('eng')}}" class="form-control">
                            @error("eng")
                           <p class="text-danger small fw-bold">{{$message}}</p>
                           @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>

                   </div>
               </div>
           </div>
            </div>
            <div class="col-9">
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>maths</th>
                        <th>sci</th>
                        <th>sst</th>
                        <th>hindi</th>
                        <th>eng</th>
                        <th>total</th>
                        <th>action</th>
                    </tr>
                    @foreach($results as $r)
                    <tr>

                        <td>{{$r->id}}</td>
                        <td>{{$r->name}}</td>
                        <td>{{$r->contact}}</td>
                        <td>{{$r->email}}</td>
                        <td>{{$r->maths}}</td>
                        <td>{{$r->sci}}</td>
                        <td>{{$r->sst}}</td>
                        <td>{{$r->hindi}}</td>
                        <td>{{$r->eng}}</td>
                        <td>
                    <?php
                    echo $total = $r->maths + $r->sci + $r->sst + $r->hindi + $r->eng;?>
                
                    </td>
                        <td>
                            <a href="{{route('remove',['r_id'=> $r->id])}}" class="btn btn-danger " style="border-radius:8px ;"><i class="bi bi-trash"></i></a>
                            <a href="{{route('edit',['r_id'=> $r->id])}}" class="btn btn-warning " style="border-radius:8px ;">e</a>
                            <a href="{{route('view',['id'=> $r->id])}}" class="btn btn-success " style="border-radius:8px ;"><i class="bi bi-eye-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>