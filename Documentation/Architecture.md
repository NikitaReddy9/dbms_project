CREDIT CARD DATABASE


FRONTEND – HTML/CSS
1.	Login/Register Page
-	Registered User ID to login into your account
-	Password
-	Option to register as a User

2.	OTP page
-	For double security an OTP will be sent to the registered email ID
-	Enter OTP
-	Option to resend the OTP

3.	Account Summary Page
-	Personal Details
-	Cards associated with the Account
  -	Card No
  -	CVV
  -	Bank 
- Option to add or remove cards

4.	Card Summary Page
-	Credit Limit: Credit limit on the card
-	Available Credit Limit: Remaining credit that can be used in the specific month
-	Cash Limit: Cash limit on the card
-	Available Cash Limit: Remaining cash that can be used for that month
-	Last Billed Amount (Option to view full transaction history for the specific month and will redirect the page to the transaction page)
-	Unbilled Amount: Amount credited in the month which is yet to be billed for 

5.	Transaction Page
-	Date of Transaction
-	Description: Who the Transaction was made to 
-	Amount Credited
-	Monthly, Weekly Transaction statistics


BACKEND - PYTHON
- Reading all the data from the login and register page and committing it to the database 
- Sending an OTP to the registered email address and verifying it
- Showing all the details of the respective persons info when used the details to login
- Reading all the transactions and using statistics to show how the transactions change monthly or weekly


DATABASE - MYSQL
1.	Login info
-	Username
-	Password
2.	Register info
-	Username
-	Password
-	First name Last name
-	Email
-	Phone number
-	Address
-	ID Proof
3.	Account info and summary
-	Account number
-	IFSC code
-	Transactions
4.	Card details
-	Card number
-	Expiry Date
-	CVV
-	Name and type of card
5.	All transactions for all cards
-	Date
-	Amount
-	Account number


   

