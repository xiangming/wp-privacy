<?php
//to override this template, create a file named hmsdefault.php within your active theme folder. you should probably copy and paste this file's code as a starting point.
?>

<style>
	*{
		box-sizing:border-box;
	}
	html, body {
		text-align: center;
		height: 100%;
	}
	body {background:#F2F2F2;font-family: "Helvetica Neue", "Arial", "sans-serif";}
	.privacy {
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  padding: 20px;
	  font-size: 14px;
	  font-family: "Helvetica Neue", "Arial", "sans-serif";
	  overflow: hidden;
	}
	.privacy .privacy-inner {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  -webkit-transform: translate(-50%, -50%);
	      -ms-transform: translate(-50%, -50%);
	          transform: translate(-50%, -50%);
	  text-align: center;
	}
	.privacy .privacy-inner .img-container {
	  margin-bottom: 30px;
	}
	.privacy .privacy-inner .input-container {
	  position: relative;
	}
	.privacy .privacy-inner .input-container input[type="password"] {
	  background: #fff;
	  color: #3a3a3a;
	  padding: 14px 48px 14px 15px;
	  border: 0;
	  border-radius: 3px;
	}
	.privacy .privacy-inner .input-container .arrow-icon {
	  position: absolute;
	  top: 12px;
	  right: 12px;
	  display: none;
	  cursor: pointer;
	}
	.privacy .privacy-inner .input-container .arrow-icon.show {
	  display: block;
	  opacity: .3;
	}
	.privacy .privacy-inner .input-container .arrow-icon.show:hover {
	  opacity: 1;
	}
	.privacy .privacy-inner .input-container .error-message {
	  background: #F0523D;
	  color: #fff;
	  text-align: left;
	  padding: 14px;
	  width: 100%;
	  position: absolute;
	  top: 0;
	  z-index: -1;
	  -webkit-transition: all .2s ease;
	          transition: all .2s ease;
	  opacity: 0;
	  box-sizing: border-box;
	}
	.privacy .privacy-inner .input-container .error-message.show {
	  opacity: 1;
	  top: 44px;
	}
	#the_hint_wrap div {display:inline-block;vertical-align:top;}
</style>
<body>
	<?php echo $messagehtml ?>
	<div id='form_wrap'>
		<div class="privacy">
			<div class="privacy-inner">
				<div class="img-container">
					<img src="<?php echo $this->plugin_dir ?>/images/default.png" alt="private icon" width="64" height="64">
				</div>
			  	<div class="input-container">
			  		<form method="post" name="privacy">
			  			<input type="password" name="hwsp_motech" placeholder="Password" onkeyup="checkInput(this);">
			  			<div class="arrow-icon">
							<img type="submit" src="<?php echo $this->plugin_dir ?>/images/arrow.png" alt="private icon" width="20" height="20" onclick="document.privacy.submit();">
						</div>
				  		<div class="error-message"><?php echo $hinthtml ?></div>
					</form>
			  	</div>
			</div>
		</div>
	</div>
	<script>
		function checkInput(t){
			document.getElementsByClassName('error-message')[0].className = 'error-message';
			if(t.value){
				document.getElementsByClassName('arrow-icon')[0].className = 'arrow-icon show';
			} else{
				document.getElementsByClassName('arrow-icon')[0].className = 'arrow-icon';
			}
		}
	</script>
</body>