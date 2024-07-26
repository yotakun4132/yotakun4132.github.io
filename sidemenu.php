<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>sidemenu</title>
	<style>
		@font-face {
			/* BIZ-UDPGothicR.otf */
			font-family: "BIZ-UDPGothicR";
			src: url("/BIZ-UDPGothicR.otf") format("opentype");
		}
		body {
			line-height: 1.5rem;
			font-family: "BIZ-UDPGothicR", sans-serif;
		}
		.footer {
			background-color: burlywood;
			height: 150px;
			padding: 0px 10%;
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
	<div class="footer">
		<div class="footer-feedback">
			<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdPRmEr9da7VE3w7LMvAPHRl0AnLmb7mjFNdlhY4YcUp8VI6Q/viewform?usp=pp_url">フィードバックはこちらから</p>
		</div>
		<div class="footer-copyright">
			<a href="https://creativecommons.org/licenses/by-sa/4.0/deed.ja"><img src="/picture/by-sa.webp" alt=""></p>
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
</body>
</html>
