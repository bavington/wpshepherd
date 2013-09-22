<?php

 $lh_port = $_SERVER["HTTP_HOST"];
          echo '<h3>WP Shepherd</h3>';                                  
          echo 'WP Shepherd allows a user to install, develop and manage multiple Wordpress installations using "' . $lh_port . '"<br/>';                                             
          echo 'The assumption here is that you have "xampp", "wamp" or "mamp" already installed and running<br/>';
          echo 'To started here is a bit of a check list<br/>';
          echo '1. Make sure browser pop-ups are enabled for "' . $lh_port . '"<br/>';   
          echo '2. A one time set-up is required (honest guv): Go to Admin tab and click on Installation Settings. The port you are using, ' . $lh_port . ' is auto completed, complete the other two fields<br/>';
          echo '3. Remember the user name and password used here is <b>NOT</b> secure, so keep that in mind during this set-up<br/>';                           
          echo '4. With the Admin bit done it\'s time to play. To install a fresh copy of Wordpress click the "Websites" tab click "Develop", then follow the onscreen instructions<br/>'; 
          echo '5. To install a fresh copy of Wordpress click the "Websites" tab click "Develop", then follow the onscreen instructions<br/>'; 
          echo 'If you have any feedback or comments please use the form in the "Contacts" page<br/>';
		  
		  ?>