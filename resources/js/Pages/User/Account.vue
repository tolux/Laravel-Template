<script setup>
import UserLayout from "@/Layouts/UserLayout.vue";
</script>

<template>
    <UserLayout>
        <Head title="Account" />
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="page-header mb-3">Account Records</h3>
            <div>
                <label class="form-check-label mb-1" for="customSwitch2">
                    Sort by Category
                </label>
                <select
                    class="form-select"
                    style="width: auto"
                    id="exampleFormControlSelect1"
                >
                    <option value="all">All Transactions</option>
                    <option value="live_auctions">Deposit</option>
                    <option value="top_nft">Bills</option>
                </select>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mailbox">
                        <div class="mailbox-body p-0">
                            <!-- <div
                                style="width: 100%"
                                class="row"
                                v-if="nofs.length < 1"
                            >
                                <div class="">
                                    <div class="mailbox-list text-center">
                                        no notification
                                    </div>
                                </div>
                            </div> -->
                            <div style="width: 100%" class="row">
                                <div class="col-lg-6">
                                    <div class="mailbox-list">
                                        <div class="mailbox-list-item p-1 pt-3">
                                            <div class="mailbox-checkbox">
                                                <i
                                                    class="fas fa-lg fa-fw me-2 fa-envelope"
                                                ></i>
                                            </div>
                                            <div class="mailbox-message">
                                                <span
                                                    class="mailbox-list-item-link"
                                                >
                                                    <div class="mailbox-sender">
                                                        <span
                                                            class="mailbox-sender-name"
                                                        >
                                                            type</span
                                                        >
                                                        <span
                                                            class="mailbox-time"
                                                        >
                                                            date</span
                                                        >
                                                    </div>

                                                    <div
                                                        style="
                                                            over-flow: revert;
                                                            max-height: 100%;
                                                        "
                                                        class="mailbox-desc"
                                                    >
                                                        msg
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-2" />
                        <!-- <Paglink
                                class="mt-6 pagelink"
                                :links="this.usePage().props.value.nofs.links"
                            /> -->
                    </div>
                </div>
            </div>
        </div>
    </UserLayout>
</template>
