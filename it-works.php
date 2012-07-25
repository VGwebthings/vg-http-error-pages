<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		It Works!
	</title>
	<meta name="description" content="This is a bare blank App on fortrabbit.com.">
	<!--[if lt IE 9]>  
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
	<![endif]-->

	<style type="text/css">

		p, h1, h2, h3, li, footer {
			font-family: 'Helvetica Neue', sans-serif;
			color: #444;
			line-height: 1.5em;
		}
		a {
			text-decoration: none;
			color: #5057A1
		}
		a:hover {
			color: #000;
		}
		body {
			background: #eee;
			margin: 90px;
		}
		code {
			padding: 2px 6px;
			background: #fff;
			border: 1px solid rgba(0,0,0,.1);
		}
		hr {
			border: 0;
			border-bottom: 1px solid #FFF;
			border-top: 1px solid #BBB;
		}
		aside {
			padding: 30px;
			background: #ddd;
			border: 1px solid rgba(0,0,0,.1);
			overflow-y: hidden;
		}
		aside h3,
		aside p,
		aside pre {
			color: #666;
		}
		.fortrabbit {
			font-family: Georgia, serif;
			font-weight: bold;
			font-style: italic;
			color: #444;
			text-decoration: none;
		}
		footer {
			margin: 30px 0;
		}
	</style>

</head>
<body>
<div id="main" role="main">
	<article>
		<h1>
			It works!
		</h1>
		<p>
			This is just a bare blank App. You might want to replace the file <code>index.php</code> with your own great work. Check out some of our getting started guides:
		</p>
		<ul>
			<li>
				<a href="#">
					Up and running in 5 minutes
				</a>
			</li>
			<li>
				<a href="#">
					A basic Git Workflow
				</a>
			</li>
			<li>
				<a href="#">
					A basic SFTP Workflow
				</a>
			</li>
			<li>
				<a href="#">
					Good to know
				</a>
			</li>
		</ul>
	</article>
	<aside>
		<p>
			Here are some infos on the PHP running here:
		</p>
		<h3>
			phpversion()
		</h3>
		<pre>
		<?php
			print_r(phpversion());
		?>
		</pre>
		<hr>
		<h3>
			get_loaded_extensions()
		</h3>
		<pre>
		<?php
			$ext = get_loaded_extensions();
			foreach ($ext as $key => $value) {
				$ext[$key] = (object) array(
					'name' => $value, 
					'version' => phpversion($value)
				);
			}
			print_r($ext);
		?>
		</pre>
		<hr>
		<h3>
			$_SERVER
		</h3>
		<pre>
		<?php
			print_r($_SERVER);
		?>
		</pre>

		<?php if (function_exists('apc_cache_info')){ ?>
		<hr>
		<h3>
			apc_cache_info()
		</h3>
		<pre>

		<?php
			$apc = apc_cache_info();
			unset($apc['cache_list']);
			unset($apc['deleted_list']);
			unset($apc['slot_distribution']);
			print_r($apc);
		?>
		</pre>
		<?php } ?>

	</aside>
	<footer>
		Sincerely yours  <a class="fortrabbit" href="http://fortrabbit.com">• fortrabbit</a>
	</footer>
</div>
</body>
</html>
