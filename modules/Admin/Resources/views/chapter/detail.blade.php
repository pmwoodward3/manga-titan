@extends('admin::master')

@section('title')
@parent - Chapter Detail
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Manga</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Chapter</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Detail</a>
@endsection

@section('page-header')
Detail Chapter
@endsection

@section('page-subheader')
Detail Chapter Manga
@endsection

@section('content')
@endsection