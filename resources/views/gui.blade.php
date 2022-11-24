<!-- 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GUI Jadwal Salat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body>
    @foreach($data as $item)

    <ul class="list-group">
      <li class="list-group-item active" aria-current="true">Jadwal Salat Kota {{ $data->lokasi }}</li>
      <li class="list-group-item">Subuh : {{ $data->jadwal->subuh }}</li>
      <li class="list-group-item">Zuhur : {{ $data->jadwal->dzuhur }}</li>
      <li class="list-group-item">Asar : {{ $data->jadwal->ashar }}</li>
      <li class="list-group-item">Magrib : {{ $data->jadwal->maghrib }}</li>
      <li class="list-group-item">Isya : {{ $data->jadwal->isya }}</li>
    </ul>

    @endforeach
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html> -->

<x-table>
<ul class="list-group">
  <x-lokasi>{{ $data->lokasi }}</x-lokasi>
  <x-jadwal>Subuh : {{ $data->jadwal->subuh }}</x-jadwal>
  <x-jadwal>Dzuhur : {{ $data->jadwal->dzuhur }}</x-jadwal>
</ul>
</x-table>