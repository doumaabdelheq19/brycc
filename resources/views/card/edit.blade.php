<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="{{route('card.update',$card->id)}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <?php
    $cods=DB::table('cards')
      ->where('id', $card->id)
      ->get();?>
      @foreach ($cods as $cod)
    <input value="{{$cod->title}}">
<input value="{{$cod->description}}">
@endforeach
<x-primary-button>update</x-primary-button>
</form> 


</body>
</html>