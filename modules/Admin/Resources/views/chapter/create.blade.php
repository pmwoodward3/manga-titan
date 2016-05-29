@extends('admin::master')

@section('title')
@parent - Chapter Create
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Manga</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Chapter</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Create</a>
@endsection

@section('page-header')
Create Chapter
@endsection

@section('page-subheader')
Create Chapter Manga
@endsection

@section('content')
@endsection