@extends('template')

@section('titre')
   ROCF BSL
@endsection

@section('ajouts_header')

@endsection

@section('contenu')
<div class="distribution-map">
    <img class="cartePhoto carteElement" src="frontend/accueil/images/orientation.png" alt="" />
    <button class="map-point" style="top:38%;left:55%">
        <div class="content carteElement">
            <div class="centered-y carteElement">
                <h2 class="carteElement">Acti-Famille</h2>
                <p class="carteElement">Vive la famille.</p>
              <img class="carteElement" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.n6nm7DfzQAIR1hCpY9eySwHaE8%26pid%3DApi&f=1" alt="" />
            </div>
        </div>
    </button>
</div>
@endsection
