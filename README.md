
Assur & MF development explained
===================
This website was done in a bootstrap environment. I used scripts found here and there and worked following the **MVC** architecture os often as possible. **Bootstrap MD** is installed at the news admin side. *Modals* are built with old BS versions and many CDN are called. **PHPMailer** is handy here too. Mail are sent for news, registering (demande de devis) and contact forms. There is a CSS handling responsive styling, and some media queries can be found in indexstyle.css too.
Many same named files can be found in admin and front (root) directories.
M : **Models** features a pdo manager.
V : **includes** features miscellaneous stuff, like protected database access connexion class (git ignores them),  templates, html views and php files can also be found although they're view-intended only sometimes. **Templates** are for mail purposes only.
C : **Admin** features a **main.js** file, which main role is to call the main controller called **userController.php** through ajax.

demande de devis is handled by addemployee.php (kinda misnamed file) and addfiles.php - any file can be added and selection is multiple. I use an address completor **addressCompletor.js**. I could replace the googlemap pick with assurmf logo.
Last and not the least, the client wanted the theme to be the same as simulassur. In that regard, i did an origin-data / simulassur / bootstrap mix up. I followed my Odilezen scripts for rss flow.
Iframes from netvox are not responsive. Iframes from oggodata are, and the client had to pay for their API. These readme file was done on apr. the 29th in 2019 and ratings aren't included yet.
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTg4NTY2ODI1MF19
-->