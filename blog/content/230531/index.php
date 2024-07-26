<!DOCTYPE html>
<html lang="ja-JP">
    <head>
        <meta charset="utf-8">
        <title>お久しぶりです - ytknのweb</title>
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
			h1 {
				margin: 0;
				padding-top: 15px;
			}
		</style>
        <link rel="icon" href="/picture/favicon.ico">
    </head>
    <body>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/header.php"); ?>
		<div class="background">
			<!-- 内容 -->
			<div class="contents">
				<h1>お久しぶりです</h1>
				<hr>
				<p>みなさん、こんにちはyotakunです。1年ぶりにお久しぶりです。<br>
				前回の記事「<a href="http://ytkn.jp/blog/content/first/index.html">ブログ開設しました</a>」から思いっきり1年放置していました。もうしわけない（棒） </p>
				<p>なんでこんなに放置していたのか、と聞かれたら正直サイトの更新が面倒になっていたわけなんですが、<br>
				  サーバーエンジニアリングが面倒になって放置していたのではなく、1年でハード、ソフトともにかなり進化しました。<br>
				サーバー実機が増えたり、それにProxmox VE入れてクラスタ組んで仮想化したり、マイクラ鯖立てて身内用として遊んだり。まぁいろいろ遊んでいました。<br>
				途中でWebサイトの更新にも手はつけていました。<br>
				実はこのWebサイトの開発はHTML&amp;CSS直打ちで作成したのですが、何も流石にコード直打ちは面倒なのでWordpressに移行してみたく思い移行しようとしたのですが、、あまりうまく行かず。サイトに接続できなかったり記事のアップロードができなかったり、そもそもWordpress環境の作成が面倒になって、Webサイト関連は半年弱ほど放置していました。</p>
				<p>そして先日、Adobeのサブスクに入り、その中のWebオーサリングツールのDreamWeaverを使ってみたいな～と思っていたところ、このブログのことを思い出して更新しよう、となったわけです。</p>
				<p>それにしても、DreamWeaver使いやすいですね。コード直打ちとまるでWebサイトにそのまま入力しているような編集の両方ができます。<br>
				これが正しい使い方なのかはしらんけど</p>
				<p><img src="image/01.png" alt="" width="800" height="437"/></p>
				<p>デバイス紹介ページも古いままなので、近いうちに更新したいです。<br>
			  	あとなにか大きな変更等あったら、またこのブログに投稿させていただきます。<br>
			  	ではまた。<br></p>
		  	</div>
			<!-- 内容ここまで -->
		</div>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
    </body>
</html>
