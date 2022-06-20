<template>
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Vue - test</div>
                    <div>
                        {{ variable }}
                    </div>
                    <div>
                        {{ count }}
                    </div>
                    <button @click="increaseCount()">Zwiększ licznik</button>
                    <div>
                        <input type="text" v-model="name" @input="logName(name)">
                        {{ name }}
                    </div>
                </div>
            </div>
        </div>
        <user-profile></user-profile> -->
        <cars-list />
    </div>
</template>

<script>
import UserProfile from './UserProfile.vue'
import CarsList from "./Cars/List.vue"
export default {
    components: {
        UserProfile,
        CarsList
    },
    data() {
        return {
            variable: "zmienna",
            count: 0,
            name: ""
        }
    },
    methods: {
        increaseCount() {
            this.count++;
        },
        logName(name) {
            console.log(name);
        }
    }
}
</script>
