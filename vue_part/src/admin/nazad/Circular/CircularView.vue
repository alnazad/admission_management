<template>
    <div class="container">

        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <div style="border:3px solid;border-color:#514c4c82">
            <div style="display: flex; justify-content: space-between;">
                <a class="btn" style="order: 1; background-color: #005b5b; color: white;font-weight: bold;">Circulation List</a>
                <RouterLink :to="{name:'addcirculation'}" class="btn" style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
            </div>
    <div style="margin-top: 10px;color: blue;text-align: center;">
        <label for=""> Circular Name
            <input type="text">
        </label>
    </div>
            <table class="table table-bordered border-primary">
                <tr style="background-color: #005b5b;color: white;">
                    <th>SL</th>
                    <th>Organization</th>
                    <th>I. Type</th>
                    <th>I. Name</th>
                    <th>Circular Name</th>
                    <th>Published Date</th>
                    <th>Last Date</th>
                    <th>Action</th>
                </tr>
                <tr v-for="(data, k) in list" :key="k">
                    <td>{{ ++k }}</td>
                    <td>{{ data.organization.name }}</td>
                    <td>{{ data.institute.institute_type.name }}</td>
                    <td>{{ data.institute.name }}</td>
                    <td>{{ data.circular_name }}</td>
                    <td>{{ data.circular_date }}</td>
                    <td>{{ data.last_date }}</td>
                    <td>
                        <a style="background: red;" class="btn btn-primary" href="">
                        <i class="fa-solid fa-pen-to-square"/></a>
                        <a style="background: red;margin-left: 5px;" class="btn btn-danger" @click="deleteCircular(data.id)"><i class="fa-solid fa-trash"/></a>
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
            url: 'http://localhost:8000/api/admin/admission_circulars',
            list: '',

        }
    },
    methods: {
        getCircular() {
            axios.get(this.url)
                .then((result) => {
                    this.list = result.data.data

                    console.log(result.data.data)

                });
        },
        update(id) {
            this.$router.push({ path: '/admin/paymentedit/' + id });
        },
        async deleteCircular(id) {
            try {
                await axios.delete(`${this.url}/${id}`);
                this.getCircular(); // Call getIncomeList after successful deletion
            } catch (error) {
                console.error("Error deleting User:", error);
                // Handle error as needed (show user message, etc.)
            }
        }

    },
    mounted() {
        this.getCircular()
    },
}
</script>
