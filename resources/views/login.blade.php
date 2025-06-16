@extends('app')

@section('content')
{{ session('error') }}
<form method="post" action="{{ route('login') }}">
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
    @foreach($errors->all() as $error)
      <p class="error">{{ $error }}</p>
    @endforeach
    <input type="submit" value="登録">
    {{ session('success') }}
    {{ session('error') }}
</form>
@endsection