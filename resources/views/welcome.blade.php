@extends('layout')

@section('content')
<h1>Welcome {{$title}} my website</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quibusdam eos mollitia animi dolore asperiores quod neque in inventore explicabo, possimus vitae nisi quos rem ipsa delectus cum? Dolorum, vitae?</p>
<p>{{$foo}}</p>
{!! $alert !!}
@endsection