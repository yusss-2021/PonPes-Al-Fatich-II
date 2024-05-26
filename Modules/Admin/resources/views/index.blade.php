@extends('admin::layouts.master', ['title' => 'Dashboard'])

@section('content')
    <div class="px-4 pt-6">
        <h1 class="text-3xl dark:text-gray-300">Hello World</h1>

        <p class="dark:text-gray-300">Module: {!! config('admin.name') !!}</p>

    </div>
@endsection
