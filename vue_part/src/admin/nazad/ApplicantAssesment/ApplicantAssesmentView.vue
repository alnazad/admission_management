<template>
    <div class="container">

        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <div style="border:3px solid;border-color:#514c4c82">
            <div style="display: flex; justify-content: space-between;">
                <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Assesment
                    List</a>
                <RouterLink :to="{ name: 'AddApplicantAssesment' }" class="btn"
                    style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
            </div>
            <div style="margin-top: 10px;color: blue;text-align: center;">
                <label for=""> Student ID
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
                    <th>A.Name</th>
                    <th>S.ID</th>
                    <th>Marks</th>
                    <th>Action</th>
                </tr>
                <tr style="border: 1px solid blue;" v-for="(data, k) in list" :key="k">
                    <td>{{ ++k }}</td>
                    <td>{{ data.institute_types.organization.name }}</td>
                    <td>{{ data.institute_types.name }}</td>
                    <td>{{ data.assesment_tools.institute.name }}</td>
                    <td>{{ data.student.class_name.name }}</td>
                    <td>{{ data.student.name }}</td>
                    <td>{{ data.student.id }}</td>
                    <td>{{ data.assesment_markes}}</td>
                    <td>
                        <a style="background: red;" class="btn btn-primary" href="">
                            <i class="fa-solid fa-pen-to-square" /></a>
                        <a style="background: red;margin-left: 5px;" class="btn btn-danger" href=""><i class="fa-solid fa-trash" /></a>
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
            url: 'http://localhost:8000/api/admin/applicant_assesments',
            list: [],

        }
    },
    methods: {
        getAssesment() {
            axios.get(this.url)
                .then((result) => {
                    this.list = result.data.data
                    console.log(result.data.data)
                });

        },
    },
    mounted() {
        this.getAssesment()
    }
}
</script>