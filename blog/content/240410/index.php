<!DOCTYPE html>
<html lang="ja-JP">
    <head>
        <meta charset="utf-8">
        <title>Ubuntu 22.04でvsftpdを使ってFTPをセットアップ - ytknのweb</title>
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
				width: 50%;
				height: 100%;
			}
			.contents h1 {
				line-height: 40px;
				margin: 0;
				padding-top: 15px;
			}
            .code_background {
                margin: auto;
                padding: 10px;;
                width: 90%;
                background-color: #1a2638;
            }
            .code_background code {
                margin: 0;
                color: white;
            }	
            pre {
                white-space: pre-line;
            }
        </style>
        <link rel="icon" href="/picture/favicon.ico">
    </head>
    <body>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/header.php"); ?>
		<div class="background">
			<!-- 内容 -->
            <div class="contents">
				<h1>Ubuntu 22.04でvsftpdを使ってFTPをセットアップ</h1>
				<time datetime="2024-04-10"><p class="date">2024年4月10日（水）</p></time>
				<hr>
                <img alt="" src="image/vsftpd.png">
                <p>もうすぐUbuntu 24.04が出ると思うけど、やり方は変わらないと思うのでそのままメモった。<br>
                    Ubuntu Server 22.04、IPv4での環境を使用しています。</p>
                <p>まずはvsftpdのインストールをする。</p>
                <pre class="code_background">
                    <code>$ sudo apt install vsftpd</code>
                </pre>
                <p>もしサービスの再起動を求められたらTabキーでOKを選択し押す。</p>
                <p>次にvsftpdのconfigを設定する。</p>
                <p>ただ、そのまま設定すると行数が分からなくて不便なので、nanoのconfigを設定して行数を表示させる。</p>
                <pre class="code_background">
                    <code>$ sudo nano /etc/nanorc</code>
                </pre>
                <p>ちょっと下にスクロールした所に"# set linenumbers"というのがあるので、コメント解除する。<br>
                    （緑で"set locking"と書いてあるところの上にある）<br>
                <pre class="code_background">
                    <code>set linenumbers</code>
                </pre>
                <p>保存したら、vsftpdのconfigを開く。</p>
                <pre class="code_background">
                    <code>$ sudo nano /etc/vsftpd.conf</code>
                </pre>
                <p>該当する箇所を修正する。</p>
                <pre class="code_background">
                    <code># 14行目:YESに変更</code>
                    <code>listen=YES</code>
                    <code></code>
                    <code># 22行目:NOに変更</code>
                    <code>listen_ipv6=NO</code>
                    <code></code>
                    <code># 31行目:コメント解除</code>
                    <code>write_enable=YES</code>
                    <code></code>
                    <code># 35行目:コメント解除</code>
                    <code>local_umask=022</code>
                    <code></code>
                    <code># 99行目:コメント解除</code>
                    <code>ascii_upload_enable=YES</code>
                    <code></code>
                    <code># 100行目:コメント解除</code>
                    <code>ascii_download_enable=YES</code>
                    <code></code>
                    <code># 103行目:コメント解除</code>
                    <code># イコールに続く文章は好きな文章に変更できます</code>
                    <code>ftpd_banner=Welcome to blah FTP service.</code>
                    <code></code>
                    <code># 122行目:コメント解除</code>
                    <code>chroot_local_user=YES</code>
                    <code></code>
                    <code># 123行目:コメント解除</code>
                    <code>chroot_list_enable=YES</code>
                    <code></code>
                    <code># 125行目:コメント解除</code>
                    <code>chroot_list_file=/etc/vsftpd.chroot_list</code>
                    <code></code>
                    <code># ftp接続時の最上位パスを、ルート直下 / ディレクトリにアクセスできないようにし</code>
                    <code># /home/USER/ ディレクトリにする場合、123行目と125行目をコメント解除せずに、次の文を追記する</code>
                    <code>allow_writeable_chroot=YES</code>
                    <code></code>
                    <code># 最終行に次の文を追記する</code>
                    <code>pasv_enable=YES</code>
                    <code>pasv_min_port=50000</code>
                    <code>pasv_max_port=60000</code>
                </pre>
                <p>保存したら、vsftpdを再起動する。</p>
                <pre class="code_background">
                    <code>$ sudo systemctl restart vsftpd</code>
                </pre>
                <p>これでUbuntu側の設定は完了。<br>
                    ftpソフトで、ホスト名にipアドレス、ユーザー名にUbuntuのユーザー名、パスワードにUbuntuのユーザーのパスワードを入力して接続できる。</p>
                <p>おわり</p>
            </div>
			<!-- 内容ここまで -->
		</div>
        <?php $webroot = $_SERVER['DOCUMENT_ROOT']; include($webroot."/footer.php"); ?>
    </body>
</html>
