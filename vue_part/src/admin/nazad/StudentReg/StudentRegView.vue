<template>
    <div class="container">

        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <div style="border:3px solid;border-color:#514c4c82">
            <div style="display: flex; justify-content: space-between;">
                <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Student Registration List</a>
                <RouterLink :to="{name:'AddStudentRegistration'}" class="btn" style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
            </div>
            <div style="margin-top: 10px;color: blue;text-align: center;">
                <label for=""> Student ID
                    <input type="text">
                </label>
            </div>
            <table class="table table-bordered border-primary">
                <tr style="background-color: #005b5b;color: white;">
                    <th>SL</th>
                    <!-- <th>I.Name</th> -->
                    <th>Class</th>
                    <th>Student ID</th>
                    <th>A.Name</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Father name</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
                <tr style="border: 1px solid blue;" v-for="(data, k) in list" :key="k">
                    <td>{{ ++k }}</td>
                    <!-- <td>{{ data.institute.name }}</td> -->
                    <td>{{ data.class_name.name }}</td>
                    <td>{{ data.id }}</td>
                    <td>{{ data.name }}</td>
                    <td>{{ data.gender }}</td>
                    <td>{{ data.religion }}</td>
                    <td>{{ data.father_name}}</td>
                    <td>{{ data.mobile}}</td>
                    <td>
                        <a style="background: red;" class="btn btn-primary" href="">
                            <i class="fa-solid fa-pen-to-square" /></a>
                        <a style="background: red;margin-left: 5px;" class="btn btn-danger" @click="deleteRegistration(data.id)"><i class="fa-solid fa-trash" /></a>
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
            url: 'https://admission.devnazad.com/laravel_part/api/admin/students',
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
        async deleteRegistration(id) {
            try {
                await axios.delete(`${this.url}/${id}`);
                this.getAssesment(); // Call getIncomeList after successful deletion
            } catch (error) {
                console.error("Error deleting User:", error);
                // Handle error as needed (show user message, etc.)
            }
        }
    },
    mounted() {
        this.getAssesment()
    }
}
</script>