<template>
  <div class="container">
        <h1 style="text-align: center;">Circular List</h1>
        <!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>category</th>
                <th>Date</th>
                <th>Employee Name</th>
                <th>Amount</th>
                <th>Details</th>
                <th>Income Source</th>
                <th>Action</th>
            </tr>
            <!-- <tr v-for="(data, k) in list" :key="k">
                <td>{{++k}}</td>
                <td>{{ data.income_category.name }}</td>
                <td>{{ data.date }}</td>
                <td>{{ data.employee.people.name }}</td>
                <td>{{ data.amount }}</td>
                <td>{{ data.details }}</td>
                <td>{{ data.income_source.name}}</td>
                <td>
                    <div><button class="btn btn-success" @click="update(data.id)">Edit</button>
                        <button class="btn btn-danger" @click="deleteIncome(data.id)">Delete</button>
                    </div>
                </td>
            </tr> -->
        </table>
    </div>
</template>
<!-- <script>
import axios from 'axios';
import { RouterLink } from 'vue-router';
export default {
    data() {
        return {
            test: "<h1>Income table</h1>",
            url: 'http://127.0.0.1:8000/api/nazad/incomes',
            list: [],
            category_id: "",
            date: "",
            employee_id: "",
            amount: "",
            details: "",
            income_source_id: "",
            id: '',
            msg: ''

        }
    },
    methods: {
        // Show Income------------------
        getIncomeList() {
            axios.get(this.url)
                .then((result) => {
                    this.list = result.data.data.income
                    // console.log(result.data.data)

                    // console.log(result.data.data.employee)

                });
        },
        //add income----------------------
        save() {
            axios.post(this.url, {
                category_id: this.category_id,
                date: this.date,
                employee_id: this.employee_id,
                amount: this.amount,
                details: this.details,
                income_source_id: this.income_source_id


            })
                .then((response) => {
                    console.log(response);
                    this.getIncomeList()
                    this.category_id = "",
                        this.date = "",
                        this.employee_id = "",
                        this.amount = "",
                        this.details = "",
                        this.income_source_id = ""
                }, (error) => {
                    console.log(error);
                });

        },
        // Edit Request ----------------------------
        update(id) {
            // const response = await fetch(`${this.url}/${id}/edit`, {
            //     method: "GET",
            //     headers: {
            //         "Content-Type": "application/json",
            //     }
            // });
            // const result = await response.json();
            // data = result.data
            // this.category_id = data.category_id
            // this.date = data.date
            // this.employee_id = data.employee_id
            // this.amount = data.amount
            // this.details = data.details
            // this.income_source_id = data.income_source_id
            // this.id = id
            this.$router.push({path: '/income/edit/' +id});

            // axios.get(`${this.url}/${id}/edit`)
            //     .then((response) => {
            //         let data = response.data.data
            //         this.$router.push({path: '/income/edit/' + data.id});

            //     }, (error) => {
            //         console.log(error);
            //     });
            // console.log(result.data)
        },
        //Update request ----------------------------
        async updateIncome() {
            axios.put(`${this.url}/${this.id}`, {
                category_id: this.category_id,
                date: this.date,
                employee_id: this.employee_id,
                amount: this.amount,
                details: this.details,
                income_source_id: this.income_source_id


            })
                .then((response) => {
                    // console.log(response);
                    this.getIncomeList()
                    this.category_id = "",
                        this.date = "",
                        this.employee_id = "",
                        this.amount = "",
                        this.details = "",
                        this.income_source_id = ""
                }, (error) => {
                    console.log(error);
                });
        },
        async deleteIncome(id) {
            try {
                await axios.delete(`${this.url}/${id}`);
                this.getIncomeList(); // Call getIncomeList after successful deletion
            } catch (error) {
                console.error("Error deleting income:", error);
                // Handle error as needed (show user message, etc.)
            }
        }
    },
    mounted() {
        this.getIncomeList()
    },
    watch: {

    },
    computed: {

    }
}
</script> -->

