{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- admin.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール</h2>
            <from action="{{action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                <div class="form-group row">
                    <label class="col-md-2">名前</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                     </div>
                </div>
                <div class="form-group row">
                     <label class="col-md-2">性別</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                     </div>
                </div>
                <div class="from-group row">
                    <label class="col-md-2">趣味</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                     </div>
                </div>
                <div class="from-group row">
                    <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                    </div>
                </div>
                
                
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </from>
        </div>
    </div>
</div>
@endsection