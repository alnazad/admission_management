<template>
    <div class="container">

        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <div style="border:3px solid;border-color:#514c4c82">
            <div style="display: flex; justify-content: space-between;">
                <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Admission
                    List</a>
                <RouterLink :to="{ name: 'AddOnlineAdmission' }" class="btn"
                    style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
            </div>
            <div style="margin-top: 10px;color: blue;text-align: center;">
                <label for=""> Mobile
                    <input type="text">
                </label>
            </div>
            <table class="table table-bordered border-primary">
                <tr style="background-color: #005b5b;color: white;">
                    <th>SL</th>
                    <th>Organization</th>
                    <th>I.Type</th>
                    <th>I.Name</th>
                    <th>Class</th>
                    <th>A.ID</th>
                    <th>A.Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <tr style="border: 1px solid blue;" v-for="(data, k) in list" :key="k">
                    <td>{{++k }}</td>
                    <td>{{ data.organization.name }}</td>
                    <td>{{ data.institute.institute_type.name }}</td>
                    <td>{{ data.institute.name }}</td>
                    <td>{{ data.student.class_name.name }}</td>
                    <td>{{ data.student.id }}</td>
                    <td>{{ data.student.name }}</td>
                    <td>{{ data.student.mobile }}</td>
                    <td>{{ data.student.address }}</td>
                    <td>
                        <button style="background: red;" @click="update(data.id)">
                            <i class="fa-solid fa-pen-to-square" /></button>
                        <button style="background: red;margin-left: 5px;" @click="deleteOnlineAdmission(data.id)"><i
                                class="fa-solid fa-trash" /></button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            url: 'http://localhost:8000/api/admin/online_admissions',
            urlI: 'http://localhost:8000/api/admin/institute_types',
            urlC: 'http://localhost:8000/api/admin/class_names',
            urlD: 'http://localhost:8000/api/admin/institutes',
            list: '',
            listi: [],
            listc: [],
            listD: [],

        }
    },
    methods: {
        getOnlineAdmission() {
            axios.get(this.url)
                .then((result) => {
                    this.list = result.data.data

                    console.log(result.data.data)

                });
        },
//--------------------------Institute Type Start--------------------------------------------------------------------
        fetchInstituteTypes() {
            axios.get(this.urlI)
                .then((result) => {
                    this.listi = result.data.data
                });
        },
        getInstituteTypeName(typeId) {
            
            const instituteType = this.listi.find(type => type.id === typeId);
            return instituteType ? instituteType.name : '';

        },
//-----------------------------Institute Type End----------------------------------------------------------------------------------
        fetchInstitutename() {
            axios.get(this.urlD)
                .then((result) => {
                    this.listD = result.data.data
                    // console.log(result.data.data)
                });
        },
        getInstitutename(typeId) {  
            const instituteType = this.listD.find(type => type.id === typeId);
            return instituteType ? instituteType.name : '';
        },
//-----------------------------Institute Name End-------------------------------------------------------------------
        fetchClassname() {
            axios.get(this.urlC)
                .then((result) => {
                    this.listc = result.data.data
                    // console.log(result.data.data)
                });
        },
        getClassname(typeId) {
            
            const instituteType = this.listc.find(type => type.id === typeId);
            return instituteType ? instituteType.name : '';
        },
//-----------------------------Class name End-------------------------------------------------------------------
        update(id) {
            this.$router.push({ path: '/admin/paymentedit/' + id });
        },
        async deleteOnlineAdmission(id) {
            try {
                await axios.delete(`${this.url}/${id}`);
                this.getOnlineAdmission(); // Call getIncomeList after successful deletion
            } catch (error) {
                console.error("Error deleting User:", error);
                // Handle error as needed (show user message, etc.)
            }
        }

    },
    mounted() {
        this.getOnlineAdmission()
        this.fetchInstituteTypes()
        this.fetchClassname()
        this.fetchInstitutename()
    },
}
</script>