<template>
    <div class="container">
        <div class="row justify-content-center">
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
        <user-profile></user-profile>
    </div>
</template>

<script>
import UserProfile from './UserProfile.vue'
export default {
    components: {
        UserProfile
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
