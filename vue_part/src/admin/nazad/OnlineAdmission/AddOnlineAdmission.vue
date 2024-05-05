<template>
    <div class="container">
        <div style="background-color:#005b5b;color: white;height: 50px;padding-top: 10px;padding-left: 10px; ">
            <h4>Add Online Admission</h4>
        </div>
    </div>
    <div class="container">
        <form v-on:submit.prevent="save">
        <div class="row" style="border: 1px solid green;color: blue;">
                <div class="col-6" style="margin-top:10px">
                    <div>
                        <label style="text-align: right;" class="col-5">Organization name<span
                                style="color: red;">*</span></label>
                        <select style="text-align: left;" class=" col-7" v-model="organization_id"
                            @change="getInstituteType()">
                            <option>Select one</option>
                            <option v-for="(data, k) in listO" :value="data.id">{{ data.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Institute Name<span
                                style="color: red;">*</span></label>
                        <select style="text-align: left;" class=" col-7" v-model="institute_id" @change="getClass()"
                            :disabled="institute_type_id === ''">
                            <option value="">Select one</option>
                            <option v-for="(data, k) in listI" :value="data.id">{{ data.name }}</option>
                        </select>
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
                </div>
                <div class="col-6" style="margin-top:10px">
                    <div>
                        <label style="text-align: right;" class="col-5">Institution Type <span
                                style="color: red;">*</span></label>
                        <select style="text-align: left;" class=" col-7" v-model="institute_type_id"
                            @change="getInstitute()" :disabled="organization_id === ''">
                            <option value="">Select one</option>
                            <option v-for="(data, k) in listT" :value="data.id">{{ data.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Class</label>
                        <select style="text-align: left;" class=" col-7" v-model="class_name_id"
                            :disabled="institute_id === ''">
                            <option value="">Select one</option>
                            <option v-for="(data, k) in listC" :value="data.id">{{ data.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Father's Name</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="father_name">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Birth Certificate No</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="birth_certificate_no">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Address</label>
                        <input type="text" style="text-align: left;" class=" col-7 " v-model="address">
                    </div>



                </div>
                <div class="text-right" style="margin: 20px 0px 20px;">
                    <RouterLink :to="{ name: 'OnlineAdmission' }" class="btn btn-danger" href="">Back</RouterLink><input
                        style="margin-left: 10px;" class="btn btn-primary" type="submit" value="Save">
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
            urlO: 'http://localhost:8000/api/admin/organizations',
            urlI: 'http://localhost:8000/api/admin/institutes',
            url: 'http://localhost:8000/api/admin/online_admissions',
            listO: [],
            listT: [],
            listI: [],
            listC: [],
            name: "",
            organization_id: '',
            institute_type_id: '',
            institute_id: '',
            applicant_name: '',
            father_name: "",
            mother_name: "",
            class_name_id: "",
            birth_certificate_no: "",
            mobile: "",
            address: "",
            id: 1

        }
    },
    methods: {
        getOrganization() {
            axios.get(this.urlO)
                .then((result) => {
                    this.listO = result.data.data
                    // console.log(result.data.data)
                });

        },
        getInstituteType() {
            // console.log(this.organization_id)
            axios.get(`http://localhost:8000/api/admin/institute_types/create/?id=${this.organization_id}`)
                .then((result) => {
                    this.listT = result.data.data
                    // console.log(result.data.data)
                });
        },
        getInstitute() {
            // console.log(this.institute_type_id)
            axios.get(`http://localhost:8000/api/admin/institutes/create/?id=${this.institute_type_id}`)
                .then((result) => {
                    this.listI = result.data.data
                    // console.log(result.data.data)
                });
        },
        getClass() {
            axios.get(`http://localhost:8000/api/admin/class_names/create/?id=${this.institute_id}`)
                .then((result) => {
                    this.listC = result.data.data
                    console.log(result.data.data)
                });
        },
        save() {
            axios.post(this.url, {
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
            })
                .then((response) => {
                    this.$router.push('/admin/OnlineAdmission');
                }, (error) => {
                    console.log(error);
                });

        },

    },
    mounted() {
        this.getOrganization()
    }
}
</script>