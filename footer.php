<footer>
<div class="content">
			<a name="newsletter"></a>
            <div class="free-plan">
			<div class="footer-top">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-12" style="text-align: center; width: 117%;">
                        	<ul>
                            	<li><a class="fb" href="https://www.facebook.com/CornerstoneServicesInc/" target="_blank">&nbsp;</a></li>
                                <li><a class="twiter" href="https://twitter.com/CRSTNET" target="_blank">&nbsp; </a></li>
                                <li><a class="rss" href="http://crst.net/articles/" target="_blank">&nbsp;</a> </li>
                                <li><a class="linkedin" href="https://www.linkedin.com/company/cornerstone-services-inc-?trk=top_nav_home" target="_blank">&nbsp;</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-6">
         
                        </div>
						<!---Newsletter------->
						<?php $alertError = "" ?>
						<div id="newsletter">
							<form action="newsletter.php" method="post" onsubmit="return validate();">
							<p id="error_para" ></p>
							<span id="alertError"><?php echo $alertError;?></span>
							<div class="form-horizontal">
								<input type="text" name="first" class="form-control feeback-input" id="first" placeholder="*FIRST NAME">
								<input type="text" name="last" class="form-control feeback-input" id="last" placeholder="*LAST NAME">
								<input type="text" name="business" class="form-control feeback-input" id="business" placeholder="BUSINESS">
								<input type="email" name="email" class="form-control feeback-input" id="email" placeholder="*EMAIL">
								<input type="text" name="address1" class="form-control feeback-input" id="address1" placeholder="*ADDRESS 1">
								<input type="text" name="address2" class="form-control feeback-input" id="address2" placeholder="ADDRESS 2">
								<input type="text" name="city" class="form-control feeback-input" id="city" placeholder="*CITY">
									<select type="text" id="sel1" name="state">
										<option disabled selected>*STATE</option>
										<option>AL</option>
										<option>AK</option>
										<option>AZ</option>
										<option>AR</option>
										<option>CA</option>
										<option>CO</option>
										<option>CT</option>
										<option>DE</option>
										<option>FL</option>
										<option>GA</option>
										<option>HI</option>
										<option>ID</option>
										<option>IL</option>
										<option>IN</option>
										<option>IA</option>
										<option>KS</option>
										<option>KY</option>
										<option>LA</option>
										<option>ME</option>
										<option>MD</option>
										<option>MA</option>
										<option>MI</option>
										<option>MN</option>
										<option>MS</option>
										<option>MO</option>
										<option>MT</option>
										<option>NE</option>
										<option>NV</option>
										<option>NH</option>
										<option>NJ</option>
										<option>NM</option>
										<option>NY</option>
										<option>NC</option>
										<option>ND</option>
										<option>OH</option>
										<option>OK</option>
										<option>OR</option>
										<option>PA</option>
										<option>RI</option>
										<option>SC</option>
										<option>SD</option>
										<option>TN</option>
										<option>TX</option>
										<option>UT</option>
										<option>VT</option>
										<option>VA</option>
										<option>WA</option>
										<option>WV</option>
										<option>WI</option>
										<option>WY</option>
									</select>
														
								<input type="text" name="zip" id="zip" placeholder="*ZIP">
							
								<input id="btn" class="btn btn-primary btn-default" type="submit" value="SUBMIT" name="submit_form">
							</div>
							</form>
							
						</div>
					</div>
                </div>
            </div>
            <div class="footer-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	<p>&copy; 2016<a href="https://www.dataconsulate.com"> DataConsulate.</a> All rights reserved.  Privacy Policy.</p>
                        </div>
                    </div>
                </div>
            </div>
	</footer>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
