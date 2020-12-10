@extends('backend.layouts.master')

@section('title')
	Test Layout
@endsection

@section('custom-css')
	<style> 
    h1{
        color: red
    }
    </style>
@endsection

@section('content')
    <h1>Nội dung nè</h1>
@endsection

@section('custom-scripts')
<script> alert('Hello') </script>
@endsection
