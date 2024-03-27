@extends('layouthome.main')
@section('title', 'Top Scores dan Live Scores Liga Spanyol')
@section('css')
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

@section('content')

  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Club</th>
        <th>Goals</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($listdata as $p)
      <tr>
        <td>{{$p['player_place']}}</td>
        <td>{{ $p['player_name']}}</td>
        <td>{{ $p['team_name']}}</td>
        <td>{{ $p['goals']}}</td>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection