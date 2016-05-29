@extends('admin::master')

@section('title')
@parent - Manga Create
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Manga</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Create</a>
@endsection

@section('page-header')
Create Manga
@endsection

@section('page-subheader')
Create Manga Page
@endsection

@section('content')
@endsection