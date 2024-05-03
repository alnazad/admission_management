<template>
    <div class="container">

<!-- <div><RouterLink class="btn btn-primary" to="">Add Income</RouterLink></div> -->
<div style="border:3px solid;border-color:#514c4c82">
    <div style="display: flex; justify-content: space-between;">
        <a class="btn" style="border: 1; background-color: #005b5b; color: white;font-weight: bold;">Admission List</a>
        <RouterLink :to="{name:'AddOnlineAdmission'}" class="btn" style="order: 2; background-color: #005b5b; color: white;font-weight: bold;">Add New</RouterLink>
    </div>
    <div style="margin-top: 10px;color: blue;text-align: center;">
        <label for=""> Mobile
            <input type="text">
        </label>
    </div>
    <table  class="table table-bordered border-primary">
        <tr style="background-color: #005b5b;color: white;">
            <th>SL</th>
            <th>Organization</th>
            <th>I.Type</th>
            <th>I.Name</th>
            <th>Class</th>
            <th>A.Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <tr style="border: 1px solid blue;">
            <td>1</td>
            <td>BSAF</td>
            <td>Blind Child</td>
            <td>Helal Academy</td>
            <td>One</td>
            <td>Helal Uddin</td>
            <td>01580331370</td>
            <td>Dhaka, Kollanpur</td>
            <td>
                <a class="btn btn-primary" href="">
                <i class="fa-solid fa-pen-to-square"/></a>
                <a class="btn btn-danger" href=""><i class="fa-solid fa-trash"/></a>
            </td>
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
</div>
</template>