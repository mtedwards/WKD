</section><!-- Container End -->

<div class="row full-width main-footer">
	<div class="small-12 medium-12 large-4 large-push-4 columns">
	  <div class="panel">
	    <h3>Subscribe to WICKED</h3>
  	  <form class="custom">
  	    <div class="row">
    	    <div class="small-12 medium-6 large-12 columns">
      	    <input type="text" placeholder="First name" required>
    	    </div>
    	    <div class="small-12 medium-6 large-12 columns">
      	    <input type="text" placeholder="Surname name" required>
    	    </div>
  	    </div>
  	    <div class="row">
    	    <div class="small-12 medium-6 large-12 columns">
      	    <input type="email" placeholder="email" required>
    	    </div>
    	    <div class="small-12 medium-6 large-12 columns">
      	    <select class="expand">
      	      <option>State</option>
      	    </select>
    	    </div>
  	    </div>
        <div class="row">
          <div class="small-12 columns">
            <button type="submit" value="submit" class="green button expand">Register Now</button>
          </div>
        </div>
  	  </form>
	  </div>
	</div>
	<div class="small-12 medium-6 large-4 large-pull-4 columns">
	  <div class="panel">
  	  <h3>TAKE A WICKED SELFIE</h3>
	  </div>  	
	</div>
	<div class="small-12 medium-6 large-4 columns">
	  <div class="panel">
  	  ITUNES etc
	  </div>
	</div>
</div>

<footer class="row full-width small-footer" role="contentinfo">
	<div class="small-12 large-6 columns">
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	</div>
	<div class="small-12 large-6 right columns">
		<p>
  		<a href="<?php bloginfo('url'); ?>/Contact-us">Contact Us</a> <a href="<?php bloginfo('url'); ?>/media">Media</a> <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a><br>
  		Website by <a href="http://acmn.com.au/" target="blank">ACMN</a>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>