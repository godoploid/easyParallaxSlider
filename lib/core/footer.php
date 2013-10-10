		<div class="threeCol">
        	<h3>About Development Team</h3>
            
            <p><a target="_blank" href="http://godoploid.com">Godoploid Design</a> is a premiere web design firm with a specialty in developing online software solutions. We specialize in all inclusive web solutions that combine effective design and user interaction with software that streamlines your business practices and help simplify your various business practices.</p>
        </div>
        <div class="threeCol">
        	<h3>Help us out, spread the word!</h3>
            
            <div class="fb-like" data-href="http://easyparallaxslider.godoploid.com" data-send="true" data-width="315" data-show-faces="true"></div>
        </div>
        <div class="threeCol">
        	<h3>Contact us</h3>
            
            <?php 
			if($_SESSION['msg'] != '') {
				echo "<p>". $_SESSION['msg'] ."</p>";	
			}
			?>
            
            <form action="lib/process/contact-form-process.php" method="post">
            <table>
            	<tr>
                	<td style="width: 100px">Name:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                	<td>Phone:</td>
                    <td><input type="text" name="phone" /></td>
                </tr>
                <tr>
                	<td>Email:</td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                	<td>Message:</td>
                    <td><textarea id="message" name="message"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><a class="cta" id="contactBtn" href="">Send Message</a></td>
                </tr>
            </table>
            </form>
            
        </div>
	<div class="clear"></div>