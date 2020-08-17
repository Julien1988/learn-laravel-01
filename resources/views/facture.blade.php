@extends('template')

@section('titre')
    Les factures
@endsection

@section('contenu')
    <p>C'est la facture n° {{ $numero }}</p>
    <div id="app">
                    <example-component></example-component>
                </div>
@endsection