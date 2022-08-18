<script setup>
import { ref } from "vue";

defineProps({
    toggleselect: Boolean,
});

const emit = defineEmits(["closebill"]);

const closetoselect = () => {
    emit("closebill");
};
const T_select_N = ref(false);

const select_N = ref("");

const C_select_N = () => {
    T_select_N.value = true;
};
</script>
<template>
    <div v-if="toggleselect" class="select_bill p-1">
        <div class="card">
            <img
                @click="closetoselect"
                width="20"
                style="z-index: 2"
                class="position-absolute top-1 right-1 cursor-pointer"
                src="/front/close.png"
                alt="close"
            />
            <div class="card-body">
                <div class="desktop-sticky-top flex-fill">
                    <div class="calendar-sidebar-title mb-2">
                        Select your Bill Payment
                    </div>
                    <div
                        class="row justify-content-center fc-event-list"
                        id="external-events"
                    >
                        <div
                            class="fc-event-item mt-2 col-xs-6 col-12 cursor-pointer"
                        >
                            <div class="fc-event-link" data-color="#ff2d55">
                                <i
                                    class="fa fa-circle fs-8px me-2 text-info"
                                ></i>
                                Buy Airtime
                            </div>
                        </div>
                        <div
                            class="fc-event-item mt-2 col-xs-6 col-12 cursor-pointer"
                        >
                            <div class="fc-event-link" data-color="#ff2d55">
                                <i
                                    class="fa fa-circle fs-8px me-2 text-pink"
                                ></i>
                                Buy Data
                            </div>
                        </div>
                        <div
                            class="fc-event-item mt-2 col-xs-6 col-12 cursor-pointer"
                        >
                            <div class="fc-event-link" data-color="#ff2d55">
                                <i
                                    class="fa fa-circle fs-8px me-2 text-warning"
                                ></i>
                                Cable Subscription Tv
                            </div>
                        </div>
                        <div
                            class="fc-event-item mt-2 col-xs-6 col-12 cursor-pointer"
                        >
                            <div class="fc-event-link" data-color="#ff2d55">
                                <i
                                    class="fa fa-circle fs-8px me-2 text-danger"
                                ></i>
                                Electricity Bills
                            </div>
                        </div>
                        <div
                            class="fc-event-item mt-2 col-xs-6 col-12 cursor-pointer"
                        >
                            <div class="fc-event-link" data-color="#ff2d55">
                                <i
                                    class="fa fa-circle fs-8px me-2 text-success"
                                ></i>
                                Examination Pin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSm">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Airtime to Cash</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-label" for="exampleFormControlInput1"
                            >Amount</label
                        >
                        <input
                            type="email"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="Enter Amount"
                        />
                    </div>
                    <div class="form-group mb-3">
                        <label
                            class="form-label"
                            for="exampleFormControlSelect1"
                            >Select Network
                        </label>
                        <select
                            @change="C_select_N"
                            v-model="select_N"
                            class="form-select"
                            id="exampleFormControlSelect1"
                        >
                            <option>MTN</option>
                            <option>GLO</option>
                            <option>AIRTLE</option>
                        </select>
                    </div>
                    <div v-if="T_select_N">
                        <div class="card p-2">
                            <p class="fw-800">
                                Send the airtime to the number below. once done,
                                submit the request
                                <br />
                                please make sure you chat with our
                                representative before submiting the request
                                <a href=""> chat now </a>
                            </p>
                            <div class="card-body bg-primary text-center">
                                <strong>
                                    <p class="text-white">tel : 083932139343</p>
                                </strong>
                            </div>
                        </div>
                        <button class="btn btn-md btn-primary mt-3">
                            Submit request
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.select_bill {
    position: fixed;
    top: 1rem;
    transform: translateX(-50%);
    left: 50%;
    z-index: 9999;
    width: 500px;
}

@media screen and (max-width: 510px) {
    .select_bill {
        width: 100%;
    }
}
@media (min-width: 380px) {
    .col-xs-6 {
        flex: 0 0 auto;
        width: 50%;
    }
}
.fc-event-list .fc-event-item .fc-event-link::after {
    content: "" !important;
}
</style>
