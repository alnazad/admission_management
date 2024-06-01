<template>
    <div class="container">

<!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
<div style="border:3px solid;border-color:#514c4c82">
    <div style="display: flex; justify-content: space-between;">
        <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Disability Assesment List</a>
        <RouterLink :to="{name:'AddDisabilityAssesment'}" class="btn" style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
    </div>
    <div style="margin-top: 10px;color: blue;text-align: center;">
        <label for="">Name
            <input type="text">
        </label>
    </div>
    <table  class="table table-bordered border-primary">
        <tr style="background-color: #005b5b;color: white;">
            <th>SL</th>
            <th>Disability Assesment Tools Name</th>
            <th>Institute Name</th>
            <th>Action</th>
        </tr>
        <tr style="border: 1px solid blue;" v-for="(data, k) in list" :key="k">
            <td>{{++k}}</td>
            <td>{{ data.name }}</td>
            <td>{{ data.institute.name }}</td>
            <td>
                <button style="background: red;" @click="update(data.id)">
                <i class="fa-solid fa-pen-to-square"/></button>
                <button style="background: red;" @click="deleteAssesment(data.id)"><i class="fa-solid fa-trash"/></button>
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
            url: 'https://admission.devnazad.com/laravel_part/api/admin/assesment_tools',
            list: '',

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

        update(id) {
            this.$router.push({ path: '/admin/paymentedit/' + id });
        },
        async deleteAssesment(id) {
            try {
                await axios.delete(`${this.url}/${id}`);
                this.getAssesment(); // Call getIncomeList after successful deletion
            } catch (error) {
                console.error("Error deleting User:", error);
                
            }
        }

    },
    mounted() {
        this.getAssesment()
    },
}
</script>