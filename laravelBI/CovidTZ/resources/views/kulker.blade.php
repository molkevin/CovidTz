@extends('layouts.app')
@section('content')
    <div class="col-md-12 bg-torzs">
      <h2>Az ön által választott rágióba található régiók adatai.</h2>
      <br>
      <h3>Világkereskedelem</h3>
      <p><a>A világkereskedelem jelentős mértékben visszaesett</a> <br>
        „…2020 I. negyedévében a globális gazdasági folyamatok középpontjában a koronavírus okozta járvánnyal kapcsolatos intézkedések álltak. A járvány kiindulópontjának számító Kínában megtört a több évtizede tartó konjunktúra, és 2020 I. negyedévében 6,8%-kal csökkent a gazdaság teljesítménye. A világgazdaság legjelentősebb szereplőjének számító Egyesült Államokban 0,3%-ra lassult a növekedés üteme. A szűkebb környezetünket jelentő Európai Unióban (EU27) 2,6 %-kal csökkent a gazdaság teljesítménye.”</p>

      <p><img src="{{asset('img/vilag.png')}}" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
    </div>
  </div>

  <div class="table-responsive">
    <div class="row">
        <div class="col-3"></div>
      <div class="col-6">
        <table class="table table-primary">
          <thead>
          <tr>
            <th scope="col">Régió neve</th>
            <th scope="col">Dátum</th>
            <th scope="col">Százalékpont</th>
          </tr>
          </thead>
          <tbody>
          @foreach($kulker as $kulker)
              <tr class="">
                  <td scope="col-4">{{$kulker->zonanev}}</td>
                  <td>{{$kulker->datum}}</td>
                  <td>{{$kulker->szazalekpont}}</td>
              </tr>
          @endforeach

          </tbody>
        </table>
        <div class="col-3"></div>
      </div>
    </div>
  </div>


</div>

</body>
</html>
@endsection

