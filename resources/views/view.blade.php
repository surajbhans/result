<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">result</a>
            <form action="{{route('search')}}" class="d-flex">
                <input type="search" class="form-control" name="search" placeholder="enter roll no">
                <input type="submit" class="btn btn-warning">
            </form>
        </div>
       
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
               <a href="#" onclick="window.print();" class="btn btn-warning d-print-none ">print</a>
                <table class="table table-bordered">

                <tr class="bg-info">
                    <th colspan="4" class="text-center">Student Details</th>
                </tr>
                <tr>
                    <th colspan="2">name</th>
                    <th>{{$result->name}}</th>
                </tr>
                <tr>
                    <th colspan="2">contact</th>
                    <th>{{$result->contact}}</th>
                </tr>
                <tr>
                    <th colspan="2">email</th>
                    <th>{{$result->email}}</th>
                </tr>
                <tr class="bg-warning">
                    <th colspan="4" class="text-center">Mark Details</th>
                </tr>
                <tr>
                    <th>subject name</th>
                    <th>total marks</th>
                    <th>pass marks</th>
                    <th>obtained marks</th>
                </tr>
                <tr>
                    <td>maths</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->maths}}</td>
                </tr>
                <tr>
                    <td>sci</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->sci}}</td>
                </tr>
                <tr>
                    <td>sst</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->sst}}</td>
                </tr>
                <tr>
                    <td>hindi</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->hindi}}</td>
                </tr>
                <tr>
                    <td>eng</td>
                    <td>100</td>
                    <td>30</td>
                    <td>{{$result->eng}}</td>
                </tr>
                <tr class="bg-success">
                    <th colspan="4" class="text-center">result details</th>
                </tr>
                <tr style="background-color:blueviolet ;">
                    <th colspan="2">Total marks</th>
                <td colspan="2">
                @php
                echo $total = $result->maths + $result->sci + $result->sst + $result->hindi + $result->eng;
                @endphp
                </td>
                </tr>
                </table>
            </div>
        </div>
    </div>


</body>
</html>