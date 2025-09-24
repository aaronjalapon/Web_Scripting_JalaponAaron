# User Authentication System

A secure and user-friendly authentication system built with HTML, CSS, PHP, and JavaScript. This project implements a complete user registration and login system with modern UI design and form validation.

## Features

### 1. User Registration
- Full Name
- Email Address (with format validation)
- Username (unique)
- Password (with confirmation)
- Gender selection
- Multiple hobbies selection
- Country selection
- Client-side and server-side validation

### 2. Login System
- Secure authentication
- Session management
- Welcome page after login
- Logout functionality

### 3. Modern UI/UX
- Responsive design
- Clean and modern interface
- Interactive form elements
- Real-time validation feedback
- Gradient backgrounds
- Mobile-friendly layout

### 4. Security Features
- Password hashing
- Input validation and sanitization
- Session-based authentication
- Protection against unauthorized access

## Project Structure
```
Web_Scripting_JalaponAaron/
├── assets/
│   ├── style.css
│   ├── login.js
│   └── register.js
├── index.html      # Landing page
├── register.html   # Registration form
├── register.php    # Registration processing
├── login.html      # Login form
├── login.php       # Login processing
├── main.php        # Welcome page
├── logout.php      # Logout handler
└── users.txt       # User data storage
```

## Setup Instructions

1. **Requirements**
   - PHP 7.4 or higher
   - Web server (Apache/Nginx) or PHP's built-in server

2. **Installation**
   ```bash
   # Clone the repository
   git clone https://github.com/aaronjalapon/Web_Scripting_JalaponAaron.git
   
   # Navigate to project directory
   cd Web_Scripting_JalaponAaron
   
   # Start PHP development server
   php -S localhost:8000
   ```

3. **Access the Application**
   - Open your web browser
   - Visit `http://localhost:8000`
   - You'll see the landing page with options to register or login

## Usage

1. **Registration**
   - Click "Register" on the landing page
   - Fill in all required fields
   - Submit the form
   - You'll receive a success message if registration is successful

2. **Login**
   - Click "Login" on the landing page
   - Enter your username and password
   - Submit the form
   - You'll be redirected to a welcome page upon successful login

3. **Logout**
   - Click the "Logout" button on the main page
   - You'll be redirected to the landing page

## Security Considerations
- Passwords are hashed using PHP's password_hash()
- Input validation on both client and server side
- Session-based authentication
- Protection against unauthorized access to protected pages

## File Permissions
Make sure the following files/directories are writable by the web server:
- `users.txt` (for storing user data)

## Contributing
Feel free to fork this repository and submit pull requests for any improvements.

## Credits
Created by Aaron Jalapon as part of Web Scripting coursework.

## License
This project is open-source and available under the MIT License.