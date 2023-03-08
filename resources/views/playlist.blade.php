<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista de Canciones</h1>
    <a href="{{route('addSong.create')}}">Añadir canción</a>
    <ul>
        @foreach ($songs as $song)
            <ul>
                <li>
                    <a href="{{route('songDescription.show', $song->id_song)}}">{{$song->title}}</a>
                <li>
            </ul>        
        @endforeach
    </ul>
    
</body>
</html>