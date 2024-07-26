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
			.date {
				text-align: right;
				font-size: 12px;
			}
			h1 {
				margin: 0;
				padding-top: 15px;
			}
			img {
				margin: auto;
			}
			aside {
				color: gray;
				font-size: 12px;
			}
		</style>
        <link rel="icon" href="/picture/favicon.ico">
    </head>
    <body>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/header.php"); ?>
		<div class="background">
			<!-- 内容 -->
			<div class="contents">
				<h1>ルーティング関連の更新 &amp; IPv6に対応しました</h1>
				<time datetime="2023-11-8"><p class="date">2023年11月8日（水）</p></time>
				<hr>
				<p>前回の記事からまた月日が空いてしまいました...</p>
				<p>まぁ更新していなかったのにはそれなりに理由があって、（更新が面倒だったのもあるが）実は一時期、80ポートではなく64064とかいうよくわからないポートで公開をしていまし		た。<br>
					というのも、6月頃に私の自宅の光回線を、ソフトバンク光からドコモ光（プロバイダはGMO）に変更した際に、なんとなくIPoEのオプションを申し込んでしまいました。<br>
					IPoEというのはIPv6を使って通信するのですが、IPv6にはポート開放とか、LANとかの概念がありません。（厳密にはあるけど）<br>
					ただし、IPoEはIPv6の通信しかできないのですが、これではIPv4のサーバーに接続できません。そこで、IPoE over IPv4と呼ばれる方法でONUがIPv4アドレスのグローバルIPを持っていて、それで通信することができるようになっています。そして、ONUより内側、LAN内でIPv4アドレスがそれぞれの機器に振り分けられるのです。<br>
					つまり、パッと見、一般人からすればPPPoEもIPoEも同じように使えるわけで、ONUのポート開放も出来るのですが、PPPoEとIPoEには大きな違いがあります。<br>
					それは、ONUのグローバルIPv4アドレスのポート開放は、ウェルノウンポートの開放ができません。</p>
				<img src="image/1.png" alt="">
				<aside>22ポートや、80ポートが使えない</aside>
				<p>なので、当時IPv6の知識がなかった私は、この<i>ytknのweb</i>を64064でポート開放して、GitHub Pagesに64064にリダイレクトするページを作成して、ytkn.jpをCNAMEで	それにつける、というなんとも力技でどうにかしていました（（（</p>
				<p>流石にどうにかしないとヤバい、と思った（というかこのページのことを思い出した）のが今月の頭のあたりで、月曜日から、学校の授業の間にずっと試していたのですが、本日水曜日	にようやく解決したのでいつも通りの80ポートでつながるようになりました。</p>
				<p>ま、別に繋がるようになった理由なんて誰も興味ないと思う（もしくはIPv6で繋がるようにする方法が知りたくて、このサイトには興味がないか）ので、IPv6でWebサイトを公開する	方法はまた別の記事で公開します。<br>
					ではまた今度（~_~）ﾉｼ</p>
			</div>
			<!-- 内容ここまで -->
		</div>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
    </body>
</html>
