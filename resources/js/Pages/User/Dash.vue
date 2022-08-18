<script setup>
import UserLayout from "@/Layouts/UserLayout.vue";
import SelectBill from "@/Pages/User/SelectBill.vue";
import { ref } from "vue";
// import Paglink from "@/Util/Paglink.vue";

import { usePage, Head, useForm } from "@inertiajs/inertia-vue3";

// import moment from "moment";
const toggleselect = ref(false);
const closebill = () => {
    toggleselect.value = false;
};
defineProps({
    user: Object,
});
</script>

<template>
    <UserLayout>
        <Head title="Dashboard" />
        <SelectBill @closebill="closebill" :toggleselect="toggleselect" />
        <h1 class="page-header mb-3">Dashboard</h1>
        <hr />
        <div class="mb-2">
            <button style="background-color: #ef4060" class="btn text-white">
                Top up
            </button>
            <button
                @click="toggleselect = !toggleselect"
                class="btn btn-outline-success ml-3 fw-700"
            >
                Pay bills
            </button>
            <button
                data-bs-toggle="modal"
                data-bs-target="#modalSm"
                class="btn btn-outline-warning ml-3 fw-700"
            >
                Airtime to Cash
            </button>
        </div>
        <div class="row">
            <div class="col-xs-6 col-lg-3 col-md-6 col-sm-6">
                <div class="card bg-gradient-cyan-blue mb-3">
                    <div class="card-body position-relative">
                        <div class="d-flex fw-bold medium mb-3">
                            <span class="flex-grow-1">Wallet Amount</span>
                        </div>
                        <div class="position-absolute top-6 right-2">
                            <i
                                style="font-size: 2rem"
                                class="fas fa-lg fa-fw fa-wallet"
                            ></i>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7 d-flex align-items-center">
                                <svg
                                    version="1.1"
                                    id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    width="20px"
                                    viewBox="0 0 496.262 496.262"
                                    style="
                                        enable-background: new 0 0 496.262
                                            496.262;
                                    "
                                    xml:space="preserve"
                                >
                                    <g>
                                        <path
                                            d="M477.832,274.28h-67.743v-65.106h67.743c10.179,0,18.43-8.243,18.43-18.424c0-10.182-8.251-18.43-18.43-18.43h-67.743
		V81.982c0-13.187-2.606-22.866-7.743-28.762c-4.882-5.609-11.301-8.219-20.19-8.219c-8.482,0-14.659,2.592-19.447,8.166
		c-5.077,5.902-7.654,15.599-7.654,28.821v90.343H227.627l-54.181-81.988c-4.637-7.317-8.997-14.171-13.231-20.75
		c-3.812-5.925-7.53-10.749-11.042-14.351c-3.109-3.189-6.652-5.657-10.796-7.554c-3.91-1.785-8.881-2.681-14.762-2.681
		c-7.501,0-14.31,2.055-20.83,6.277c-6.452,4.176-10.912,9.339-13.636,15.785c-2.391,6.126-3.656,15.513-3.656,27.63v77.626h-67.07
		C8.246,172.326,0,180.574,0,190.755c0,10.181,8.246,18.424,18.424,18.424h67.07v65.113h-67.07C8.246,274.292,0,282.538,0,292.722
		C0,302.9,8.246,311.14,18.424,311.14h67.07v103.143c0,12.797,2.689,22.378,8.015,28.466c5.065,5.805,11.487,8.5,20.208,8.5
		c8.414,0,14.786-2.707,20.07-8.523c5.411-5.958,8.148-15.533,8.148-28.442V311.14h115.308l62.399,95.683
		c4.339,6.325,8.819,12.709,13.287,18.969c4.031,5.621,8.429,10.574,13.069,14.711c4.179,3.742,8.659,6.484,13.316,8.157
		c4.794,1.726,10.397,2.601,16.615,2.601c16.875,0,34.158-5.166,34.158-43.479V311.14h67.743c10.179,0,18.43-8.252,18.43-18.43
		C496.262,282.532,488.011,274.28,477.832,274.28z M355.054,209.173v65.106h-60.041l-43.021-65.106H355.054z M141.936,134.364
		l24.76,37.956h-24.76V134.364z M141.936,274.28v-65.106h48.802l42.466,65.106H141.936z M355.054,365.153l-35.683-54.013h35.683
		V365.153z"
                                        />
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>

                                <h3 class="mb-0 ml-1">
                                    {{
                                        Number(
                                            user.wallet_amount
                                        ).toLocaleString()
                                    }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-lg-3 col-md-6 col-sm-6">
                <div class="card bg-gradient-custom-teal mb-3">
                    <div class="card-body position-relative">
                        <div class="d-flex fw-bold medium mb-3">
                            <span class="flex-grow-1">Last Deposit</span>
                        </div>
                        <div class="position-absolute top-6 right-2">
                            <i
                                style="
                                    font-size: 2rem;
                                    transform: rotate(90deg);
                                "
                                class="fas fa-lg fa-fw me-2 fa-sign-in-alt"
                            ></i>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7 d-flex align-items-center">
                                <svg
                                    version="1.1"
                                    id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    width="20px"
                                    viewBox="0 0 496.262 496.262"
                                    style="
                                        enable-background: new 0 0 496.262
                                            496.262;
                                    "
                                    xml:space="preserve"
                                >
                                    <g>
                                        <path
                                            d="M477.832,274.28h-67.743v-65.106h67.743c10.179,0,18.43-8.243,18.43-18.424c0-10.182-8.251-18.43-18.43-18.43h-67.743
		V81.982c0-13.187-2.606-22.866-7.743-28.762c-4.882-5.609-11.301-8.219-20.19-8.219c-8.482,0-14.659,2.592-19.447,8.166
		c-5.077,5.902-7.654,15.599-7.654,28.821v90.343H227.627l-54.181-81.988c-4.637-7.317-8.997-14.171-13.231-20.75
		c-3.812-5.925-7.53-10.749-11.042-14.351c-3.109-3.189-6.652-5.657-10.796-7.554c-3.91-1.785-8.881-2.681-14.762-2.681
		c-7.501,0-14.31,2.055-20.83,6.277c-6.452,4.176-10.912,9.339-13.636,15.785c-2.391,6.126-3.656,15.513-3.656,27.63v77.626h-67.07
		C8.246,172.326,0,180.574,0,190.755c0,10.181,8.246,18.424,18.424,18.424h67.07v65.113h-67.07C8.246,274.292,0,282.538,0,292.722
		C0,302.9,8.246,311.14,18.424,311.14h67.07v103.143c0,12.797,2.689,22.378,8.015,28.466c5.065,5.805,11.487,8.5,20.208,8.5
		c8.414,0,14.786-2.707,20.07-8.523c5.411-5.958,8.148-15.533,8.148-28.442V311.14h115.308l62.399,95.683
		c4.339,6.325,8.819,12.709,13.287,18.969c4.031,5.621,8.429,10.574,13.069,14.711c4.179,3.742,8.659,6.484,13.316,8.157
		c4.794,1.726,10.397,2.601,16.615,2.601c16.875,0,34.158-5.166,34.158-43.479V311.14h67.743c10.179,0,18.43-8.252,18.43-18.43
		C496.262,282.532,488.011,274.28,477.832,274.28z M355.054,209.173v65.106h-60.041l-43.021-65.106H355.054z M141.936,134.364
		l24.76,37.956h-24.76V134.364z M141.936,274.28v-65.106h48.802l42.466,65.106H141.936z M355.054,365.153l-35.683-54.013h35.683
		V365.153z"
                                        />
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>

                                <h3 class="mb-0 ml-1">50</h3>
                            </div>
                            <small class="position-absolute bottom-0"
                                >12/4/2022</small
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3 col-md-6 col-sm-6">
                <div class="card bg-gradient-orange mb-3">
                    <div class="card-body position-relative">
                        <div class="d-flex fw-bold medium mb-3">
                            <span class="flex-grow-1">No of Referrals</span>
                        </div>
                        <div class="position-absolute top-6 right-2">
                            <i
                                style="font-size: 2rem"
                                class="fas fa-lg fa-fw fa-link"
                            ></i>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7 d-flex align-items-center">
                                <i
                                    style="font-size: 20px"
                                    class="fas fa-users"
                                ></i>

                                <h3 class="mb-0 ml-1">5</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3 col-md-6 col-sm-6">
                <div class="card bg-gradient-pink mb-3">
                    <div class="card-body position-relative">
                        <div class="d-flex fw-bold medium mb-3">
                            <span class="flex-grow-1">Last Transaction</span>
                        </div>
                        <div class="position-absolute top-6 right-2">
                            <i
                                style="font-size: 2rem"
                                class="far fa-lg fa-fw me-2 fa-credit-card"
                            ></i>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7 d-flex align-items-center">
                                <svg
                                    version="1.1"
                                    id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px"
                                    y="0px"
                                    width="20px"
                                    viewBox="0 0 496.262 496.262"
                                    style="
                                        enable-background: new 0 0 496.262
                                            496.262;
                                    "
                                    xml:space="preserve"
                                >
                                    <g>
                                        <path
                                            d="M477.832,274.28h-67.743v-65.106h67.743c10.179,0,18.43-8.243,18.43-18.424c0-10.182-8.251-18.43-18.43-18.43h-67.743
		V81.982c0-13.187-2.606-22.866-7.743-28.762c-4.882-5.609-11.301-8.219-20.19-8.219c-8.482,0-14.659,2.592-19.447,8.166
		c-5.077,5.902-7.654,15.599-7.654,28.821v90.343H227.627l-54.181-81.988c-4.637-7.317-8.997-14.171-13.231-20.75
		c-3.812-5.925-7.53-10.749-11.042-14.351c-3.109-3.189-6.652-5.657-10.796-7.554c-3.91-1.785-8.881-2.681-14.762-2.681
		c-7.501,0-14.31,2.055-20.83,6.277c-6.452,4.176-10.912,9.339-13.636,15.785c-2.391,6.126-3.656,15.513-3.656,27.63v77.626h-67.07
		C8.246,172.326,0,180.574,0,190.755c0,10.181,8.246,18.424,18.424,18.424h67.07v65.113h-67.07C8.246,274.292,0,282.538,0,292.722
		C0,302.9,8.246,311.14,18.424,311.14h67.07v103.143c0,12.797,2.689,22.378,8.015,28.466c5.065,5.805,11.487,8.5,20.208,8.5
		c8.414,0,14.786-2.707,20.07-8.523c5.411-5.958,8.148-15.533,8.148-28.442V311.14h115.308l62.399,95.683
		c4.339,6.325,8.819,12.709,13.287,18.969c4.031,5.621,8.429,10.574,13.069,14.711c4.179,3.742,8.659,6.484,13.316,8.157
		c4.794,1.726,10.397,2.601,16.615,2.601c16.875,0,34.158-5.166,34.158-43.479V311.14h67.743c10.179,0,18.43-8.252,18.43-18.43
		C496.262,282.532,488.011,274.28,477.832,274.28z M355.054,209.173v65.106h-60.041l-43.021-65.106H355.054z M141.936,134.364
		l24.76,37.956h-24.76V134.364z M141.936,274.28v-65.106h48.802l42.466,65.106H141.936z M355.054,365.153l-35.683-54.013h35.683
		V365.153z"
                                        />
                                    </g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                    <g></g>
                                </svg>

                                <h3 class="mb-0 ml-1">5, 000</h3>
                            </div>
                        </div>
                        <small class="position-absolute bottom-0"
                            >Buy Data</small
                        >
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">NOTIFICATIONS </span>
                        </div>

                        <div class="table-responsive">
                            <table
                                class="table table-striped table-borderless mb-2px small text-nowrap"
                            >
                                <tbody>
                                    <tr>
                                        <td>
                                            <span
                                                class="d-flex align-items-center"
                                            >
                                                <i
                                                    class="bi bi-circle-fill fs-6px text-theme me-2"
                                                ></i>
                                                You have sold an item - $1,299
                                            </span>
                                        </td>
                                        <td><small>time</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </UserLayout>
</template>
<script>
export default {};
</script>
<style scoped>
@media (min-width: 420px) and (max-width: 576px) {
    .col-xs-6 {
        flex: 0 0 auto;
        width: 50%;
    }
}
</style>
