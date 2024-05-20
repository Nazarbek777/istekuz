@extends('layouts.app')


@section('title', 'Page Title')
 
@section('pagename', 'About')

@section('home', $posts[18]['content_' . session('lang')])
@section('about', $posts[19]['content_' . session('lang')])
@section('blog', $posts[20]['content_' . session('lang')])
@section('contact', $posts[21]['content_' . session('lang')])
@section('popular_products', $posts[26]['content_' . session('lang')])
 
@section('content')


    
@endsection