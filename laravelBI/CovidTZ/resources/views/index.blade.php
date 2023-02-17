@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <p> A 2019 végén, Kínában kitört Covid-19-járvány 2020 március elejére világméretűvé vált, ami a kedvező hazai gazdasági-társadalmi folyamatokat is megtörte. A járvány a termék-külkereskedelem mellett a korábbi válságokkal szemben ellenálló szolgáltatás-külkereskedelemben is számottevő visszaesést okozott. 2020 áprilisában és májusában nagymértékben visszaesett a külkereskedelmi teljesítmény, mely az árucsoportok és szolgáltatások széles körét érintették.<a href="https://koronavirus.gov.hu/" target="_blank">Tájékoztató oldal a koronavírusról</a></p>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4 bg-torzs ">
            <h3>Európai</h3>
            <p>Az európai országok exportteljesítményét tekintve az elmúlt hónapok során a termék-külkereskedelem általános visszaesését láthattuk. A járvány terjedésének hatására különböző korlátozó intézkedések léptek hatályba, és közben a keresleti feltételek is jelentős mértékben romlottak, így a járvány negatív gazdasági hatásai – a jelenleg rendelkezésre álló nemzetközi adatok alapján – a márciusi és az áprilisi külkereskedelmi adatokban érhetők tetten. Az európai országok közül a legjelentősebb mértékben a dél-európaiak termékexportja esett vissza. A márciusi, éves alapon mért 13,6%-os mérséklődést áprilisban 40,7%-os visszaesés követte. A visegrádi országok termékexportja is érdemi csökkenést mutatott, áprilisban 35%-kal esett vissza.</p>
            <p><img src="{{asset('img/europa.png')}}" class="img-thumbnail " alt="grafikon" title="grafikon"/></p>
        </div>
        <div class="col-md-4">
            <h3>Világkereskedelem</h3>
            <p><a href="https://www.ksh.hu/docs/hun/xftp/idoszaki/kulker/kul_foly_2020_05/index.html#avilgkereskedelemjelentsmrtkbenvisszaesett" target="_blank">A világkereskedelem jelentős mértékben visszaeset</a>
            <p>A világkereskedelem jelentős mértékben visszaesett
                „…2020 I. negyedévében a globális gazdasági folyamatok középpontjában a koronavírus okozta járvánnyal kapcsolatos intézkedések álltak. A járvány kiindulópontjának számító Kínában megtört a több évtizede tartó konjunktúra, és 2020 I. negyedévében 6,8%-kal csökkent a gazdaság teljesítménye. A világgazdaság legjelentősebb szereplőjének számító Egyesült Államokban 0,3%-ra lassult a növekedés üteme. A szűkebb környezetünket jelentő Európai Unióban (EU27) 2,6 %-kal csökkent a gazdaság teljesítménye.”</p>
            <img src="{{asset("img/vilag.png")}}" class="img-thumbnail" alt="grafikon" title="grafikon"/>
            <p><a href="https://www.cpb.nl/en/worldtrademonitor" target="_blank">Forrás: CPB Netherlands Bureau for Economic Policy Analysis, World Trade Monitor. </a></p>
        </div>
        <div class="col-md-4 bg-torzs ">
            <h3>Magyar külkereskedelmi teljesítmény</h3>
            <h6>A Covid–19-járvány negatív gazdasági hatásai</h6>
            <p>„…A magyar külkereskedelmi teljesítményt vizsgálva azt láthatjuk, hogy a járvány világméretű terjedése a hazai külkereskedelmet is rendkívüli mértékben visszavetette. A járvány világméretű terjedésének kezdetén (2020. február) még kiugró exportszintet és jelentős többletet eredményezett, azonban ezt követően a külkereskedelmi forgalom jelentős mértékben kezdett csökkeni. 2020. január–áprilisban a teljes magyar külkereskedelmi forgalom 6 milliárd euróval mérséklődött az előző év azonos időszakához mérten. A termékexport 3,4 milliárd euróval, a termékimport 2,6 milliárd euróval csökkent, a külkereskedelmi egyenleg pedig 738 millió euróval romlott az egy évvel korábbihoz viszonyítva.”</p>
            <p><img src="{{asset("img/magyar_egyenleg.png")}}" class="img-thumbnail " alt="grafikon" title="grafikon"/></p>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Europa</h3>

            <div class="form-group">

                <h6>A kiválasztott európai térségek adatai jelennek meg, havi bontásban.</h6>
                <label>Válassza ki, melyik jelentős szereplő adatait szeretné látni:</label>
                <form method="post" action="{{route('europa')}}" >
                    @csrf
                    <select class="form-control" name="zonak" >
                        <option value="">Válasszon régiót</option>
                        @foreach($eu as $eu)
                            <option value="{{$eu->id}}">{{$eu->zonanev}}</option>
                        @endforeach

                    </select>
                    <br>
                    <button type="submit">Küldés</button>
                </form>
            </div>
        </div>
        <div class="col-md-4 bg-torzs">
            <h3>Világkereskedelem</h3>


            <h6>A kiválasztott világgazdasági szereplő adatai jelennek meg, havi bontásban.</h6>

            <label >Válassza ki, melyik jelentős szereplő adatait szeretné látni:</label>
            <form method="post" action="{{route('vilagker')}}">
                @csrf
                <select class="form-control" name="zonak">
                    <option value="">Válasszon régiót</option>
                    @foreach($kereskedelem as $kereskedelem)
                        <option value="{{$kereskedelem->id}}">{{$kereskedelem->zonanev}}</option>
                    @endforeach

                </select><br>
                <button type="submit">Küldés</button>
            </form>


        </div>
        <div class="col-md-4">
            <h3>Magyarországi adatok.</h3>

            <form>
                <div class="form-group">

                    <ul class="list-group">
                        @foreach($magyaradatok as $magyaradatok)
                        <li class="list-group-item ">Export összesen: {{$magyaradatok -> oexport}} EUR</li>
                        <li class="list-group-item ">Import összesen: {{$magyaradatok -> oimport}} EUR</li>
                        <li class="list-group-item ">Export és import egyenleg: {{$magyaradatok ->oimportexport}} EUR</li>
                        @endforeach
                        <li class="list-group-item active"><a href="{{route('adatok')}}">Részletes adatok</a></li>
                    </ul>
                </div>
            </form>

        </div>
    </div>
    </div>

    </body>
    </html>
@endsection
