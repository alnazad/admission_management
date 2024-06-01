<template>
    <div class="container">

        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <div style="border:3px solid;border-color:#514c4c82">
            <div style="display: flex; justify-content: space-between;">
                <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Final Student List</a>
            </div>
            <div style="margin-top: 10px;color: blue;text-align: center;">
                <label for=""> Student ID
                    <input type="text">
                </label>
            </div>
            <table class="table table-bordered border-primary">
                <tr style="background-color: #005b5b;color: white;">
                    <th>SL</th>
                    <th>I.Name</th>
                    <th>Class</th>
                    <th>Student ID</th>
                    <th>A.Name</th>
                    <th>Father name</th>
                    <th>Mobile</th>
                </tr>
                <tr style="border: 1px solid blue;" v-for="(data, k) in list" :key="k">
                    <td>{{ ++k }}</td>
                    <td>{{ data.institute.name }}</td>
                    <td>{{ data.student.class_name.name }}</td>
                    <td>{{ data.student.id }}</td>
                    <td>{{ data.student.name }}</td>
                    <td>{{ data.student.father_name}}</td>
                    <td>{{ data.student.mobile}}</td>
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
            url: 'https://admission.devnazad.com/laravel_part/api/admin/admission_fees',
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