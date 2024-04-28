<script setup>
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue'
import Footer from './Footer.vue';
</script>
<template>

    <body>
        <div class="container-scroller">

            <!-- NavBar -->
                <Navbar />
            <!-- NavBar -->

            <div class="container-fluid page-body-wrapper">

                <!-- Sidebar -->
                    <Sidebar />
                <!-- Sidebar -->

                <div class="main-panel">

                    <!-- Content -->
                    <router-view />

                    <!-- Content -->


                    <!-- Footer -->
                    <Footer/>
                    <!-- Footer -->



                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    </body>

</template>