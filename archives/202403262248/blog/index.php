<!DOCTYPE html>
<html lang="ja-JP">
    <head>
        <meta charset="utf-8">
        <title>ブログ - ytknのweb</title>
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
			a {
				text-decoration: none;
			}
			.background {
				max-width: 980px;
				margin: auto;
				background-color: #FFFFFF;
			}
			.contents {
				padding: 15px;
			}
			.title {
				margin: 0;
			}
			.article {
				border: 1px solid #E1E1E1;
				padding : 0;
				margin: 0;
			}
			.article_li {
				list-style: none;
				border: 1px solid #E1E1E1;
				padding: 12px;
			}
			.article_li:hover {
				background-color: #F1F1F1;
			}
			.article_link {
				display: flex;
				align-items: center;
			}
			.article_img {
				margin-right: 12px;
			}
			.article_img img {
				height: 80px;
				width: 80px;
				object-fit: cover;
			}
			.article_title {
				line-height: 1.3;
			}
			.article_li:hover .article_title {
				text-decoration: underline;
			}
			.article_date {
				font-size: 12px;
				color: #949494;
				display: flex;
			}
		</style>
        <link rel="icon" href="/picture/favicon.ico">
    </head>
    <body>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/header.php"); ?>
		<div class="background">
        <!-- 内容 -->
        <div class="contents">
            <h1 class="title">ブログ</h1>
            <p>このブログではガジェットや自作PC、マイクラ、ちょっとした小ネタなどなど、ブログにする（予定）です。<br>
                更新頻度は少ないと思います。あとこの目次ページに記事のリンクを張り忘れたりするかもしれないのでよろしく（？）</p>
            <hr>
		  <h2>記事一覧</h2>
			<ul class="article">
				<!-- 記事の書き方
				<li class="article_li">
					<a class="article_link" href="content/yymmdd/index.php">
						<div class="article_img">
							<img alt="" src="content/yymmdd/image/写真">
						</div>
						<div class="article_text">
							<div class="article_title">タイトル</div>
							<time class="article_date">yyyy年mm月dd日</time>
						</div>
					</a>
				</li>
				-->
				<li class="article_li">
					<a class="article_link" href="content/240326/index.php">
						<div class="article_img">
							<img alt="" src="content/240326/image/02.png">
						</div>
						<div class="article_text">
							<div class="article_title">サイトのデザインをちょっと変更した</div>
							<time class="article_date">2024年3月26日</time>
						</div>
					</a>
				</li>
				<li class="article_li">
					<a class="article_link" href="content/240124/index.php">
						<div class="article_img">
							<img alt="" src="content/240124/image/IMG_4089.png">
						</div>
						<div class="article_text">
							<div class="article_title">【POCO X6 Pro レビュー】5万円台でAntutu130万点台！コスパ最強スマホ、POCO X6 Proをかるーく開封レビュー</div>
							<time class="article_date">2024年1月24日</time>
						</div>
					</a>
				</li>
				<li class="article_li">
					<a class="article_link" href="content/231201/index.php">
						<div class="article_img">
							<img alt="" src="content/231201/image/thumbnail.jpg">
						</div>
						<div class="article_text">
							<div class="article_title">Steam Deck OLED が届いたので早速開封＆レビューしてみる</div>
							<time class="article_date">2023年12月1日</time>
						</div>
					</a>
				</li>
				<li class="article_li">
					<a class="article_link" href="content/231108/index.php">
						<div class="article_img">
							<img alt="" src="content/231108/image/1.png">
						</div>
						<div class="article_text">
							<div class="article_title">ルーティング関連の更新 &amp; IPv6に対応しました</div>
							<time class="article_date">2023年11月8日</time>
						</div>
					</a>
				</li>
				<li class="article_li">
					<a class="article_link" href="content/230531/index.php">
						<div class="article_img">
							<img alt="" src="content/230531/image/01.png">
						</div>
						<div class="article_text">
							<div class="article_title">お久しぶりです</div>
							<time class="article_date">2023年5月31日</time>
						</div>
					</a>
				</li>
				<li class="article_li">
					<a class="article_link" href="content/220424/index.php">
						<div class="article_img">
							<img alt="" src="content/220424/image/mainicon.png">
						</div>
						<div class="article_text">
							<div class="article_title">ブログ開設しました</div>
							<time class="article_date">2022年4月24日</time>
						</div>
					</a>
				</li>
			</ul>
        </div>
        <!-- 内容ここまで -->
		</div>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
    </body>
</html>
