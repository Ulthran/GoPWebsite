<div style="text-align:center"><img src="http://collegechampionships.usaultimate.org/wp-content/uploads/2017/05/CarletonGOP_M_2019.jpg" /></div>


Gods of Plastic (GoP) was born late one February night in 1995 in a room on 2nd Nourse, Northfield, Minn. A group of Carleton seniors, motivated by their love of Frisbee and a desire for a level of play higher than intramurals, conspired to form a team around the idea that enjoyment of the game and a higher level of competitive play should not run screaming from each other, but walk hand-in-hand. They agreed to a style of play that could be considered quirky, but would embody the true spirit of the game. From this discussion arose our lofty team name, Gods of Plastic, and our team motto, intense but loose.

Skip ahead and GoP is now 25 years old! We are roughly 5’9” tall, 145 lbs heavy, injury prone and single. Our main interests are frolf and Boone’s Farm. We enjoy long walks along the Cannon River with our pet lion Fruit Pooch, and our favorite holiday is Alumni Weekend. We hate wasting time at the gym and prefer to spend our days doing something useful like spamming the Google group or playing Settlers of Catan. If interested in following this lovely group of Hawaiian clad lads, please find us on twitter @goprocks. We don’t follow back.

This open source website hosts GoP's heavily annotated film collection and provides a suite of workout and practice opportunities for our players. Viewing GoP film is restricted to verified GoPper accounts.

<div style="text-align:center"><img src="https://raw.githubusercontent.com/Ulthran/GoPWebsite/master/assets/gvo.jpg" /></div>

Some things to note:

 - The database schema included is exported from a MySQL db, if you use PHPMyAdmin, you should be able to import it pretty easily
 - Some data tables are left out of the schema (users, film, etc). This is to protect user information and to not release information that is available only to specific types of account holders. This is the one part of the project not intended to be open source.
 - All passwords used on the server side are stored in a php file kept in the root dir called 'are_these_bananas.php'. This file is also not included here (for obvious reasons). The basic format is:
    
       // This is a password for the SMTP server
       
       $smtp_password = 'password123';
       
       // ...


