# LOCAL BETTING SYSTEM

## 📌 Project Overview
**EXPECT BETTING** is a PHP & MySQL–based web betting system developed **solo** as a backend-focused project.  
The system allows users to place **single and multiple bets**, while administrators manage results, permissions, and system income through a dedicated admin panel.

This project demonstrates real-world concepts such as authentication, role-based access control, database-driven workflows, and admin management.

---

## 🚀 Features

### 👤 User Features
- User login system
- Place **individual (single)** bets
- Place **multiple (combined)** bets
- Bet confirmation before submission
- View betting results
- Session-based access control

### 🛠 Admin Features
- Admin dashboard
- Manage admin accounts
- Permission management
- Declare **win / lose** results
- View system income
- Edit or remove submitted bets
- Reset system data (bets, results, sessions)

---

## 🧱 System Architecture

EXPECT BETTING/
│
├── Betting/ # User-side application
│ ├── index.php # Entry point
│ ├── login.php # User login
│ ├── Main.php # User dashboard
│ ├── chooser.php # Bet selection
│ ├── confirm.php # Bet confirmation
│ ├── Indv.php # Single betting logic
│ ├── mult.php # Multiple betting logic
│ ├── results.php # Display results
│ ├── error.php # Error handling
│ └── assets (images) # UI images
│
├── Betting Special/ # Admin panel
│ ├── index.php # Admin login
│ ├── main.php # Admin dashboard
│ ├── manage_admin.php # Admin management
│ ├── perm.php # Permissions
│ ├── Win.php # Winning bets
│ ├── Lose.php # Losing bets
│ ├── income.php # Income tracking
│ ├── rst*.php # System reset scripts
│ └── rmv.php # Record removal
│
└── betting.sql # Database structure & data


---

## 🗄 Database
- Database: **MySQL**
- File provided: `betting.sql`
- Contains:
  - User tables
  - Betting records
  - Admin & permission data
  - Results and income records

---

## ⚙️ Installation & Setup

### Requirements
- XAMPP / WAMP / LAMP
- PHP **7.3.3 or higher**
- MySQL
- Web browser

### Steps

1. Clone or download this repository
2. Move the project folder to:
htdocs/ (for XAMPP)

3. Start **Apache** and **MySQL** from XAMPP
4. Open **phpMyAdmin**
5. Create a database (e.g. `betting`)
6. Import `betting.sql`
7. Open the project in browser:
http://localhost/EXPECT BETTING/Betting/


### Admin Panel
http://localhost/EXPECT BETTING/Betting Special/


(Default admin credentials depend on the SQL file.)

---

## 🧪 Technologies Used
- **PHP** – backend logic
- **MySQL** – database
- **HTML / CSS** – frontend
- **Sessions** – authentication
- **XAMPP** – local server environment

---

## 🎯 Concepts Demonstrated
- Authentication & authorization
- Role-based access control
- Database CRUD operations
- Real-world betting workflow
- Admin panel design
- PHP session management

---

## ⚠️ Notes & Limitations
- Passwords may not be hashed (educational project)
- No advanced security hardening
- UI is functional but minimal
- Intended for **learning and demonstration purposes**

---

## 📚 Future Improvements
- Password hashing (`password_hash`)
- Prepared SQL statements (PDO / MySQLi)
- Improved UI/UX
- Input validation & CSRF protection
- API-based structure

---

## 👨‍💻 Author
**Built solo by:** *[Your Name]*  
**Role:** Backend / Full-stack Student Developer  

---

## 📜 License
This project is for **educational purposes only**.  
Not intended for real-money or commercial betting use.
