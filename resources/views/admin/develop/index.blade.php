@extends('layouts.admin')
@section('title', '登録済みニュースの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ニュース一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\DevelopController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\DevelopController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_prefectures" value={{ $cond_prefectures }}>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">都道府県</th>
                                <th width="50%">本文</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $develop)
                                <tr>
                                    <th>{{ $develop->id }}</th>
                                    <td>{{ str_limit($develop->prefectures, 100) }}</td>
                                    <td>{{ str_limit($develop->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\DevelopController@edit', ['id' => $develop->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\DevelopController@delete', ['id' => $develop->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection