@extends('app')

@section('body-class')
home
@endsection

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

<section class="panel statement light">
	<div class="content">
		<h1>喜歡簡潔乾淨的程式碼？我們做到了。</h1>
		<p>為網頁藝術家創造的 PHP 框架</p>
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
&lt;?php


class Idea extends Eloquent {

	/**
	 * Dreaming of something more?
	 *
	 * @with Laravel
	 */
	 public function create()
	 {
	 	// Have a fresh start...
	 }

}

	</code></pre>
				</div>
			</div>

		</div>
	</div>
	<a href="#features" class="next-up">
		強大，現代化的功能
		<img src="/assets/img/down-arrow.png">
	</a>
</section>

<section class="panel features dark" id="features">
	<h1>速度很快嗎？</h1>
	<p>傳遞優雅的應用程式只需要一瞬間</p>
		<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>簡潔明瞭，優美的語法。</h2>
					<p>想要程式優雅、簡約，且易讀？或許你將完美契合於此，因為 Laravel 專門設計給如同你一樣人們。如果你需要任何入門的幫助，請查閱 <a href="https://laracasts.com">Laracasts</a> 以及我們 <a href="/docs">優秀的文件</a>。</p>
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
class Purchase implements ShouldBeQueued {

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
					<h2>為了你的團隊量身打造。</h2>
					<p>無論你是獨自開發還是二十人的團隊，Laravel 讓你耳目一新。使用<a href="/docs/migrations">遷移</a>以及<a href="/docs/schema">結構生成器</a>讓每個人都同步使用 Laravel 的資料庫。</p>
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
Route::get('/user/{id}', function($id)
{
	return User::with('posts')->firstOrFail($id);
})
</code></pre>
					</div>
				</div>
			</div><!-- /.block -->
		</div>
		<a href="#ecosystem" class="next-up">
			Laravel 生態系統
			<img src="/assets/img/down-arrow.png">
		</a>
	</section>

	<section class="panel ecosystem light" id="ecosystem">
		<h1>Laravel 生態系統</h1>
		<p>徹底改變您建立網站的方式。</p>

		<div class="forge contain">
			<img src="/assets/img/forge-macbook.png" alt="Forge Dashboard" class="screenshot">
			<div class="content">
				<a href="https://forge.laravel.com">
					<img src="/assets/img/forge-logo.png" alt="Forge">
				</a>
				<p>瞬間將 PHP 發佈在 Linode、DigitalOcean 或其他平台上。一次擁有 Push 後直接部署、PHP 5.6、HHVM、隊列，以及任何您打造驚人之應用程式所需的東西。</p>
				<p>在幾分鐘內啟動你的應用程式！</p>
			</div>
		</div>
		<div class="tiles">
			<div class="tile">
				<h2><a href="/docs/homestead">Homestead</a></h2>
				<p>官方 Laravel 的本機開發環境。由 Vagrant 技術支援，使用 Homestead 讓你的整個團隊同步使用最新版本的 PHP、MySQL、Postgres、Redis 等等。</p>
			</div>
			<div class="tile">
				<h2><a href="https://laracasts.com">Laracasts</a></h2>
				<p>數百部（是的你沒看錯，數百部）的 Laravel 及 PHP 影片教學，而且每週都會有新的影片加入！您可以瀏覽基礎的部分，或是開始精通 Laravel 的旅程。價格就如同你所有的午餐價格。</p>
			</div>
			<div class="tile">
				<h2>Power Packed</h2>
				<p>雖然 Laravel 相當驚人，隨開即用，但是還有更多值得探索的功能！例如使用<a href="/docs/billing">交易</a>讓你在處理訂閱計費的問題幾乎輕而易舉，或是使用<a href="/docs/authentication#social-authentication">社群驗證</a> 來驗證Facebook、Twitter，以及其他的社群帳號。</p>
			</div>
		</div>
	</section>
@endsection
