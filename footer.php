	<! ========== CALL TO ACTION BAR =============================================================================================== 
	=============================================================================================================================>    
	<div id="cta-bar">
		<div class="container">
			<div class="row centered">
				<a href="#"><h4>Are You Ready For The Next Step?</h4></a>
			</div>
		</div><!-- /container -->
	</div><!-- /cta-bar -->
	
	<! ========== FOOTER ======================================================================================================== 
	=============================================================================================================================>    
	
	<div id="f">
		<div class="container">
			<div class="row">
				<!-- ADDRESS -->
				<div class="col-lg-3">
					<h4>Our Studio</h4>
					<p>
						Invictus Innovations Incorporated<br/>
						2020 Kraft Dr., Suite 3030<br/>
						 Blacksburg, VA 24060, USA<br/>
					</p>
				</div><! --/col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Exchanges</h4>
					<p>
						<i class="fa fa-angle-right"></i> <a href="https://bter.com/trade/pts_cny">Bter - PTS/CNY</a><br/>
						<i class="fa fa-angle-right"></i> <a href="https://bter.com/trade/pts_btc">Bter - PTS/BTC</a><br/>
						<i class="fa fa-angle-right"></i> <a href="https://www.cryptsy.com/markets/view/119">Cryptsy - PTS/BTC</a><br/>
						<i class="fa fa-angle-right"></i> <a href="http://www.btc38.com/trade.html?btc38_trade_coin_name=pts">BTC38 - PTS/CNY</a><br/>
						<i class="fa fa-angle-right"></i> <a href="https://peatio.com/">Peatio</a><br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Mining</h4>
					<p>
						<i class="fa fa-angle-right"></i> <a href="http://pts.rpool.net">http://pts.rpool.net</a> -  3% fee, payout per share of last round
						<i class="fa fa-angle-right"></i> <a href="http://ptspool.com/">http://ptspool.com/</a> -  4% fee,  Pay Per Share 
						<i class="fa fa-angle-right"></i> <a href="http://ypool.net">http://ypool.net</a> -  6% fee, multicoin pool,  Pay Per Share
						<i class="fa fa-angle-right"></i> <a href="https://bitsharestalk.org/index.php?topic=236.0">Bytemaster</a> - Pay Per Share
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Info</h4>
					<p>
						<i class="fa fa-angle-right"><a href="https://bitsharestalk.org/index.php?topic=1631.0">Announcing Angel Shares &amp; BitShares Allocation</a><br/>
					 <i class="fa fa-angle-right"><a href="http://bitsharestalk.org/donate.html">Donate to BitShares Forum</a><br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				
			</div><! --/row -->
		</div><!-- /container -->
	</div><!-- /f -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>
	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;
	
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>    
    <script>
	    $('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>  
  </body>
</html>