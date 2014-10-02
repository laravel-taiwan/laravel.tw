@extends('layouts.master')

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline">
            <h1>中文文件</h1>
        </div>

        <div id="version">
            <ul class="nolist">
                @foreach ($versions as $version => $title)
                    <li class="{{ $currentVersion == $version ? 'current' : '' }}">
                        <a href="{{ url('docs/'.$version) }}" title="{{ $title }}">{{ $title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
            <a href="//laravel.tw"><img src="/assets/img/logo-head.png" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li><a href="/">歡迎</a></li>
            <li class="current-item"><a href="/docs" title="Documentation">文件</a></li>
            <li><a href="http://laracasts.com">Laracasts</a></li>
            <li><a href="https://forge.laravel.com">Forge</a></li>
            <li><a href="{{ url('api') }}/{{ $currentVersion }}" title="Laravel Framework API">API</a></li>
            <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
            <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
        </ul>
        <a href="#" class="show-primary-nav">選單</a>
    </div>
</nav>

<div id="content">

    <section id="documentation">
        <article class="boxed">

            <ul class="version-picker--mobile nolist">
                @foreach ($versions as $version => $title)
                <li class="{{ $currentVersion == $version ? 'current' : '' }}">
                    <a href="{{ url('docs/'.$version) }}" title="{{ $title }}">{{ $title }}</a>
                </li>
                @endforeach
            </ul>
            <a href="#" class="docs-show" data-show-text="目錄導覽" data-hide-text="關閉">目錄導覽</a>

            <nav id="docs">
                {!! $index !!}
            </nav>

            <div id="docs-content">
                {!! $content !!}
            </div>

        </article>
    </section>

</div>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
                <a href="//laravel.tw"><img src="/assets/img/logo-foot.png" alt="Laravel"></a>
            </div>
            <ul>
            <li><a href="{{ url('api') }}/{{ $currentVersion }}" title="Laravel Framework API">API</a></li>
            <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
            <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                <li><a href="/">歡迎</a></li>
                <li class="current-item"><a href="/docs" title="Documentation">文件</a></li>
                <li><a href="http://laracasts.com">Laracasts</a></li>
                <li><a href="https://forge.laravel.com">Forge</a></li>
                <li><a href="{{ url('api') }}/{{ $currentVersion }}" title="Laravel Framework API">API</a></li>
                <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
            </ul>
        </nav>

    </div>
</footer>

<div id="top">
    <a href="#index" title="Back to the top">
        <i class="icon-chevron-up"></i>
    </a>
</div>

@endsection
