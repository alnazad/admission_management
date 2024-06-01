<template>

    <body>
        <header>
            <h1>Welcome to Ministry of Social Welfare, Bangladesh</h1>
        </header>

        <nav class="nava">
            <RouterLink :to="{ name: 'login' }" class="btn"
                    style="order: 2; background-color:red; color: white;font-weight: bold;">Login</RouterLink>
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

            <h2>Contact Us</h2>
            <h5>Just login to see full admission process</h5>
            <h5>If do not understand any thing fell free to contract me</h5>
            <h5>Email: abdullahalnazad850@gmail.com</h5>
            <h5>Phone: +8801580331370</h5>
        </div>

        <footer>
            &copy; 2024 devnazad.com, Bangladesh. All rights reserved.
        </footer>
    </body>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            url: 'https://admission.devnazad.com/laravel_part/api/admin/admission_circulars',
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
