@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">

        </div>
    @endif

    <div class="container">
        <h1>Collections</h1>
        <h2>Collections implode and Remaining</h2>
        <div class="row">
            @if(isset($users))
                {{$users -> implode("name", ",")}}
            @endif
        </div>
        <div class="row">
            @if(isset($users))
                @foreach($users as $user)
                    {{$user->name}}{{$loop->remaining ? ',' : ''}}
                @endforeach
            @endif
        </div>
        <h1>Pagination and collection(first & last)</h1>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($users))
                        @foreach($users as $user)
                            <tr>
                                <td class="{{ $loop->last ? 'bg-danger' : '' }}">{{ $user->name }}</td>
                                <td class="{{ $loop->first ? 'bg-primary' : '' }}">{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{ $users->links() }}
    </div>
</div>
@endsection