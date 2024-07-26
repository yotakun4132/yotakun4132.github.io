<!DOCTYPE html>
<html lang="ja-JP">
	<head>
		<meta charset="utf-8">
		<title>ytknのweb</title>
		<style>
			@font-face {
				/* NotoSansJP-VariableFont_wght.ttf */
				font-family: "NotoSansJP-VariableFont_wght";
				src: url("/NotoSansJP-VariableFont_wght.ttf") format("truetype");
			}
			body {
				line-height: 1.5rem;
				font-family: "NotoSansJP-VariableFont_wght", sans-serif;
				background-color: #F1F1F1;
			}
			.background {
				background-color: #ffffff;
				max-width: 980px;
				margin: auto;
			}
			.contents {
				padding: 0 15px;
			}
			.contents h1 {
				font-style: italic ;
				font-size: 40px;
				padding-top: 15px;
				margin-top: 0;
			}
			.link a {
				font-size: 25px;
			}
			.intro p {
				font-size: 20px;
			}
			.link {
				border-top: 1px solid;
				border-bottom: 1px solid;
			}
			.link img {
				width: 100px;
			}
			.notice {
				padding-bottom: 15px;
			}
			.notice1 {
				padding: 10px;
				border: 3px double;
			}
			.notice1 h3 {
				border-bottom: 1px solid;
			}
			/* お知らせの書き方
			.notice- {
				padding: 10px;
				border: 3px double;
			}
			.notice- h3 {
				border-bottom: 1px solid;
			}
			以上 */
			.counter-script {
				padding-left: 20px;
			}
		</style>
		<link rel="icon" href="/picture/favicon.ico">
	</head>
	<body>
		<?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/header.php"); ?>
		<div class="background">
		<div class="contents">
			<h1>ようこそ</h1>
			<div class="intro">
				<p>どうも、yotakun4132です。自分のホームページ作りました。<br>ただの趣味なので、更新頻度はかなり低いかもしれませんが、そこらへんはまぁ適当なのでご了承くださいw</p>
				<p>このホームページでは私のブログ？や使っている機器、サーバーなどを紹介してます。<br>他にも色々追加するつもりなんで時々見に来て見ていただくと嬉しいです。</p>
				<p>あと、このホームページでは広告、Amazonアソシエイトリンクを使用していることがあります。</p>
				<p>このサイト(ytkn.jp)は、<a href="https://creativecommons.org/licenses/by-sa/4.0/deed.ja">クリエイティブ・コモンズ CC BY-SA 4.0 DEED</a>の条件の範囲内であれば自由に引用、お使いいただけます。</p>
				<p>もし、文字化けや誤字脱字、ご要望等がございましたら、お手数ですが<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdPRmEr9da7VE3w7LMvAPHRl0AnLmb7mjFNdlhY4YcUp8VI6Q/viewform?usp=pp_url">こちらのフィードバックフォーム</a>よりご連絡お願いします。</p>
			</div>
			<div class="link">
				<h2>リンクとか</h2>
				<a href="https://twitter.com/yotakun4132"><img src="picture/X.jpg" alt="X"></a>
				<a href="https://www.youtube.com/@yotakun4132"><img src="picture/youtube.webp" alt="YouTube"></a>
				<a href="https://github.com/yotakun4132"><img src="picture/github.jpg" alt="GitHub"></a>
				<a href="https://steamcommunity.com/id/yotakun4132/"><img src="picture/Steam.png" alt="Steam"></a>
			</div>
			<div class="counter">
				<span>アクセスカウンター</span>
				<span class="counter-script">
					<script language="javascript" type="text/javascript" src="//counter1.fc2.com/counter.php?id=34129378&main=1"></script><noscript><img src="//counter1.fc2.com/counter_img.php?id=34129378&main=1" alt="accessCounter"></noscript>
				</span>
			</div>
			<div class="notice">
				<h2>お知らせ</h2>
            <!-- お知らせの書き方 
            __________________________
            <div class="notice-">
                <h3> タイトル </h3>
                <p> 内容 </p><br>
            </div>
            __________________________
             以上 -->
				<div class="notice1">
					<h3>調整中ページについて</h3>
					<p>2023年11月08日現在、次のページが調整中です。</p>
					<ul>
						<li>その他</li>
					</ul>
					<p>公開までもうしばらくお待ち下さい。</p>
				</div>
			</div>
		</div>
		</div>
		<?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
	</body>
</html>