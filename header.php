<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
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
			a:hover {
				text-decoration: underline;
			}
			.header-background {
				background-color: burlywood;
				height: 100px;
			}
			.header {
				max-width: 980px;
				margin: auto;
			}
			.header-logo img {
				width: 70px;
				height: 70px;
				float: left;
				font-size: 30px;
				padding: 15px 30px;
				color: black;
			}
			.header-index a {
				float: right;
				padding: 38px 20px;
				color: black;
			}
		</style>
	</head>

	<body>
	<div class="header-background">
		<div class="header">
			<div class="header-logo"><a href="/index.php"><img src="/picture/icon.png" alt=""></a></div>
				<div class="header-index">
					<ul>
						<!-- 右端 -->
						<a href="/other/index.php">その他</a>
						<a href="/device/index.php">デバイス紹介</a>
						<a href="/blog/index.php">ブログ</a>
						<a href="/index.php">トップページ</a>
						<!-- 左端 -->
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>