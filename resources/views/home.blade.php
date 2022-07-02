@extends('layouts.app')

@section('title')
    Treni
@endsection

@section('main-content')
{{-- {{dd($train_list)}} --}}
{{-- {{dd($train_column_list)}} --}}
  <table>
    <thead>
      <tr>
        @foreach ($train_column_list as $train_column)
          @if(!in_array($train_column, $ignore_list))
            <th>{{ $train_column }}</th>
          @endif
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach ($train_list as $train)
          <tr>
            @foreach ($train_column_list as $train_column)
              @if(!in_array($train_column, $ignore_list))
                @if ($train_column == 'in_orario' || $train_column == 'cancellato')
                    @if ($train[$train_column] == 1)
                        <td>Si</td>
                    @else
                        <td class="false">No</td>
                    
                    @endif
                @else
                  <td>{{ $train[$train_column] }}</td>
                @endif
              @endif
            @endforeach
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection