<script>
	// Hide content onload, prevents JS flicker
	document.body.className += ' js-enabled';
</script>

<div id="header_wrap">
	<div id="header">
		<h1 id="logo">
			<a href="<?php echo $base_url; ?>" title="<?php echo $this->config->item('logo_alt');?>">
				<img src="<?php echo $includes_dir;?>images/logo.png" alt="<?php echo $this->config->item('logo_alt');?>"/>
				<span class="img_rep"><?php echo $this->config->item('logo_alt');?></span> 
			</a>
		</h1>
		 
		<ul id="nav">
			<?php 
				foreach ($this->config->item('header_link_array') as $name => $url) {
					?>
					<li>
						<a href="<?php echo $url;?>"><?php echo $name;?></a>
					</li>
					<?php
				}
			?>
		</ul> 

	</div>
</div>
