<template>
    <div>
        <div>
            <h1>Użytkownik</h1>
            <b>{{ name }} {{ surname }}</b>
            <br>
            <b>iq:</b>{{ iq }}
        </div>
        <div>
            <label for="name">Imie</label>
            <input type="text" name="name" id="name" v-model="name">
            <label for="surname">Nazwisko</label>
            <input type="text" name="surname" id="surname" v-model="surname">
            <div>
                <button @click="increaseIq()">Zwiększ Iq</button>
                <button @click="decreaseIq()">Zmniejsz Iq</button>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            name: "",
            surname: "",
            iq: 0,
        }
    },
    methods: {
        increaseIq() {
            this.iq++;
        },
        decreaseIq() {
            this.iq--;
        }
    }
}
</script>