@extends('app')

@section('body-class', 'home')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="hero">
	<div class="container">

        <div class="content">
            <h1>喜歡優美的程式碼？我們也是。</h1>
            <p>為網頁藝術家創造的 PHP 框架</p>
        </div>

        @include('partials/browser')

        <div class="macbook">
<pre class="line-numbers"><code class="language-php">
&lt;?php


class Idea extends Eloquent
{

	/**
	 * Dreaming of something more?
	 *
	 * @with Laravel
	 */
	 public function create()
	 {
	 	// Have a fresh start...
	 }

}</code></pre>
            {!! svg('macbook') !!}
        </div>

        <div class="callout rule">
            <span class="text">See What's New In 5.3!</span>
        </div>

        <div class="callouts">
            <a href="/docs/scout" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Scout</div>
                    <div class="callout-icon">{!! svg('scout')!!}</div>
                </div>
                <p>Driver based full-text search for Eloquent, complete with pagination and automatic indexing.</p>
            </a>
            <a href="/docs/broadcasting" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Echo</div>
                    <div class="callout-icon">{!! svg('echo')!!}</div>
                </div>
                <p>Event broadcasting, evolved. Bring the power of WebSockets to your application without the complexity.</p>
            </a>
            <a href="/docs/passport" class="callout minimal third">
                <div class="callout-head">
                    <div class="callout-title">Laravel Passport</div>
                    <div class="callout-icon">{!! svg('passport')!!}</div>
                </div>
                <p>API authentication without the headache. Passport is an OAuth2 server that's ready in minutes.</p>
            </a>
        </div>
	</div>
</section>

{{-- <section class="panel laracon standout" id="laracon">
    <object type="image/svg+xml" data="/assets/img/laracon-16.svg" width="350"></object>
    <h2>This year Laracon goes <strong>bigger than ever</strong>. Early Bird tickets available for a limited time.</h2>
    <a href="http://laracon.us" class="btn"><em>Laracon US</em>Louisville, Kentucky</a>
    <a href="http://laracon.eu" class="btn"><em>Laracon EU</em>Amsterdam, Netherlands</a>
</section> --}}

<section class="panel features dark" id="features">
	<h1>快速開發?</h1>
	<p class="intro">傳遞優雅的應用程式只需要一瞬間</p>
		<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>簡潔明瞭，優美的語法。</h2>
					<p>想要程式優雅、簡約，還擁有可讀性嗎？或許您將完美契合於此，因為 Laravel 專門設計給如同您一樣的人們。如果您需要任何入門的幫助，請查閱 <a href="https://laracasts.com">Laracasts</a> 以及我們 <a href="/docs">優秀的文件</a>。</p>
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
class Purchase implements ShouldQueue
{

	/**
	 * Purchase a new podcast.
	 */
	 public function handle(Repository $repo)
	 {
	 	foreach ($this->purchases as $purchase)
	 	{
	 		//
	 	}
	 }
</code></pre>
						</div>
					</div>

				</div>
			</div><!-- /.block -->
			<div class="block even">
				<div class="text">
					<h2>為了您的團隊量身打造。</h2>
					<p>無論您是獨自開發還是二十人的團隊，Laravel 讓您耳目一新。使用<a href="/docs/migrations">遷移</a>以及<a href="/docs/schema">結構生成器</a>讓每個人都同步使用 Laravel 的資料庫。</p>
				</div>
				<div class="media">
					<div class="terminal-window">
						<div class='top-bar'></div>
						<div class='window-content'>
							<div class="dark-code">
							<pre><code class="language-bash">
~/Apps $ php artisan make:migration create_users_table
Migration created successfully!

~/Apps $ php artisan migrate --seed
Migrated: 2015_01_12_000000_create_users_table
Migrated: 2015_01_12_100000_create_password_resets_table
Migrated: 2015_01_13_162500_create_projects_table
Migrated: 2015_01_13_162508_create_servers_table
</code></pre></div>
						</div>
					</div>
				</div>
			</div><!-- /.block -->
			<div class="block odd">
				<div class="text">
					<h2>現代化的工具組，彷彿施展魔術。</h2>
					<p>透過<a href="/docs/eloquent">驚豔的 ORM</a>、輕鬆上手的<a href="/docs/routing">路由</a>、強大的<a href="/docs/queues">隊列函式庫</a>，以及<a href="/docs/authentication">易用的認證</a>，這些工具讓您的 PHP 現代化且易維護。我們用盡全力打造這些小東西，只為了幫助您打造驚人的應用程式。</p>
				</div>
				<div class="media">

					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<pre class="line-numbers"><code class="language-php">
Route::resource('photos', 'PhotoController');

/**
 * Retrieve A User...
 */
Route::get('/user/{user}', function(App\User $user)
{
	return $user;
})
</code></pre>
					</div>
				</div>
			</div><!-- /.block -->
		</div>
	</section>

	<section class="panel ecosystem light" id="ecosystem">
		<h1>Laravel 生態系統</h1>
		<p class="intro">徹底改變您建立網站的方式。</p>

        <div class="container">
    		<a href="https://forge.laravel.com" class="callout full forge">
    			<div class="content">
					{!! svg('forge') !!}
					<p>瞬間將 PHP 發佈在 Linode、DigitalOcean 或其他平台上。一次擁有推送部署、PHP 7.0、HHVM、隊列，以及任何您打造驚人的 Laravel 應用程式所需之一切。</p>
					<p>在幾分鐘內啟動您的應用程式！</p>
    			</div>
                <img src="https://forge.laravel.com/images/ui-preview.png" alt="Forge UI Preview" height="350" />
    		</a>
            <div class="callouts">
                <a class="third callout pop" href="/docs/homestead">
                    <div class="callout-head">
                        <div class="callout-title">Homestead</div>
                        <div class="callout-icon">{!! svg('h') !!}</div>
                    </div>
                    <div class="callout-body">
						<p>Laravel 官方的本機開發環境。由 Vagrant 技術支援，透過 Homestead 讓您的整個團隊開發環境一致，同步使用最新版本的 PHP、MySQL、Postgres、Redis，及其他軟體。</p>
                    </div>
                </a>
                <a class="third callout pop teal" href="https://laracasts.com">
                    <div class="callout-head">
                        <div class="callout-title">Laracasts</div>
                        <div class="callout-icon">{!! svg('play') !!}</div>
                    </div>
                    <div class="callout-body">
						<p>數百部（是的，數百部）的 Laravel 及 PHP 影片教學，而且每週都會有新的影片加入！您可以瀏覽基礎的部分，或是開始精通 Laravel 的旅程。價格就如同您所有午餐的預算。</p>
                    </div>
                </a>
                <a class="third callout pop" href="/docs/billing">
                    <div class="callout-head">
                        <div class="callout-title">Laravel Cashier</div>
                        <div class="callout-icon">{!! svg('cashier') !!}</div>
                    </div>
                    <div class="callout-body">
                        <p>Make subscription billing painless with built-in Stripe and Braintree integrations. Coupons, swapping subscriptions, cancellations, and even PDF invoices are ready out of the box.</p>
                    </div>
                </a>
            </div>
            <div class="callout rule">
                <span class="text">And so much more!</span>
            </div>
            <div class="packages">
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="/docs/valet" class="package-title">Valet</a>
                            <p>A Laravel development environment for Mac minimalists. No Vagrant, no Apache, no fuss.</p>
                        </div>
                    </div>
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="https://github.com/laravel/socialite" class="package-title">Socialite</a>
                            <p>OAuth authentication with Facebook, Twitter, Google, LinkedIn, GitHub, and more.</p>
                        </div>
                    </div>
                </div>
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="/docs/elixir" class="package-title">Elixir</a>
                            <!-- <p>If you've ever been frustrated with Gulp and asset compilation, Elixir is for you.</p> -->
                            <p>Laravel Elixir makes front-end a breeze. Start using SASS and Webpack in minutes.</p>
                        </div>
                    </div>
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="https://spark.laravel.com" class="package-title">Spark</a>
                            <p>Powerful SaaS application scaffolding. Stop writing boilerplate & focus your application.</p>
                        </div>
                    </div>
                </div>
                <div class="third">
                    <div class="package">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="https://lumen.laravel.com" class="package-title">Lumen</a>
                            <p>If all you need is an API and lightning fast speed, try Lumen. It’s Laravel super-light.</p>
                        </div>
                    </div>
                    <div class="package last">
                        <div class="icon">{!! svg('package') !!}</div>
                        <div class="content">
                            <a href="https://statamic.com" class="package-title">Statamic</a>
                            <p>Need a CMS that runs on Laravel and is built for developers <em>and</em> clients? Look no further. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection
