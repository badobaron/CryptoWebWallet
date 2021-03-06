<?php $this->template('header'); ?>

<!--p><a href="./?a=about">About Bitcoin Webskin</a></p>

<p><a href="./?a=listtransactions&account=*&count=20">Last 20 Transactions</a>
<br /><a href="./?a=listtransactions&account=*&count=9999999">All Transactions</a></p>

<p><a href="./?a=sendtoaddress">Send Coins to Address</a></p>

<p><a href="./?a=getinfo">Get Info</a></p>

<p><a href="./?a=server.control">Server Control</a></p-->

<div class="container bs-docs-container" style="margin-top: 51px">
	<div class="row">
		<div class="col-md-3">
			<div class="bs-sidebar hidden-print affix" role="complementary">
				<ul class="nav bs-sidenav">	
					<li>
						<a href="#accounts">Accounts</a>
						<ul class="nav nav-show">
							<li><a href="#list-accounts">List Accounts</a></li>
							<li><a href="#list-received">List Received</a></li>
							<li><a href="#get-account-address">Get Account Address</a></li>
							<li><a href="#get-received-by-account">Get Received By Account</a></li>
						</ul>
					</li>
					<li>
						<a href="transcations">Transcations</a>
						<ul class="nav nav-show">
							<li><a href="#list-transcations">List Transcations</a></li>
							<li><a href="#get-transcation">Get Transcation</a></li>
						</ul>
					</li>
				</ul>
	  		</div>
		</div>
		<div class="col-md-9">
			<div class="jumbotron" id="accounts">
				<h1>Accounts</h1>
				<label id="list-accounts">List Accounts</label>
				<form role="form" class="form-inline">
					<input type="hidden" name="a" value="listaccounts">
					<input type="number" class="form-control" name="minconf" placeholder="Minimum Confirmations">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<label id="list-received">List Received By Account</label>
				<form role="form" class="form-inline">
					<input type="hidden" name="a" value="listreceivedbyaccount">
					<input type="number" class="form-control" name="minconf" placeholder="Minimum Confirmations">
					<select name="includeempty" class="form-control"><option value="true">Include empty</option><option value="false">Does not include empty</option></select>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<label id="get-account-address">Get Account Address</label>
				<form role="form" class="form-inline">
					<input type="hidden" name="a" value="getaddressesbyaccount">
					<input type="text" class="form-control" name="account" placeholder="Account">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<label id="get-received-by-account">Get Received By Account</label>
				<form role="form" class="form-inline">
					<input type="hidden" name="a" value="getreceivedbyaccount">
					<input type="text" class="form-control" name="account" placeholder="Account">
					<input type="number" class="form-control" name="minconf" placeholder="Minimum Confirmations">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<label id="get-balance">Get Balance</label>
				<form role="form" class="form-inline">
					<input type="hidden" name="a" value="getbalance">
					<input type="text" class="form-control" name="account" placeholder="Account">
					<input type="number" class="form-control" name="minconf" placeholder="Minimum Confirmations">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="jumbotron" id="transactions">
				<h1>Transcations</h1>
				<label id="list-transcations">List Transcations</label>
				<form class="form-inline" role="form">
					<input type="hidden" name="a" value="listtransactions">
					<input type="text" class="form-control" name="account" placeholder="Account">
					<input type="number" class="form-control" name="count" placeholder="Limit">
					<br>
					<input type="text" class="form-control text-wider" name="from" placeholder="From">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<label id="get-transcation">Get Transcation</label>
				<form class="form-inline" role="form">
					<input type="hidden" name="a" value="gettransaction">
					<input type="text" class="form-control text-wider" name="txid" placeholder="Transcation ID">
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<hr /><a name="addresses">Addresses</a>

<form action="./" method="GET"><input type="hidden" name="a" value="listreceivedbyaddress">
<input type="submit" value="listreceivedbyaddress"> 
	minconf:<input type="text" name="minconf" value="1" size="3">
	includeempty:<select name="includeempty"><option value="true">true</option><option value="false">false</option></select>
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="getnewaddress">
<input type="submit" value="getnewaddress"> 
	account:<input type="text" name="account" value="" size="20">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="getreceivedbyaddress">
