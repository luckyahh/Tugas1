@extends('layouthome.main')
@section('title', 'Top Scores dan Live Scores Liga Spanyol')
@section('css')
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

@section('content')

  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Position</th>
        <th>Team Name</th>
        <th>Match Played</th>
        <th>Win</th>
        <th>Draw</th>
        <th>Lose</th>
    </tr>
    </thead>

    <tbody>
      @foreach ($listdata as $p)
      <tr>
        <td>{{ $p['overall_league_position']}}</td>
        <td>{{ $p['team_name']}}</td>
        <td>{{ $p['overall_league_payed']}}</td>
        <td>{{ $p['overall_league_W']}}</td>
        <td>{{ $p['overall_league_D']}}</td>
        <td>{{ $p['overall_league_L']}}</td>

    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection