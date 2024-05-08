
<template>
<body>
    <header>
        <h1>Welcome to Ministry of Social Welfare, Bangladesh</h1>
    </header>

    <nav class="nava">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Services</a>
        <a href="#">Programs</a>
        <a href="#">Contact</a>
        <a href="login">Login</a>
    </nav>

    <div class="containera">
        <h2>About Us</h2>
        <p>The Ministry of Social Welfare is dedicated to improving the quality of life for all citizens of Bangladesh, with a special focus on vulnerable populations. We work to create social safety nets, promote social inclusion, and protect the rights of disadvantaged groups.</p>

        <h2>Our Services</h2>
        <ul>
            <li>Financial assistance for the elderly and disabled</li>
            <li>Support for orphaned children</li>
            <li>Community development programs</li>
            <li>Disaster relief and rehabilitation</li>
            <li>Skills training and employment opportunities</li>
        </ul>

        <h2>Latest Programs</h2>
        <p>Check out our latest programs aimed at addressing pressing social issues and improving the well-being of all citizens.</p>

        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to contact us:</p>
        <p>Email: info@socialwelfare.gov.bd</p>
        <p>Phone: +880 2 12345678</p>
    </div>

    <footer>
        &copy; 2024 Ministry of Social Welfare, Bangladesh. All rights reserved.
    </footer>
</body>
</template>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #004274;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .nava {
            background-color: #005691;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .nava a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }
        .nava a:hover {
            text-decoration: underline;
        }
        .containera {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #004274;
            text-align: center;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        footer {
            background-color: #004274;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
