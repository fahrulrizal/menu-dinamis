@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <ul>
                    @foreach($menu as $item)
                        <li>
                            <a href="{{$item->url}}">{{$item->menu}}</a>
                            @if ($item->submenu->count())
                                <ul>
                                @foreach ($item->submenu as $subitem)
                                    <li><a href="{{$subitem->url}}">{{$subitem->submenu_name}}</a></li>
                                @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
