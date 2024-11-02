@extends($activeTemplate . 'layouts.frontend')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Games</title>
    <style>
        .game-item{
            width: 200px;
            height: 200px;
            background-color: green;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            background-image: url('/assets/img/pcm.webp');
            background-size:100% 100%;
            background-repeat:no-repeat;
            border-radius: 8px;
            cursor: pointer;
        }
        .games{
            width: 100%;
           padding: 10px;
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="games">
        <div  onclick="PcmClick()" class="game-item"></div>
    </div>
    <script>
        function PcmClick(){
            window.location.href = "/games?game=pcm";
        }
    </script>
</body>
</html>
@endsection
