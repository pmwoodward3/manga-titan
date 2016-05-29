@extends('admin::master')

@section('title')
@parent - Manga Detail
@endsection

@section('breadcrumb')
<a href="{{ route('admin.home') }}" class="section">Home</a>
<i class="icon circle divider"></i>
<a href="{{ route('admin.manga') }}" class="section">Manga</a>
<i class="icon circle divider"></i>
<a href="#" class="section">Detail</a>
@endsection

@section('page-header')
Detail Manga
@endsection

@section('page-subheader')
Detail Manga Page
@endsection

@section('content')
@endsection