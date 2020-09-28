@extend('layouts.main-layout')

@section('content')
  <ul>
    @foreach ($stanze as $item)
      <li>{{$item -> room_numbner}} </li>
    @endforeach
  </ul>
@endsection
