@extends('layouts.master')

@section('body_opening')
<body id="index" class="page home">
@endsection

@section('content')
<header id="header" role="header">
    <div class="boxed">
        <div id="tagline" class="animated bounceInUp">
            <h1>為網頁藝術家<br class="br-mobile__tagline"> 所創造的 PHP 框架。</h1>
            <h2>PHP 不再令人痛苦。<br class="br-mobile__tagline">快樂寫程式享受清新。</h2>
        </div>

        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">快速導覽</a>
            <a href="http://laracasts.com" class="button large animated shake">Laracasts</a>
            <a href="https://forge.laravel.tw" class="button large animated shake">Laravel Forge</a>
        </div>

        <div class="animated fadeIn sublime-header" id="header_image"></div>
    </div>
</header>

<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="//laravel.tw"><img src="assets/img/logo-head.png" alt="Laravel"></a>
        </div>
        <ul class="primary-nav-ul">
            <li class="current-item"><a href="#">歡迎</a></li>
            <li><a href="/docs" title="Documentation">文件</a></li>
            <li><a href="https://forge.laravel.com">Forge</a></li>
            <li><a href="http://laracasts.com">Laracasts</a></li>
            <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
            <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
            <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
        </ul>
        <a href="#" class="show-primary-nav">選單</a>
    </div>
</nav>

<div id="content">

    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="feature-box__item">
                    <h2><i class="icon-random"></i> <a title="REST 風格的路由" href="docs/routing">REST 風格的路由</a></h2>
                    <p>透過簡單的閉包就能回應 HTTP 請求，它能更簡單的幫你快速開始構建非凡的應用程式。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-graph"></i> <a title="操控資料" href="docs/eloquent">操控資料</a></h2>
                    <p>Laravel 內建驚人的 Eloquent ORM 和強大的遷移系統。能夠完美的與 MySQL、Postgres、SQL Server 和 SQLite 協同工作。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-pencil-alt"></i> <a title="優雅的模板引擎" href="docs/templates">優雅的模板引擎</a></h2>
                    <p>PHP 原生代碼或是輕量級的 Blade 模板引擎都能無縫屆接。Blade 提供了很強大的模板繼承孤能和極快的解析速度。相信你會愛上它。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-time"></i> <a title="為明天做準備" href="docs/routing">為明天做準備</a></h2>
                    <p>建立龐大的企業應用或是簡單的 JSON API。建構強大的控制器或是簡潔的 REST 風格路由。Laravel 適用于所有規模的開發作業。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-cog"></i> <a title="可靠的基礎" href="http://www.symfony.com">可靠的基礎</a></h2>
                    <p>Laravel 是由數個 Symfony 元件所構建而成，讓你的應用擁有一個千錘百鍊且可靠的基石。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-star"></i> <a title="基於 Composer" href="http://getcomposer.org">基於 Composer</a></h2>
                    <p>Composer 是一套第三方套件的套件管理工具。能快速在 Packagist 上找到需要的套件。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-group"></i> <a title="強大的社群" href="http://laravel.io/forum">強大的社群</a></h2>
                    <p>無論你是 PHP 新手或者是經驗豐富的架構師，你都能在社群內有所獲。你可以在 IRC 討論靈感，或者是在論壇提出問題。</p>
                </li>
                <li class="feature-box__item">
                    <h2><i class="icon-wrench"></i> <a title="測試、重構" href="docs/testing">測試、重構</a></h2>
                    <p>Laravel 從開始就將測試作為重點功能。我們提供了靈活的 IoC 容器，集成了 PHPUnit 測試工具。不用擔心，這些都很容易。</p>
                </li>
            </ul>
        </article>
    </section>

</div>

<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 改變了我的生命。開發上的高效率，讓我擁有一瞬間將點子轉化成產品的能力。</p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 重新燃起了我開發的熱情，讓我能更有深度的理解 MVC 架構，是他讓我重新找回寫程式的樂趣。</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 改變了我對 PHP 的看法。</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel 讓我不再重複的製造輪子。</p></div>
               <div class="person">Ryan McDonough</div>
           </li>
       </ul>
   </article>
</section>

<footer id="foot" class="textcenter">
    <div class="boxed">

        <nav id="secondary">
            <div id="logo-foot">
	           <a href="//laravel.tw"><img src="assets/img/logo-foot.png" alt="Laravel"></a>
	        </div>
            <ul>
                <li class="current-item"><a href="#">歡迎</a></li>
                <li><a href="/docs" title="Documentation">文件</a></li>
                <li><a href="{{ url('api') }}/{{ DEFAULT_VERSION }}" title="Laravel Framework API">API</a></li>
                <li><a href="http://laracasts.com">Laracasts</a></li>
                <li><a href="https://forge.laravel.tw">Forge</a></li>
                <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a href="//twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
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
