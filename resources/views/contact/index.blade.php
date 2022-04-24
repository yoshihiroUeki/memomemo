@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('contact.create')}}">

                        <button type="submit" class="btn btn-primary">新規登録</button>
                        {{-- <a href="{{ route('contact.create')}}">新規登録</a> --}}
                    </form>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">氏名</th>
                            <th scope="col">件名</th>
                            <th scope="col">登録日時</th>
                            <th scope="col">詳細</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                            <th> {{ $contact->id }}</th>
                            <td>{{ $contact->your_name}}</td>
                            <td>{{ $contact->title}}</td>
                            <td>{{ $contact->created_at}}</td>
                            <td><a href="{{ route('contact.show', ['id' => $contact->id] ) }}">詳細をみる</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
