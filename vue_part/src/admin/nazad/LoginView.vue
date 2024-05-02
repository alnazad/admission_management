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

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary"
                                style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign
                                in with google</button>
                            <button data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
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
            url: 'http://localhost:8000/api/login',
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
                    this.$router.push('/admin');
                }, (error) => {
                    console.log(error);
                });
        }
    }
};
</script>