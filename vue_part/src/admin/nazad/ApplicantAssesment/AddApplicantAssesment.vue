<template>
    <div class="container">
        <div style="background-color:#005b5b;color: white;height: 50px;padding-top: 10px;padding-left: 10px; ">
            <h4>Add Applicant Assesment</h4>
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
                        <select style="text-align: left;" class=" col-7" v-model="institute_id" @change="getAssesment()"
                            :disabled="institute_types_id === ''">
                            <option value="">Select one</option>
                            <option v-for="(data, k) in listI" :value="data.id">{{ data.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right; " class="col-5">Student ID</label>
                        <input type="text" style="text-align: left;border: 1px solid green; " class=" col-7 "
                            v-model="student_id" @input="getName()">
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Assesment Marks</label>
                        <input type="text" style="text-align: left; " class=" col-7 " v-model="assesment_markes">
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
                        <select style="text-align: left;" class=" col-7" v-model="assesment_tools_id"
                            :disabled="institute_id === ''">
                            <option value="">Select one</option>
                            <option v-for="(data, k) in listC" :value="data.id">{{ data.name }}</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right;" class="col-5">Student Name</label>
                        <input type="text" style="text-align: left; " class=" col-7 "
                            v-if="listS || listS.name !== undefined" :value="listS.name || ''" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2" style="text-align: right;vertical-align: middle;margin-left: 40px;">
                        <label>Remarks</label>
                    </div>
                    <div class="col-9" style="margin-left: -11px;">
                        <textarea v-model="remarks" name="" id="" cols="100" rows="2"></textarea>
                    </div>


                </div>
                <div class="text-right" style="margin: 20px 0px 20px;">
                    <RouterLink :to="{ name: 'ApplicantAssesment' }" class="btn btn-danger" href="">Back</RouterLink>
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
            url: 'https://admission.devnazad.com/laravel_part/api/admin/applicant_assesments',
            urlO: 'https://admission.devnazad.com/laravel_part/api/admin/organizations',
            urlI: 'https://admission.devnazad.com/laravel_part/api/admin/institutes',
            urlI: 'https://admission.devnazad.com/laravel_part/api/admin/students',
            listO: [],
            listT: [],
            listI: [],
            listC: [],
            listS: [],
            name: "",
            institute_types_id: "",
            organization_id: "",
            institute_id: "",
            assesment_tools_id: "",
            student_id: "",
            remarks: "",
            assesment_markes: "",
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
            axios.get(`https://admission.devnazad.com/laravel_part/api/admin/institute_types/create/?id=${this.organization_id}`)
                .then((result) => {
                    this.listT = result.data.data
                    // console.log(result.data.data)
                });
        },
        getInstitute() {
            // console.log(this.organization_id)
            axios.get(`https://admission.devnazad.com/laravel_part/api/admin/institutes/create/?id=${this.institute_types_id}`)
                .then((result) => {
                    this.listI = result.data.data
                    console.log(result.data.data)
                });
        },
        getAssesment() {
            // console.log(this.organization_id)
            axios.get(`https://admission.devnazad.com/laravel_part/api/admin/assesment_tools/create/?id=${this.institute_id}`)
                .then((result) => {
                    this.listC = result.data.data
                    // console.log(result.data.data)
                });
        },
        getName() {
            // console.log(this.student_id)
            if (this.student_id !== '') {
                axios.get(`https://admission.devnazad.com/laravel_part/api/admin/students/create/?id=${this.student_id}`)
                    .then((result) => {

                        if (result.data.data.length !== 0) {
                            this.listS = result.data.data[0]
                            // console.log(result)
                        } else {
                            this.listS = 'data not found'
                        }
                        // console.log(result.data.data[0].name)
                    }, (error) => {
                        console.log("ok");
                    });

            }
        },
        save() {
            axios.post(this.url, {
                assesment_markes: this.assesment_markes,
                remarks: this.remarks,
                student_id: this.student_id,
                institute_types_id:this.institute_types_id,
                assesment_tools_id:this.assesment_tools_id,
            })
                .then((response) => {
                    this.$router.push('/ApplicantAssesment');
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