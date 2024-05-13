<template>
    <div class="container">
        <div style="background-color:#005b5b;color: white;height: 50px;padding-top: 10px;padding-left: 10px; ">
            <h4>Add Admission Circulation</h4>
        </div>
    </div>
    <div class="container">

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
                    <select style="text-align: left;" class=" col-7" v-model="institute_id"
                        :disabled="institute_types_id === ''">
                        <option value="">Select one</option>
                        <option v-for="(data, k) in listI" :value="data.id">{{ data.name }}</option>
                    </select>
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Published Date<span
                            style="color: red;">*</span></label>
                    <input type="date" style="text-align: left; " class=" col-7 " v-model="circular_date">
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Circular Description<span
                            style="color: red;">*</span></label>
                    <input type="text" style="text-align: left;" class=" col-7 " v-model="circular_discription">
                </div>
            </div>
            <div class="col-6" style="margin-top:10px">
                <div>
                    <label style="text-align: right;" class="col-5">Institution Type <span
                            style="color: red;">*</span></label>
                    <select style="text-align: left;" class=" col-7" v-model="institute_types_id"
                        @change="getInstitute()" :disabled="organization_id === ''">
                        <option value="">Select one</option>
                        <option v-for="(data, k) in listT" :value="data.id">{{ data.name }}</option>
                    </select>
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Circular Name<span
                            style="color: red;">*</span></label>
                    <input type="text" style="text-align: left; " class=" col-7 " v-model="circular_name">
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Last Date<span
                            style="color: red;">*</span></label>
                    <input type="date" style="text-align: left; " class=" col-7 " v-model="last_date">
                </div>
            </div>
            <div class="text-right" style="margin: 20px 0px 20px;">
                <RouterLink :to="{ name: 'circulation' }" class="btn btn-danger" href="">Back</RouterLink><input
                    style="margin-left: 10px;" class="btn btn-primary" type="submit" value="Save" @click="save">
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            urlO: 'http://localhost:8000/api/admin/organizations',
            url: 'http://localhost:8000/api/admin/admission_circulars',
            listO: [],
            listT: [],
            listI: [],
            name: "",
            circular_name: '',
            circular_discription: '',
            circular_date: '',
            organization_id: "",
            institute_types_id: "",
            institute_id: "",
            last_date: "",
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
            console.log(this.organization_id)
            axios.get(`http://localhost:8000/api/admin/institute_types/create/?id=${this.organization_id}`)
                .then((result) => {
                    this.listT = result.data.data
                    // console.log(result.data.data)
                });
        },
        getInstitute() {
            console.log(this.organization_id)
            axios.get(`http://localhost:8000/api/admin/institutes/create/?id=${this.institute_types_id}`)
                .then((result) => {
                    this.listI = result.data.data
                    console.log(result.data.data)
                });
        },
        handleFileUpload(event) {
            this.image = event.target.files[0];
        },
        save() {
            axios.post(this.url, {
                circular_name: this.circular_name,
                circular_discription: this.circular_discription,
                circular_date: this.circular_date,
                last_date: this.last_date,
                organization_id: this.organization_id,
                institute_id: this.institute_id,
            })
                .then((response) => {
                    this.$router.push('/admin/circulation');
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
