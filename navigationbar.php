<style>
/* General reset for the header */
.header {
    position: absolute;
    top: 0;
    width: 100%;
    background-color: #000; /* Black background */
    color: #fff; /* White text color */
    padding: 10px 0;
    z-index: 1000; /* Keeps the header on top */
}

/* Navigation styling */
.header-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px; /* Optional: Set a max width */
    margin: auto; /* Center the nav */
    padding: 0 20px; /* Padding to give some space on the sides */
}

/* Logo styling */
.header-navigation .logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff; /* White logo color */
}

/* Logo red span styling */
.header-navigation .logo .red {
    color: red; /* Red color for logo */
}

/* Unordered list styles */
.header-navigation ul {
    list-style: none; /* Remove default bullet points */
    display: flex; /* Display items in a line */
    margin: 0;
    padding: 0;
}

/* List item styles */
.header-navigation ul li {
    margin-left: 20px; /* Space between menu items */
}

/* Link styles */
.header-navigation ul li a {
    text-decoration: none; /* Remove underline */
    color: #fff; /* White link color */
    padding: 5px 10px; /* Padding around links */
    transition: background-color 0.3s; /* Smooth transition */
}

/* Hover effect for links */
.header-navigation ul li a:hover {
    background-color: #444; /* Darker background on hover */
    border-radius: 5px; /* Rounded corners */
}

/* Prevent external styles from affecting the header */
header * {
    box-sizing: border-box; /* Ensure padding is included in width/height */
}
</style>
<header class="header" id="home">
    <div class="container">
        <nav class="header-navigation" aria-label="navigation">
            <div class="logo"><span class="red">F</span>GYM</div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="plans.php">Plans</a></li>
                <li><a href="workoutquestions.php">Workout</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="notification.php">Notification</a></li>
            </ul>
        </nav>
    </div>
</header>
