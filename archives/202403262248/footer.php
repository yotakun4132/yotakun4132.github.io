<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>header</title>
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
			.footer-background {
				background-color: burlywood;
				height: 160px;
			}
			.footer {
				max-width: 980px;
				margin: auto;
			}
			.footer-feedback {
				padding: 20px 40px;
			}
			.footer-copyright {
				display: flex;
				flex-direction: column;
				float: right;
				padding-right: 10px;
				text-align: right;
			}
		</style>
		<script type="text/javascript">
			function ShowNowYear() {
				var now = new Date();
				var year = now.getFullYear();
				document.write(year);
			}
		</script>
	</head>
	<body>
		<div class="footer-background">
			<div class="footer">
				<div class="footer-feedback">
					<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdPRmEr9da7VE3w7LMvAPHRl0AnLmb7mjFNdlhY4YcUp8VI6Q/viewform?usp=pp_url">フィードバックはこちらから</p>
				</div>
				<div class="footer-copyright">
					<a href="https://creativecommons.org/licenses/by-sa/4.0/deed.ja"><img src="/picture/by-sa.webp" alt=""></a>
					<small>
							&copy;
							2021 -
							<script type="text/javascript">
								ShowNowYear();
							</script>
							yotakun 4132 All Rights Reserved.
					</small>
				</div>
			</div>
		</div>
	</body>
</html>
