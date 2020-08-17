@extends('template')

@section('contenu')
<form action="/users" method="POST" >
    <!-- @method('POST') -->
    {!! csrf_field() !!}   
     
	<label for="nom">Entrez votre nom : </label>    
	<input name="nom" type="text" id="nom">    
	<input type="submit" value="Envoyer !">	


</form>

@endsection