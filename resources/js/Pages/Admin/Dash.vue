<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
// import Paglink from "@/Util/Paglink.vue";

// import { usePage, Head, useForm } from "@inertiajs/inertia-vue3";

// import moment from "moment";
</script>

<template>
    <AdminLayout>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">TOTAL Users</span>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">50m</h3>
                            </div>
                            <div class="col-5">
                                <i
                                    style="font-size: 3rem"
                                    class="fas fa-lg fa-fw fa-graduation-cap"
                                ></i>
                            </div>
                        </div>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">ACTIVE STUDENT</span>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">40m</h3>
                            </div>
                            <div class="col-5">
                                <i
                                    style="font-size: 3rem"
                                    class="fas fa-lg fa-fw fa-flag-checkered"
                                ></i>
                            </div>
                        </div>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1"> LEVEL</span>
                        </div>

                        <div
                            class="small text-white text-opacity-50 text-truncate"
                        >
                            <span
                                class="col-12 d-flex align-items-center text-white justify-content-between"
                            >
                                <span>
                                    <i
                                        class="fas fa-fw fa-object-group me-1"
                                    ></i>
                                    TOTAL ClASSES
                                </span>
                                <span> 100 </span>
                            </span>
                            <span
                                class="col-12 d-flex align-items-center text-white justify-content-between"
                            >
                                <span>
                                    <i class="fas fa-fw fa-book me-1"></i>
                                    TOTAL SUBJECTS
                                </span>
                                <span> 100 </span>
                            </span>
                        </div>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">CONTENTS </span>
                        </div>

                        <div class="small text-white text-opacity-50">
                            <span
                                class="col-12 d-flex align-items-center text-white justify-content-between"
                            >
                                <span>
                                    <i class="fas fa-fw fa-tv me-1"></i>
                                    TOTAL VIDEO
                                </span>
                                <span> 100 </span>
                            </span>
                            <span
                                class="col-12 d-flex align-items-center text-white justify-content-between"
                            >
                                <span>
                                    <i class="fas fa-fw fa-question me-1"></i>
                                    TOTAL QUIZ
                                </span>
                                <span> 100 </span>
                            </span>
                            <span
                                class="col-12 d-flex align-items-center text-white justify-content-between"
                            >
                                <span>
                                    <i
                                        class="fas fa-fw fa-sticky-note me-1"
                                    ></i>
                                    TOTAL SLIDE
                                </span>
                                <span> 100 </span>
                            </span>
                        </div>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">BOOKS</span>
                        </div>

                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">50m</h3>
                            </div>
                            <div class="col-5">
                                <i
                                    style="font-size: 3rem"
                                    class="fas fa-lg fa-fw fa-book-open"
                                ></i>
                            </div>
                        </div>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-g">
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

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
<script>
export default {};
</script>
