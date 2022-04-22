@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    createです!
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        氏名
                        <input type="text" name="your_name" >
                        <br>
                        件名
                        <input type="text" name="title" >
                        <br>
                        メールアドレス
                        <input type="email" name="email" >
                        <br>
                        ホームページ
                        <input type="url" name="url" >
                        <br>
                        性別
                        <input type="radio" name="gender" value="0">男性</input>
                        <input type="radio" name="gender" value="1">女性</input>
                        <br>
                        年齢
                        <select name="age" id="">
                        <option value="">選択してください</option>
                        <option value="1">〜１９歳</option>
                        <option value="2">２０歳〜２９歳</option>
                        <option value="3">３０歳〜３９歳</option>
                        <option value="4">４０歳〜４９歳</option>
                        <option value="5">５０歳〜５９歳</option>
                        <option value="6">６０歳〜</option>
                        </select>
                        <br>
                        お問い合わせ内容
                        <textarea name="contact"></textarea>
                        <br>
                        <input type="checkbox" name="caution" value="1">注意事項に同意する
                        <br>
                        <input class="btn btn-info" type="submit" value="登録する">

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
