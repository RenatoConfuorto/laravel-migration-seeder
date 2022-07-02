@extends('layouts.app')

@section('title')
    Treni di oggi
@endsection

@section('main-content')
    <h1>Treni in partenza oggi</h1>
    @include('components.trainTable', $data)
@endsection