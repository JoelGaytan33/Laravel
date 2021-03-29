<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/estilos.css')}}">
    <style>
        [class*="col"]{
            padding: 1rem;
            background-color: rgb(29, 141, 233);
            border: 2px solid rgb(220, 220, 220);
            color: whitesmoke;
            text-align: center;
        }
        

    </style>
</head>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<body>
    <div class="container-md">
        <div class="row">
            <div class="col-sm cuadro">A</div>
        </div>
        <div class="row cuadro">
            <div class="col-sm">B</div>
            <div class="col-sm">C</div>
            <div class="col-sm">D</div>
            <div class="col-sm">E</div>
        </div>
        <div class="row cuadro">
             <div class="col-md">F</div>
             <div class="col-md">G</div>
        </div>
        <div class="row cuadro">
            <div class="col-md-10">H</div>
            <div class="col-md">I</div>
       </div>
        </div>
        <h2></h2>
        <div class="container">
            <div class="row">
                <div class="col-md cuadro">
                    <div class="p-1">J</div>
                </div>
                    <div class="col-md cuadro">
                        <div class="p-1">K</div>
                    </div>
                </div>
            </div>
        </div>
        
</body>
</html>