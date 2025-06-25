# feedback_collector
💬 What It Does
The Feedback Collector is a small website where people can give their feedback by filling out a form. After submitting, their feedback is saved, and they see a thank you message.

⚙️ How It Works
✅ User visits the page (index.html)

✍️ User fills in their name, email, and message

📩 Clicks Submit

🖥️ The form sends the data to a PHP script (submit_feedback.php)

🗄️ The script saves the feedback into a MySQL database

🎉 User is redirected to a thank you page


🔁 File Flow Diagram

                                 [ User ]
                                   │
                                   ▼
                          Opens ➜ index.html   ←–––––––––––––––––––––––––
                                   │                                      │
                                   ▼                                      │
                         Fills Form (Name, Email, Message)               │
                                   │                                      │
                                   ▼                                      │
                          Submits Form ➜ submit_feedback.php             │
                                   │                                      │
                                   ▼                                      │
                        Uses ➜ db.php to connect to MySQL                │
                                   │                                      │
                                   ▼                                      │
                        Saves feedback into ➜ feedback table (mysql.sql) │
                                   │                                      │
                                   ▼                                      │
                        Redirects to ➜ thankyou.html   ←––––––––––––––––––


📁 How Each File Works


1. index.html:
   
      •	Purpose: This is the main feedback form page that users interact with.
      •	Features:
      o	Form fields for name, email, and message.
      o	Submits data via POST to submit_feedback.php.
      o	Displays a success or error message based on the status query parameter.
      o	Uses a custom font from Google Fonts and styles from style.css.
      •	Extras: JavaScript in the page dynamically shows/hides the form and feedback messages.
      📄 Related to: style.css, submit_feedback.php
      🔗 Redirects to: thankyou.html or shows message based on status.

 3. style.css:
    
      •	Purpose: Controls the visual appearance of the feedback form.
      •	Features:
      o	Modern, clean layout with:
      	Centered form
      	Smooth gradient background
      	Stylish buttons
      	Glassmorphic-style form container
      o	Uses animations (fadeIn) for nice transitions.
      •	Applies to: index.html primarily.
      🎨 Fonts used: 'Poppins'
      ✨ UI style: Soft, modern, and animated.

4. submit_feedback.php:
   
      •	Purpose: Processes form submissions and inserts feedback into the database.
      •	Workflow:
      1.	Connects to the MySQL database using db.php.
      2.	Accepts input via POST.
      3.	Inserts data into the feedback table.
      4.	Redirects to:
      	index.html?status=success on success
      	index.html?status=error on failure
      🛠️ Core of backend logic
      🧩 Depends on: db.php, mysql.sql

5. db.php:
         
      •	Purpose: Provides database connection settings.
      •	Includes:
      o	Host: localhost
      o	User: likely root
      o	Password: probably empty (default for XAMPP)
      o	Database: feedback_system
      🔐 Used by: submit_feedback.php

7. mysql.sql:
         
      •	Purpose: SQL script to create the database and table for feedback.
      •	What it does:
      o	Creates a database: feedback_system
      o	Creates a table: feedback with columns:
      	id, name, email, message, submitted_at (timestamp)
      🧱 Foundation for storing feedback data

 9. thankyou.html:
           
      •	Purpose: Shows a clean “Thank You” page after feedback is submitted.
      •	Features:
      o	Centered thank-you message with emoji 🎉
      o	Stylish gradient background
      o	Smooth fade-in animation
      🎉 Standalone page to appreciate user submission

