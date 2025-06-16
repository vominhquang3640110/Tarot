@extends('app')

@section('content')
<form method="post" action="{{ route('register') }}">
    @csrf
    <div>
        <label>
            メールアドレス：
            <input type="email" name="email">
        </label>
    </div>
    <div>
        <label>
            パスワード：
            <input type="text" name="password">
        </label>
    </div>
     <div>
        <label>
            パスワード（確認）：
            <input type="text" name="password_confirmation">
        </label>
    </div>
    @foreach($errors->all() as $error)
      <p class="error">{{ $error }}</p>
    @endforeach
    <input type="submit" value="登録">
    {{ session('success') }}
    {{ session('error') }}
</form>
@endsection