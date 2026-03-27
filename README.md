# php-voting-system
A PHP-based voting system with user authentication, enabling users to select their preferred car brand and view aggregated results in a dynamic leaderboard.

## Overview

This project is a PHP-based web application that allows users to register, log in, and vote for their favorite car brand. The application records votes and displays the results in a leaderboard format.

It demonstrates core backend development concepts such as **authentication, session handling, form processing, and dynamic data rendering**.

---

## Features

- User Registration System  
- Secure Login Functionality  
- Session Management  
- Car Brand Voting System  
- Real-time Results Leaderboard  
- Basic Input Sanitization  
- Dynamic Content Display with PHP  

---

## System Workflow

1. **User Authentication**
   - Users can sign up with a username, email, and password  
   - Existing users can log in  

2. **Voting Process**
   - Logged-in users select their preferred car brand  
   - Vote is submitted via a POST request  

3. **Results Display**
   - Votes are processed and stored  
   - Leaderboard shows total votes per car brand  

---

## Project Structure

/project-root
│
├── home.php              # Login & Registration page
├── choices.php           # Car voting page
├── results.php           # Leaderboard display
│
└── includes/
    ├── configsession-inc.php     # Session configuration
    ├── signup-inc.php            # Handles user registration
    ├── login-inc.php             # Handles login logic
    ├── signup_view-inc.php       # Signup error handling
    ├── login_view-inc.php        # Login error handling
    ├── choices-inc.php           # Processes votes
    └── results-inc.php           # Fetches voting results

## Technologies Used
1. PHP – Server-side scripting
2. HTML5 – Structure of web pages
3. Sessions – User authentication management
4. Form Handling (POST) – Data submission


## Technical skills this project demonstrates:
- PHP fundamentals
- Handling user authentication
- Working with sessions
- Processing forms securely
- Building a simple full-stack workflow
