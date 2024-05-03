<template>
    <div class="container">
        <div style="background-color:#005b5b;color: white;height: 50px;padding-top: 10px;padding-left: 10px; ">
            <h4>Add Applicant Assesment</h4>
        </div>
    </div>
    <div class="container">

        <div class="row" style="border: 1px solid green;color: blue;">
            <div class="col-6" style="margin-top:10px">
                <div>
                    <label style="text-align: right;" class="col-5">Organization name<span
                        style="color: red;">*</span></label>
                <select style="text-align: left;" class=" col-7" v-model="organization_id" @change="getInstituteType()">
                    <option>Select one</option>
                    <option v-for="(data, k) in listO" :value="data.id">{{ data.name }}</option>
                </select>
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Institute Name<span style="color: red;">*</span></label>
                <select style="text-align: left;" class=" col-7" v-model="institute_id" @change="getClass()"
                    :disabled="institute_types_id === ''">
                    <option value="">Select one</option>
                    <option v-for="(data, k) in listI" :value="data.id">{{ data.name }}</option>
                </select>
                </div>
                <div>
                    <label style="text-align: right; " class="col-5">Student ID</label>
                <input type="text" style="text-align: left;border: 1px solid green; " class=" col-7 ">
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Assesment Marks</label>
                <input type="text" style="text-align: left; " class=" col-7 " v-model="circular_date">
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
                    <label style="text-align: right;" class="col-5">Assesment Tools</label>
                    <select style="text-align: left;" class=" col-7" v-model="class_name_id"
                         :disabled="institute_id === ''">
                        <option value="">Select one</option>
                        <option v-for="(data, k) in listC" :value="data.id">{{ data.name }}</option>
                    </select>
                </div>
                <div>
                    <label style="text-align: right;" class="col-5">Student Name</label>
                <input type="text" style="text-align: left; " class=" col-7 " v-model="circular_name" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-2" style="text-align: right;vertical-align: middle;margin-left: 40px;">
                    <label >Remarks</label>
                </div>
                <div class="col-9" style="margin-left: -11px;" >
                    <textarea name="" id="" cols="100" rows="2"></textarea>
                </div>
                
                
            </div>
            <div class="text-right" style="margin: 20px 0px 20px;">
                <RouterLink :to="{ name: 'DisabilityAssesment' }" class="btn btn-danger" href="">Back</RouterLink><input
                    style="margin-left: 10px;" class="btn btn-primary" type="submit" value="Save">
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
            urlI: 'http://localhost:8000/api/admin/institutes',
            listO: [],
            listT: [],
            listI: [],
            listC: [],
            name: "",
            circular_name: '',
            upload_circular: '',
            circular_discription: '',
            circular_date: '',
            organization_id: "",
            institute_types_id: "",
            institute_id: "",
            class_name_id: "",
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
        getClass() {
            console.log(this.organization_id)
            axios.get(`http://localhost:8000/api/admin/class_names/create/?id=${this.institute_id}`)
                .then((result) => {
                    this.listC = result.data.data
                    console.log(result.data.data)
                });
        },
        save() {
            axios.post(this.url, {
                name: this.name,
            })
                .then((response) => {
                    this.$router.push('/admin/roles');
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