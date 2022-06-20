<template>
    <div>
        <label for="vin">VIN</label>
        <input type="text" name="vin" v-model="vin" @change="filterCars(vin)">
        <table>
            <thead>
                <th>Vin</th>
                <th>Cena</th>
                <th>Opis</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Usuń samochód</th>
            </thead>
            <tbody>
                <tr v-for="car in cars" :key="car.id">
                    <td>
                        {{ car.vin }}
                    </td>
                    <td>
                        {{ car.price }}
                    </td>
                    <td>
                        {{ car.description }}
                    </td>
                    <td v-if="car.brand">
                        {{ car.brand.name }}
                    </td>
                    <td v-else></td>
                    <td v-if="car.model">
                        {{ car.model.name }}
                    </td>
                    <td v-else></td>
                    <td>
                        <button @click="destroy(car.id)">Usuń</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cars: [],
            vin: ""
        }
    },
    methods: {
        async getCars(vin = "") {
            await this.$http.get('/main-api/cars/list?vin=' + vin)
                .then(response => {
                    this.cars = response.data.cars;
                    // console.log(response.data.cars);
                })
        },
        async destroy(id) {
            await this.$http.delete('/main-api/cars/destroy/' + id)
                .then(response => {
                    console.log(response);
                })
            this.getCars();
        },
        filterCars(vin) {
            if (vin.length > 3) {
                this.getCars(vin);
            } else if (vin.length == 3 || vin.length == 0) {
                this.getCars("");
            }
            console.log(vin)
        }
    },
    created() {
        this.getCars();
    }
}
</script>