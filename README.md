# dbms_project


We decided to go with the MySQL database as none of our team members knew mongo db. We also have been learning MySQL in college and decided the best way to go was with whatever knowledge we had.
I made 5 database tables as per our websites requirement. Login,Register,Acc info, Table cards and table transactions. Initially I made the databases very basic. Only added the basic columns and some inputs into the databases.
As the project progressed I realised I didnt need so many databases and I could reduce it to a lot lesser. Discussing it along with my teammates I realised that I only needed to have 3 databases which were cards, transactions and users. The users database could hold the Login and Register db for what I initially thought. Cards db held the acc info.
I added a few more special characteristics like the current time stamp 



We first started with the register page. Connected the database and used POST to get information from the user on the website and committed to database. Throws an error if username is taken.
Sends the user to login page. In the login page we added the inputs for the users to login. We had a tough time connecting it to the validate page to validate if the email and password
were matching. Shows incorrect details if email and password dont match. Member signup option is also available on the login page. Next we made the validate page. It was basic MySQL queries
to check if the given username and password match. Then the signup page which was pretty straightforward did the styling added the inputs for the needed registering. Logout was the most simple,
it just destroyed the session and sent the user to the login page. Next the homepage, we added a side menu and gave a basic layout on how we wanted our page to look like. The account page took
the longest to do. It wasnt easy to get all the information and display it properly. It kept throwing so many errors that we had to solve step by step. 
