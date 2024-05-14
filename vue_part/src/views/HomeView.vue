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
            <h2>New Admission Circular</h2>
            <ul>
                <div style="border: 2px solid black;" class="container">
                    <div class="row">
                        <div>
                            Admission Circular for Disability School has been published.All Disability student have to
                            go their
                            desire school for online application.
                        </div>
                        <div>
                            <h6>
                                Circular Name : <h5>{{ list.circular_name }}</h5>
                                Circular Description : <h5>{{ list.circular_discription}}</h5>
                                <!-- School Name: <h5>{{ list.institute.name }}</h5> -->
                                Published Date: <h5>{{ list.circular_date }}</h5>
                                Last Date: <h5>{{ list.last_date }}</h5>

                            </h6>
                        </div>

                        <div>There will no chance to apply after last date</div>
                    </div>

                </div>
            </ul>

            <h2>Latest Programs</h2>
            <p>Check out our latest programs aimed at addressing pressing social issues and improving the well-being of
                all citizens.</p>

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
<script>
import axios from 'axios';
export default {
    data() {
        return {
            url: 'http://localhost:8000/api/admin/admission_circulars',
            list: '',

        }
    },
    methods: {
        getCircular() {
            axios.get(this.url)
                .then((result) => {
                    this.list = result.data.data[0]

                    console.log(result.data.data[0])

                });
        }

    },
    mounted() {
        this.getCircular()
    },
}
</script>
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
