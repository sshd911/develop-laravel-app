@extends('layouts.app')

@section('content')
    <livewire:user.user-task.create />
    <livewire:user.user-task.show :attributes="$attributes" />
@endsection
