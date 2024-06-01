<template>
    <section style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>
                            <form v-on:submit.prevent="login">
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" v-model="email" class="form-control form-control-lg"
                                        placeholder="email" />
                                </div>
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" v-model="password" class="form-control form-control-lg"
                                        placeholder="password" />

                                </div>
                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>
                            <hr class="my-4">
                            <div style="color: blue;">
                                <div class="h6"><span>Email : </span>  <span style="color: red;">abdullah@gmail.com</span> </div>
                            <div class="h6" style="margin-left: -90px;"><span>Password :</span><span style="color: red;">&nbsp; 12345</span> </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            url: 'https://admission.devnazad.com/laravel_part/api/login',
            email: '',
            password: '',
            rememberPassword: false
        };
    },
    methods: {
        login() {
            axios.post(this.url, {
                     email:this.email,
                     password:this.password
            })
                .then((response) => {
                    this.$router.push('/AdmissionManagement');
                }, (error) => {
                    console.log(error);
                });
        }
    }
};
</script>