<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Queues</title>
</head>
<style>
    body {
        text-align: center;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: darkslategray;
        width: 100%;
       margin: 0;
    }

</style>
<body>
    <div class="fs-1 text-light text-center font-monospace fw-bold">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-9">
                <table class ="table table-striped" style="width: 100; background-color:rgb(91, 179, 199);">
                    <thead>
                        <td>laboratory</td>
                            <td>Next</td>
                            <td>Serving</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chemistry</td>
                            <td> 
                                @if ($chm_reserve !=null)
                                {{$chm_reserve->lastname}}, {{$chm_reserve->firstname}}    
                                </br>
                                <h3>{{$chm_reserve->laboratory}}-{{$chm_reserve->id}}</h3>
                                @endif
                            </td>
                            <td>
                                @if ($chm_serve !=null)
                                {{$chm_serve->lastname}}, {{$chm_serve->firstname}}    
                                </br>
                                <h3>{{$chm_serve->laboratory}}-{{$chm_serve->id}}</h3>
                                @endif
                            </td>    
                        </tr>
                        <tr>
                            <td>Shelf Life</td>     
                            <td>
                                @if ($shl_reserve !=null)
                                {{$shl_reserve->lastname}}, {{$shl_reserve->firstname}}    
                                </br>
                                <h3>{{$shl_reserve->laboratory}}-{{$shl_reserve->id}}</h3>
                                @endif
                            </td>      
                            <td>
                                @if ($shl_serve !=null)
                                {{$shl_serve->lastname}}, {{$shl_serve->firstname}}    
                                </br>
                                <h3>{{$shl_serve->laboratory}}-{{$shl_serve->id}}</h3>
                                @endif
                            </td>                                                              
                        </tr>
                        <tr>
                            <td>Metrology</td>
                            <td>
                                @if ($mtr_reserve !=null)
                                {{$mtr_reserve->lastname}}, {{$mtr_reserve->firstname}}    
                                </br>
                                <h3>{{$mtr_reserve->laboratory}}-{{$mtr_reserve->id}}</h3>
                                @endif
                            </td>
                            <td>
                                @if ($mtr_serve !=null)
                                {{$mtr_serve->lastname}}, {{$mtr_serve->firstname}}    
                                </br>
                                <h3>{{$mtr_serve->laboratory}}-{{$mtr_serve->id}}</h3>
                                @endif
                            </td>                                                                         
                        </tr>
                        <tr>
                            <td>Scholarship</td>  
                            <td> 
                                @if ($sch_reserve !=null)
                                {{$sch_reserve->lastname}}, {{$sch_reserve->firstname}}    
                                </br>
                                <h3>{{$sch_reserve->laboratory}}-{{$sch_reserve->id}}</h3>
                                @endif
                            </td>
                            <td>
                                @if ($sch_serve !=null)
                                {{$sch_serve->lastname}}, {{$sch_serve->firstname}}    
                                </br>
                                <h3>{{$sch_serve->laboratory}}-{{$sch_serve->id}}</h3>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Cashier</td>
                            <td>
                                @if ($chr_reserve !=null)
                                {{$chr_reserve->lastname}}, {{$chr_reserve->firstname}}    
                                </br>
                                <h3>{{$chr_reserve->laboratory}}-{{$chr_reserve->id}}</h3>
                                @endif
                            </td>
                            <td>
                                @if ($chr_serve !=null)
                                {{$chr_serve->lastname}}, {{$chr_serve->firstname}}    
                                </br>
                                <h3>{{$chr_serve->laboratory}}-{{$chr_serve->id}}</h3>
                                @endif
                            </td>                                                                         
                        </tr>
                        <tr>
                            <td>Halal</td>                                                                        
                            <td>
                                @if ($hal_reserve !=null)
                                {{$hal_reserve->lastname}}, {{$hal_reserve->firstname}}    
                                </br>
                                <h3>{{$hal_reserve->laboratory}}-{{$hal_reserve->id}}</h3>
                                @endif
                            </td>
                            <td>
                                @if ($hal_serve !=null)
                                {{$hal_serve->lastname}}, {{$hal_serve->firstname}}    
                                </br>
                                <h3>{{$hal_serve->laboratory}}-{{$hal_serve->id}}</h3>
                                @endif
                            </td>
                    </tbody>
                </table>
            </div>
            <div class="col" style="background-color: bg-light">
            </div>
        
</div>
</body>
</html>