@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール</h2>
            <from action="{{action('Admin\ProfileController@update')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                <div class="form-group row">
                    <label class="col-md-2" for="name">名前</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                     </div>
                </div>
                <div class="form-group row">
                     <label class="col-md-2" for="gender">性別</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
                     </div>
                </div>
                <div class="from-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                     <div class="col-md-10">
                         <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                     </div>
                </div>
                <div class="from-group row">
                    <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                    </div>
                </div>
                
                
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </from>
        </div>
    </div>
</div>
@endsection