<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=SERVER_NETWORK?> Wallet</title>
<link href="/static/css/bootstrap.min.css" rel="stylesheet" />
<link href="/static/css/cww.css" rel="stylesheet" />
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
</head>
<?php if(isset($this->info['error']) && $this->info['error']): ?>
	<h1 style="text-align: center">An Error Occured: <?=$this->info['error']?></h1>
<?php die(); endif;  ?>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/"><?=SERVER_NETWORK?> Wallet</a>
	    </div>
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
			<li><a href="/#accounts">Accounts</a></li>
			<li><a href="/#transcations">Transcations</a></li>
			<li><a href="/#addresses">Addresses</a></li>
			<li><a href="/#sending">Sending</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<?php if( $this->wallet_is_open ):?>
				<li><a>Balance: <?=$this->info['balance']?></a></li>
				<li><a>Blocks: <?=$this->info['blocks']?></a></li>	
				<li><a>Connections: <?=$this->info['connections']?></a></li>
				<?=($this->info['testnet'] ? ' <li><a>Testnet</a></li>' : '')?>
			<?php else: ?>Not Connected<?php endif; ?>
			</a></li>
	      </ul>
	    </div>
	  </div>
	</div>
