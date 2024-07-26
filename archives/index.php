<!DOCTYPE html>
<html lang="ja-JP">
    <head>
        <meta charset="utf-8">
        <title>タイトル - ytknのweb</title>
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
			.contents img {
				object-fit: cover;
				width: 100%;
				height: 100%;
			}
			.contents h1 {
				line-height: 40px;
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
				<h1>ytknのweb アーカイブ</h1>
				<hr>
				昔のytknのwebのアーカイブはこちらから見ることができます。<br>
				（まぁ自分があとで振り返れるために作っただけだけどね）
				<ul>
					<li><a href="202403262248/index.php">2024年3月26日</a></li>
				</ul>
			</div>
			<!-- 内容ここまで -->
		</div>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
    </body>
</html>
