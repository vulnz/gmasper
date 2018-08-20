
**Gmail Spammer.**
![enter image description here](http://oi68.tinypic.com/mkceme.jpg)

Add random emails in order to send from different email adresses emails to your subscribers. 

**About:**
This software uses SMTP ( gmail in this case) in order to send emails.


**Setting up:**

    in index.php file:

*Put your password inside line 36.*

*Fill line 38, 39, 40.*

*Also if you wish to send html content - use line 13
For title and body use line 45 and 47

    in maker.php:

*Add path in line 2. 
Add at line 15 your emails**


**Files:**

`index.php` = configuration file

`start.bat` = file that should be start after it was generated in order to make single requests using curl to our index.php file in order to send emails

`mail.txt` = put emails where you wish to send 

`maker.php` = it generates bat file for curl of index.php. Add at line 15 your email.


**Usage**
After you filled all required lines 


