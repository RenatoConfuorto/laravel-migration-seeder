@extends('layouts.app')

@section('title')
    Treni
@endsection

@section('main-content')
  <h1>Treni della settimana</h1>
{{-- {{dd($train_list)}} --}}
{{-- {{dd($train_column_list)}} --}}
  @include('components.trainTable', $data)

@endsection