<input type="submit" value="getreceivedbyaddress"> 
	address:<input type="text" name="address" value="" size="40">
	minconf:<input type="text" name="minconf" value="1" size="3">	
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="getaccount">
<input type="submit" value="getaccount"> 
	address:<input type="text" name="address" value="" size="40">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="setaccount">
<input type="submit" value="setaccount"> 
	address:<input type="text" name="address" value="" size="40">
	account:<input type="text" name="account" value="" size="20">	
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="validateaddress">
<input type="submit" value="validateaddress"> 
	address:<input type="text" name="address" value="" size="40">
</form>	

<hr /><a name="sending">Sending</a>

<form action="./" method="GET"><input type="hidden" name="a" value="sendtoaddress">
<input type="submit" value="sendtoaddress"> 
	address:<input type="text" name="address" value="" size="40">
	amount:<input type="text" name="amount" value="" size="20">
<br />	comment:<input type="text" name="comment" value="" size="20">
	comment_to:<input type="text" name="comment_to" value="" size="20">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="sendfrom">
<input type="submit" value="sendfrom"> 
	from account:<input type="text" name="account" value="" size="20">
	to address:<input type="text" name="address" value="" size="40">
	amount:<input type="text" name="amount" value="" size="20">
	minconf:<input type="text" name="minconf" value="1" size="3">
<br />	comment:<input type="text" name="comment" value="" size="20">
	comment_to:<input type="text" name="comment_to" value="" size="20">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="sendmany">
<input type="submit" value="sendmany"> 
	from account:<input type="text" name="account" value="" size="20">
	to many:<input type="text" name="tomany" value="" size="60">
<br />	minconf:<input type="text" name="minconf" value="1" size="3">
	comment:<input type="text" name="comment" value="" size="20">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="move">
<input type="submit" value="move"> 
	from account:<input type="text" name="fromaccount" value="" size="20">
	to account:<input type="text" name="toaccount" value="" size="20">
	amount:<input type="text" name="amount" value="" size="20">
<br />	minconf:<input type="text" name="minconf" value="1" size="3">
	comment:<input type="text" name="comment" value="" size="20">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="sendescrow">
<input type="submit" value="sendescrow"> 
	escrow address:<input type="text" name="escrowaddrs" value="" size="60">
<br />	amount:<input type="text" name="amount" value="" size="20">
<br />	comment:<input type="text" name="comment" value="" size="20">
	comment_to:<input type="text" name="comment_to" value="" size="20">
<br />  note: escrow address is of the form n,addr,addr...  
<br />  where n of the addresses must sign to redeem the escrow 
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="redeemescrow">
<input type="submit" value="redeemescrow"> 
	transaction ID:<input type="text" name="inputtx" value="" size="80">
<br />	to address:<input type="text" name="address" value="" size="40">
<br />	txhex:<input type="text" name="txhex" value="" size="80">
<br />  note: where transaction ID is the escrow txid: number
<br />  txhex is a partially signed transaction number (big hex number sting)	
</form>	








<hr /><a name="server">Server</a>

<p><a href="./?a=getinfo">getinfo</a></p>

<p>
<a href="./?a=getblockcount">getblockcount</a>
<a href="./?a=getblocknumber">getblocknumber</a>
<a href="./?a=getconnectioncount">getconnectioncount</a>
<a href="./?a=getdifficulty">getdifficulty</a>
<a href="./?a=getgenerate">getgenerate</a>
<a href="./?a=gethashespersec">gethashespersec</a>
</p>


<form action="./" method="GET"><input type="hidden" name="a" value="getwork">
<input type="submit" value="getwork"> 
	data:<input type="text" name="data" value="" size="70">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="backupwallet">
<input type="submit" value="backupwallet"> 
	destination:<input type="text" name="destination" value="" size="70">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="setgenerate">
<input type="submit" value="setgenerate"> 
	generate:<select name="generate"><option value="true">true</option><option value="false">false</option></select>
	genproclimit:<input type="text" name="genproclimit" value="-1" size="10">
</form>	

<form action="./" method="GET"><input type="hidden" name="a" value="help">
<input type="submit" value="help"> 
	command:<input type="text" name="command" value="" size="10">
</form>	

<a href="./?a=stop">stop</a>


<hr /><a name="namecoin">Namecoin</a>
<form action="./" method="GET">
<input type="hidden" name="a" value="name_list"><input type="submit" value="name_list">
	name:<input type="text" name="name" value="" size="40">
</form>	

<form action="./" method="GET">
<input type="hidden" name="a" value="name_scan"><input type="submit" value="name_scan">
	start_name:<input type="text" name="name" value="" size="40">
	max_returned:<input type="text" name="max_returned" value="100" size="5">

</form>	

<form action="./" method="GET">
<input type="hidden" name="a" value="name_new"><input type="submit" value="name_new">
	name:<input type="text" name="name" value="" size="40">
</form>	

<form action="./" method="GET">
<input type="hidden" name="a" value="name_firstupdate"><input type="submit" value="name_firstupdate">
	name:<input type="text" name="name" value="" size="40">
	rand:<input type="text" name="rand" value="" size="40">
	tx:<input type="text" name="tx" value="" size="40">		
	value:<input type="text" name="value" value="" size="40">		
</form>	
	
<form action="./" method="GET">
<input type="hidden" name="a" value="name_update"><input type="submit" value="name_update">
	name:<input type="text" name="name" value="" size="40">
	value:<input type="text" name="value" value="" size="40">	
	to address:<input type="text" name="address" value="" size="40">
</form>	

<a href="./?a=name_clean">name_clean</a>


<hr />misc:

<?php /*
<br /><a href="./?a=mtgox">MtGox market data</a>
<form action="./" method="GET">
<input type="hidden" name="a" value="deletetransaction"><input type="submit" value="deletetransaction">
	txid:<input type="text" name="txid" value="" size="68">
</form>	
*/ ?>

<br /><a href="./?a=PHPCoinAddress">PHPCoinAddress</a> - Generate new public/private keys
<form action="./" method="GET">
<input type="hidden" name="a" value="PHPCoinAddress">
<pre>
<input type="submit" value="PHPCoinAddress">   <input type="checkbox" name="debug" 
value="1" />[Debug]   <input type="checkbox" name="reuse_keys" value="1" />[Reuse Keys]
<input type="checkbox" name="coin[]" value="bitcoin" />Bitcoin   <input type="checkbox" name="coin[]" value="bitcoin_testnet" />Bitcoin Testnet
<input type="checkbox" name="coin[]" value="namecoin" />Namecoin  <input type="checkbox" name="coin[]" value="namecoin_testnet" />Namecoin Testnet
<input type="checkbox" name="coin[]" value="litecoin" />Litecoin  <input type="checkbox" name="coin[]" value="litecoin_testnet" />Litecoin Testnet
<input type="checkbox" name="coin[]" value="devcoin" />Devcoin   <input type="checkbox" name="coin[]" value="devcoin_testnet" />Devcoin Testnet
<input type="checkbox" name="coin[]" value="ppcoin" />PPCoin    <input type="checkbox" name="coin[]" value="ppcoin_testnet" />PPCoin Testnet
  
</pre>
</form>	

<hr /><a name="webskin">Webskin</a>

<a href="./?a=start">start</a>
<a href="./?a=getprocess">getprocess</a>
<a href="./?a=kill">kill</a>
	
	
	
<p>
<a href="#accounts">accounts</a> |
<a href="#transactions">transactions</a> |
<a href="#addresses">addresses</a> |
<a href="#sending">sending</a> |
<a href="#server">server</a> |
<a href="#namecoin">namecoin</a> |
<a href="#webskin">webskin</a> 
</p>	
<?php $this->template('footer'); ?>
