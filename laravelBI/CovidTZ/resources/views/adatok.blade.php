@extends('layouts.app')
@section('content')
        <div class="col-md-12  bg-torzs">
            <h3>Magyar külkereskedelmi teljesítmény</h3>
            <h6>A Covid–19-járvány negatív gazdasági hatásai</h6>
            <p>„…A magyar külkereskedelmi teljesítményt vizsgálva azt láthatjuk, hogy a járvány világméretű terjedése a hazai külkereskedelmet is rendkívüli mértékben visszavetette. A járvány világméretű terjedésének kezdetén (2020. február) még kiugró exportszintet és jelentős többletet eredményezett, azonban ezt követően a külkereskedelmi forgalom jelentős mértékben kezdett csökkeni. 2020. január–áprilisban a teljes magyar külkereskedelmi forgalom 6 milliárd euróval mérséklődött az előző év azonos időszakához mérten. A termékexport 3,4 milliárd euróval, a termékimport 2,6 milliárd euróval csökkent, a külkereskedelmi egyenleg pedig 738 millió euróval romlott az egy évvel korábbihoz viszonyítva.”</p>
            <p><img src="{{asset('img/magyar_egyenleg.png')}}" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
        </div>
    </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-md-6">
                <h3>Magyarországi adatok részletes megtekintése:</h3>
                <div class="col-3"></div>
        </div>
        </div>

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-sm-6 align-content-center" >
            <table class="col-sm-4   table table-striped align-content-center">
                <thead>

                <tr>
                    <th scope="col">Dátum</th>
                    <th scope="col">Import(millió euró)</th>
                    <th scope="col">Export(millió euró)</th>
                    <th scope="col">Egyenleg(millió euró)</th>
                </tr>
                </thead>
                <tbody>
                @foreach($adatokmagyar as $adatokmagyar)
                    <tr>
                        <th scope="col">{{$adatokmagyar -> datum}}</th>
                        <th scope="col">{{$adatokmagyar -> import}}</th>
                        <th scope="col">{{$adatokmagyar -> export}}</th>
                        <th scope="col">{{$adatokmagyar->export - $adatokmagyar->import}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
