<template>
    <div>
        <label for="vin">VIN</label>
        <input type="text" name="vin" v-model="vin" @change="filterCars(vin)">
        <table>
            <thead>
                <th></th>
                <th>Vin</th>
                <th>Cena</th>
                <th>Opis</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Usuń samochód</th>
                <div style="display:inline-block; margin-left:30px;">
                    <button type="submit" id="destroyMultiple" @click="destroyMultiple($ids)" style="display:none;">
                        Usuń wybrane</button>
                </div>
                <div style="display:inline-block; margin-left:30px;">

                </div>
            </thead>
            <tbody>
                <tr v-for="car in cars" :key="car.id">
                    <td>
                        <input type="checkbox" :value="car.id" @change="showButton()">
                    </td>
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
                        <button class="destroy" @click="destroy(car.id)">Usuń</button>
                    </td>
                    <td>
                        <button class="sendCar" @click="sendCar(car.id)">Wyślij samochód</button>
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
                })
        },
        async destroy(id) {
            await this.$http.delete('/main-api/cars/destroy/' + id)
                .then(response => {
                    console.log(response);
                })
            this.getCars();
        },
        async destroyMultiple(ids) {
            await ids.forEach(this.$http.delete('/main-api/cars/destroy/' + id)
                .then(response => {
                    console.log(response);
                }))
            this.getCars();
        },
        showButton() {
            var buttonMain = document.getElementById("destroyMultiple");
            // var buttons = document.getElementsByCalssName("destroy");
            if (buttonMain.style.display === "none") {
                buttonMain.style.display = "block";
            }
            // if (buttonMain.style.display === "block") {
            //     buttons.setAttribute("disabled", "disabled");
            // }
        },
        sendCar(id) {
            this.$http.get('/main-api/cars/sendEmail/' + id)
                .then(response => {
                    console.log(response);
                })

        },
        filterCars(vin) {
            if (vin.length > 3) {
                this.getCars(vin);
            } else if (vin.length == 3 || vin.length == 0) {
                this.getCars("");
            }
            console.log(vin);
        }
    },
    created() {
        this.getCars();
    }
}
</script>