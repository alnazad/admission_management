<template>
    <div class="container">
        <div style="background-color:#005b5b;color: white;height: 50px;padding-top: 10px;padding-left: 10px; ">
            <h4>Add Online Admission</h4>
        </div>
    </div>
    <div class="container">
        <form v-on:submit.prevent="update">
            <div class="row" style="border: 1px solid green;color: blue;">
                <div class="col-6" style="margin-top:10px">
                    <div>
                        <label style="text-align: right; " class="col-5">Student ID</label>
                        <input type="text" style="text-align: left;border: 1px solid green; " class=" col-7 "
                            v-model="student_id" @input="getName()">
                    </div>
                    <div>
                        <label style="text-align: right; " class="col-5">Applicant's Name</label>
                        <input type="text" style="text-align: left;border: 1px solid green; " class=" col-7 "
                            v-model="applicant_name">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Mother's Name</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="mother_name">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Mobile</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="mobile">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Birth date</label>
                        <input type="date" style="text-align: left; " class=" col-7 " v-model="birth_date">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Sibling ID</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="siblings_id">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Email</label>
                        <input type="email" style="text-align: left; " class=" col-7 " v-model="email">
                    </div>
                </div>
                <div class="col-6" style="margin-top:10px">
                    <div>
                        <label style="text-align: right;" class="col-5">Father's Name</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="father_name">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Birth Certificate No</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="birth_certificate_no">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Gender</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="gender">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Address</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="address">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Nationality</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="nationality">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Religion</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="religion">
                    </div>



                </div>
                <div class="text-right" style="margin: 20px 0px 20px;">
                    <RouterLink :to="{ name: 'StudentRegistration' }" class="btn btn-danger" href="">Back</RouterLink>
                    <input style="margin-left: 10px;" class="btn btn-primary" type="submit" value="Save">
                </div>
            </div>
        </form>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            url: 'https://admission.devnazad.com/laravel_part/api/admin/students',
            
            list: [],
            student_id: "",
            institute_type_id: '',
            institute_id: '',
            applicant_name: '',
            father_name: "",
            birth_date: "",
            gender: "",
            mother_name: "",
            class_name_id: "",
            birth_certificate_no: "",
            mobile: "",
            address: "",
            nationality: "",
            religion: "",
            siblings_id: "",
            email: "",
            class_name_id: "",
            id: 1

        }
    },
    methods: {
        getName() {
            console.log(this.student_id)
            if (this.student_id !== '') {
                axios.get(`https://admission.devnazad.com/laravel_part/api/admin/students/create/?id=${this.student_id}`)
                    .then((result) => {

                        if (result.data.data.length !== 0) {
                            this.list = result.data.data[0]
                            this.gender = result.data.data[0].gender
                            this.birth_date = result.data.data[0].birth_date
                            this.address = result.data.data[0].address
                            this.mobile = result.data.data[0].mobile
                            this.birth_certificate_no = result.data.data[0].birth_certificate_no
                            this.mother_name = result.data.data[0].mother_name
                            this.father_name = result.data.data[0].father_name
                            this.applicant_name = result.data.data[0].name
                            this.class_name_id = result.data.data[0].class_name_id
                            console.log(result.data.data[0])
                        } else {
                            this.list = 'data not found'
                        }
                        // console.log(result.data.data[0].name)
                    }, (error) => {
                        console.log("ok");
                    });

            }
        },
        update() {
            axios.put(`${this.url}/${this.student_id}`, {
                organization_id: this.organization_id,
                institute_type_id: this.institute_type_id,
                institute_id: this.institute_id,
                applicant_name: this.applicant_name,
                father_name: this.father_name,
                mother_name: this.mother_name,
                class_name_id: this.class_name_id,
                birth_certificate_no: this.birth_certificate_no,
                mobile: this.mobile,
                address: this.address,
                birth_date: this.birth_date,
                gender: this.gender,
                email: this.email,
                siblings_id: this.siblings_id,
                religion: this.religion,
                nationality: this.nationality,
                class_name_id: this.class_name_id,
            })
                .then((response) => {
                    this.$router.push('/StudentRegistration');
                }, (error) => {
                    console.log(error);
                });

        },

    },
}
</script>