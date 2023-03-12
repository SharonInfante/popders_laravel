<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Canción</h1>
    <form action="{{route('addSong.store')}}" method="POST">

        @csrf

        <label>
            Title
            <input type="text" name="title" value="{{$songs->title}}">
        </label><br><br>
        

        <label>
            Artist
            <input type="text" name="artist" value="{{$songs->artist}}">
        </label><br><br>

        <label>
            Genre
            <input type="text" name="genre" value="{{$songs->genre}}">
        </label><br><br>

        <label>
            Url Video
            <input type="text" name="url" value="{{$songs->url}}">
        </label><br><br>

        <label>
            Imagen
            <input type="file" name="image" value="{{$songs->image}}">
        </label><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>