@extends('layouts.app')
@section('content')
    <div class="col-md-12 bg-torzs ">
      <h2>Az ön általválasztott régióba található régiók adatai.</h2>
      <br>
      <h3>Európai</h3>
      <p>Az európai országok exportteljesítményét tekintve az elmúlt hónapok során a termék-külkereskedelem általános visszaesését láthattuk. A járvány terjedésének hatására különböző korlátozó intézkedések léptek hatályba, és közben a keresleti feltételek is jelentős mértékben romlottak, így a járvány negatív gazdasági hatásai – a jelenleg rendelkezésre álló nemzetközi adatok alapján – a márciusi és az áprilisi külkereskedelmi adatokban érhetők tetten. Az európai országok közül a legjelentősebb mértékben a dél-európaiak termékexportja esett vissza. A márciusi, éves alapon mért 13,6%-os mérséklődést áprilisban 40,7%-os visszaesés követte. A visegrádi országok termékexportja is érdemi csökkenést mutatott, áprilisban 35%-kal esett vissza.</p>
      <p><img src="{{asset("img/europa.png")}}" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
        <a>Forrás: CPB Netherlands Bureau for Economic Policy analysis, World Trade Monitor. </a>
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
          @foreach($gazdasag as $gazdasag)
          <tr class="">
            <td scope="col-4">{{$gazdasag->zonanev}}</td>
            <td>{{$gazdasag->datum}}</td>
            <td>{{$gazdasag->szazalekpont}}</td>
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
