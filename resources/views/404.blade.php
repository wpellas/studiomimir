<!-- /portfolio_image -->
@extends('layouts.app')
@include('partials.page-header', ['thumbnail' => 'https://cdn.discordapp.com/attachments/537909129952624640/1112648478133334066/pexels-simona-kidric-2607544.jpg'])
<section class="min-h-[100vh]">
    @posts
        @title
    @endposts
    
</section>