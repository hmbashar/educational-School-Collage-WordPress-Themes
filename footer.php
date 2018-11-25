<?php global $redux_demo; ?>
			<footer class="footer_area fix">
				<div class="footer fix ">
				
					<?php if ($redux_demo['footer-widget-switch'] == 1) : ?>
					<div class="footer_widget_area fix column">
					
						<?php if(is_active_sidebar( 'footer_widget_one' )) : ?>
						<?php dynamic_sidebar('footer_widget_one');?>
						<?php else : ?>
						<div class="single_footer_widget floatleft">
							<h2>This is title</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
						</div>
						<?php endif; ?>
						
						<?php if(is_active_sidebar('footer_widget_two')) : ?>
						<?php dynamic_sidebar('footer_widget_two'); ?>
						<?php else : ?>
						<div class="single_footer_widget floatleft">
							<h2>This is title</h2>
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
								<li><a href="">Home</a></li>
							</ul>
						</div>
						<?php endif; ?>
						
						<?php if(is_active_sidebar('footer_widget_three')) : ?>
						<?php dynamic_sidebar('footer_widget_three'); ?>
						<?php else : ?>
						<div class="single_footer_widget floatleft">
							<h2>About Company</h2>
							<ul>
								<li><a target="_blank" href="http://www.linuxhostlab.com/our-company">Our Company</a></li>
								<li><a target="_blank" href="http://www.linuxhostlab.com/server-status">Server Status</a></li>
								<li><a target="_blank" href="http://www.linuxhostlab.com/privacy-policy">Privacy Policy</a></li>
								<li><a target="_blank" href="http://www.linuxhostlab.com/terms-of-service">Terms of Service </a></li>
								<li><a target="_blank" href="http://www.linuxhostlab.com/testimonials">Testimonials</a></li>
								<li><a target="_blank" href="http://www.linuxhostlab.com/client">Our Client</a></li>			
							</ul>
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					
					
					<div class="copy_right_area fix">
						<div class="column">
							<div class="copy_right_left floatleft">
								<p>&copy; All Rights Reserved by the Authority.</p>
							</div>
							<div class="copy_right_right floatright mycredit">
								<?php echo credit_up_me('<p>Design &amp; Developed by <a target="_blank" href="http://www.codingbank.com">Coding Bank</a></p>'); ?>								
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
        
		<?php wp_footer(); ?>
    </body>
</html>
