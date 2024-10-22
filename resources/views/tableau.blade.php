<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .ct{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            height: 100vh;
            width: 100%;
        }
        .container{
            width: 100%;
            display: flex;
            height: 10vh;
        }
        tr{
            text-align: center;
        }
        .res{
            height:70% ;
            width: 70%;
        }
        .tr{
            border-bottom: 5px solid black;
            text-align: center;
            padding: 0;
        }
        .red{
            background-color: red;
        }
        .green{
            background-color: green;
        }
        .yellow{
            background-color: yellow;
        }
        .even{
            background-color: black;
            color: white;
        }
        .odd{
            background-color: white;
        }
        .footer{
            width: 100%;
            padding: 10px 0;
        }
    </style>
 

 
 <div class="ct">
        <x-menu/> 

        <div class="cont">
    
        <form action="{{ route('show') }}" method="GET">

          
                <h1>Liste Des Notes</h1>
                <input type="text" name="search" value="{{ old('txtRech') }}" placeholder="Entrez un nom" />
                <input type='submit' name="sub">
            </form>
        </div>
        <table class="res">
            <tr class="tr">
                <th>Nom</th>
                <th>Note</th>
            </tr>
            
            @foreach($res as $key => $value)
                @if($value > 10)
                    <tr class="tr green">
                        <td class="key">{{$key}}</td>
                        <td class="val"> {{$value}}</td>
                    </tr>
                @elseif($value >= 8 && $value <=10)
                    <tr class="tr yellow">
                        <td class="key">{{$key}}</td>
                        <td class="val"> {{$value}}</td>
                    </tr>
                @elseif($value < 8)
                    <tr class="tr red">
                        <td class="key">{{$key}}</td>
                        <td class="val"> {{$value}}</td>
                    </tr>
                @endif
            @endforeach  

            
            @foreach($res as $key => $value)
                @if($value %2 == 0)
                <tr class="tr even">
                        <td class="key">{{$key}}</td>
                        <td class="val"> {{$value}}</td>
                    </tr>
                @elseif($value %2 !== 0)
                    <tr class="tr odd">
                        <td class="key">{{$key}}</td>
                        <td class="val"> {{$value}}</td>
                    </tr>
                    
                    @endif
                    @endforeach  
                    @if($search)
                        @foreach($res as $name => $note)
                            <tr>
                                <td>{{$name}}</td>
                                <td>{{$note}}</td>
                            </tr>
                                
                        @endforeach
                    @else
                        <span>No One With This Name</span>
                    @endif
                </table>
                <x-footer />
    </div>
    
</body>
</html>