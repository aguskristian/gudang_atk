<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from www.portnine.com/contact by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 03 Jul 2013 09:27:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php $this->load->view('header')?>
<?php $this->load->view('main_header')?>
<body>

<div class="full-page-wrapper">

<!--  960 Container Start -->
<div class="container">

	<!-- Contact Form -->
	<div class="eleven columns">
		<h4 class="headline">Form Input Sub Unit</h4>
		

		<div class="success-message">
			<div class="notification success closeable">
				<p><span>Success!</span> Your message has been sent.</p>
			</div>
		</div>


		<div id="contact-form">
            <form accept-charset="UTF-8" class="new_message" id="new_message" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="4/e/8HmCN84QvWqbOVWyVzVjaeK9ql3IzLWgVc6HSSQ=" /></div>
            
				
				<div class="field">
					<label>Sub Unit Code</label>
                    <input id="message_name" name="vsu_code" size="30" type="text" />
				</div>
			
				<div>
					<label>Sub Unit Name</label>
                    <input id="message_name" name="vsu_name" size="10" type="text" />
				</div>
				
				<div class="field">
					<label>Unit Code</label>
                    <input id="message_name" name="vsu_vu_code" size="30" type="text" />
				</div>
				
				<div>
					<label>Sub Unit Level</label>
                    <input id="message_name" name="vsu_level" size="10" type="text" />
				</div>
				
				<div class="field">
                    <input type="submit" value="Add" name="submit" />
				</div>
			</form>		
		</div>
</div>
	<?php $this->load->view('footer')?>
</body>

<!-- Mirrored from www.portnine.com/contact by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 03 Jul 2013 09:27:00 GMT -->
</html>


