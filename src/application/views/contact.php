<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="page-content">
	<div class="container">
		<div class="text-center">
			<h1>GET IN TOUCH</h1>
		</div>

		<div class="contact-page-header-container mw-750 ml-auto mr-auto">
			<div class="row">
				<!-- <div class="col-md-6">
				
					<div class="card shadow ht-100 mt-4">
						<div class="card-body">
							<div class="info">
								<div class="contact-page-header-box-icon">
									<i class="fas fa-comments"></i>
								</div>
								<h6 class="info-title text-uppercase mt-2 text-center">Live Chat</h6>
								<p class="description text-center">
									Chat to us live now, it's the fastest way to get in touch. We're online 8am-6pm, Monday to Friday. 
									Simply click the orange button in the bottom right of your screen.
								</p>
								<a href="#" class="btn btn-sm btn-secondary btn-full">Start Chat 
									<i class="fas fa-caret-right text-primary"></i>
								</a>
							</div>
						</div>
					</div>

				</div> -->
				<div class="col-md-12">
					
					<div class="card shadow ht-100 mt-4">
						<div class="card-body">
							<div class="info">
								<div class="contact-page-header-box-icon">
									<i class="fas fa-paper-plane"></i>
								</div>
								<h6 class="info-title text-uppercase mt-2 text-center">SEND A MESSAGE</h6>
								<p class="description text-center">
								If you can't stay online for your answer, simply send us a message. We'll do our best to reply to all message within 2 business hours.<br><br>
								</p>
								<button class="btn btn-sm btn-secondary btn-full" data-target="#contactModal" data-toggle="modal">Send Message
									<i class="fas fa-caret-right text-primary"></i>
								</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	</div><!-- container -->

	<div class="contact-page-rich">
		<div class="container">
		
			<div class="text-center mb-4">
				<h3>WHERE TO FIND US</h3>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<h5><i class="fas fa-map-marker text-warning"></i> ADDRESS</h5>
					<hr>
					<b>International Courier Service</b>
					<ul class="no-padding basic mb-5">
						<li>No. 95,</li>
						<li>Cresent Road ,</li>
						<li>Major Intersection Ellesmere and bellemy,</li>
						<li>Scarborough,</li>
						<li>Canada,</li>
						<li>M4W1T6</li>
					</ul>

					<h5><i class="fas fa-info-circle text-warning"></i> COMPANY INFORMATION</h5>
					<hr>
					<b></b>
					<ul class="no-padding basic">
						<li><b>Company Number:</b> +1-648672245</li>
						<li>TAX Number: 1324932oi4</li>
					</ul>
				</div>
				<div class="col-sm-8">
				<div id="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184413.73425482397!2d-79.36881891812494!3d43.76321380575677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d05e9e66b609%3A0xf06e63ce2447807b!2sScarborough%2C%20Toronto%2C%20ON!5e0!3m2!1sen!2sca!4v1612485261489!5m2!1sen!2sca" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe></div>
				</div>
			</div>
		
		</div>
	</div>
</div>			


<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">What's On Your Mind?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
				<div id="response_container"></div>
				
				<?php echo form_open('contact', array('id' => 'contactForm'));?>
					<div class="form-group">
						<label for="name">Your name<i class="text-warning">*</i></label>
						<input type="text" class="form-control" required="required" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="email">Your email address<i class="text-warning">*</i></label>
						<input type="email" class="form-control" required="required" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="subject">Subject<i class="text-warning">*</i></label>
						<select type="text" class="form-control" required="required" id="subject" name="subject">
							<option value="General Enquiry">General Enquiry</option>
							<option value="Technical Issue">Technical Issue</option>
							<option value="Legal">Legal</option>
							<option value="Feature Request">Feature Request</option>
							<option value="Blog Post" <?php if(isset($_GET['ref_blog'])) echo ' selected="selected"'; ?>>Blog Post</option>
						</select>
					</div>
					<div class="form-group">
						<label for="message">Your message<i class="text-warning">*</i></label>
						<div>
							<small class="text-muted">
								Please be as descriptive as possible.
							</small>
						</div>
						<textarea type="text" class="form-control" minlength="10" maxlength="2500" rows="5" required="required" id="message" name="message"></textarea>
					</div>
				</form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="contactForm" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </div>
</div>