<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import Paglink from "@/Util/Paglink.vue";

import { usePage, Head, useForm } from "@inertiajs/inertia-vue3";

import moment from "moment";
</script>

<template>
    <Head title="Users" />
    <AdminLayout>
        <div class="card">
            <ul class="nav nav-tabs nav-tabs-v2 px-4">
                <li class="nav-item me-3">
                    <a
                        href="#allTab"
                        class="nav-link active px-2"
                        data-bs-toggle="tab"
                        >All Users</a
                    >
                </li>
            </ul>
            <div class="tab-content p-2">
                <div class="tab-pane fade show active" id="allTab">
                    <div class="input-group mb-4">
                        <div
                            v-if="users.length > 5"
                            style="
                                background: var(--app-header-input-bg);
                                border-radius: 8px;
                            "
                            class="menu-search d-flex align-items-center p-2 form_b"
                        >
                            <div class="menu-search-icon mr-2">
                                <i class="fa fa-search"></i>
                            </div>
                            <div
                                class="menu-search-input form_el"
                                style="width: 100%"
                            >
                                <input
                                    style="border: none; width: 100%"
                                    type="text"
                                    class="form-control"
                                    v-model="searchuser"
                                    placeholder="Search Users, by name or emial"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="pt-0 pb-2">s/no</th>
                                    <th class="pt-0 pb-2">Name</th>
                                    <th class="pt-0 pb-2">Email</th>
                                    <th class="pt-0 pb-2">Phone Number</th>
                                    <th class="pt-0 pb-2">Active</th>
                                    <th class="pt-0 pb-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center" v-if="users.length < 1">
                                    <td colspan="5">no users</td>
                                </tr>
                                <tr
                                    v-else
                                    v-for="(user, index) in users"
                                    :key="user.id"
                                >
                                    <td class="w-10px align-middle">
                                        {{ index + 1 }}
                                    </td>
                                    <td>{{ user.name }}</td>
                                    <td class="align-middle">
                                        {{ user.email }}
                                    </td>
                                    <td class="align-middle">
                                        {{ user.phone_number ?? "empty" }}
                                    </td>
                                    <td class="align-middle">
                                        <span
                                            v-if="user.throt > '3'"
                                            style="font-size: 13px"
                                            class="badge bg-danger ms-1"
                                            >Inactive
                                        </span>
                                        <span
                                            v-else
                                            style="font-size: 13px"
                                            class="badge bg-success ms-1"
                                        >
                                            Active
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <div
                                            style="
                                                border: 1px solid #ebeef4;
                                                border-radius: 5px;
                                            "
                                            class="dropdown-toggle p-2 text-center"
                                        >
                                            <a
                                                href="#"
                                                data-bs-toggle="dropdown"
                                                class="text-dark text-decoration-none"
                                                >Actions</a
                                            >
                                            <div class="dropdown-menu">
                                                <a
                                                    @click="viewdetails(user)"
                                                    href="#refmodal"
                                                    data-bs-toggle="modal"
                                                    class="dropdown-item"
                                                >
                                                    <i
                                                        class="fa fa-user text-info mr-3"
                                                    ></i>
                                                    View profile</a
                                                >
                                                <a
                                                    @click="showuser(user)"
                                                    href="#modalEdit"
                                                    data-bs-toggle="modal"
                                                    class="dropdown-item"
                                                >
                                                    <i
                                                        class="fa fa-wallet text-info mr-3"
                                                    ></i>
                                                    View NFT plan</a
                                                >
                                                <a
                                                    v-if="user.throt < 3"
                                                    @click="
                                                        subuser(
                                                            user.id,
                                                            'subspend'
                                                        )
                                                    "
                                                    class="dropdown-item"
                                                    href="#"
                                                >
                                                    <i
                                                        class="fa fa-lock text-danger mr-3"
                                                    ></i>
                                                    suspend
                                                </a>
                                                <div
                                                    role="separator"
                                                    class="dropdown-divider"
                                                ></div>
                                                <a
                                                    v-if="user.throt > 3"
                                                    @click="
                                                        subuser(
                                                            user.id,
                                                            'unsubspend'
                                                        )
                                                    "
                                                    class="dropdown-item"
                                                    href="#"
                                                    ><i
                                                        class="fa fa-unlock text-success mr-3"
                                                    ></i>
                                                    Unspend</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <Paglink
                            class="mt-6 pagelink"
                            :links="this.usePage().props.value.users.links"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEdit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-if="viewuser != null" class="modal-title">
                            {{ viewuser.name }} Info
                        </h5>
                        <button
                            type="button"
                            class="btn-close p_close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>

                    <div v-if="viewuser != null" class="modal-body">
                        <p>
                            Signup Date :
                            {{
                                moment(viewuser.created_at).format("DD/MM/YYYY")
                            }}
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-lg fa-fw me-2 fa-ethereum"></i>
                            <p class="m-0">
                                <strong>
                                    {{ viewuser.wallet_amount ?? "0" }}
                                </strong>
                            </p>
                        </div>
                        <hr class="mb-1" />

                        <div class="col-12">
                            <div class="fs-12px text-muted mb-3">
                                <b>NFT Info</b>
                            </div>
                            <table
                                v-if="viewuser.mystore.length > 0"
                                class="table"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NFT Name</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(nft, index) in viewuser.mystore"
                                        :key="nft.id"
                                    >
                                        <th scope="row">{{ index + 1 }}</th>
                                        <td>{{ nft.nft_name }}</td>
                                        <td>
                                            {{
                                                Number(
                                                    nft.amount
                                                ).toLocaleString()
                                            }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="refmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-if="refuser != null" class="modal-title">
                            {{ refuser.name }} Info
                        </h5>
                        <button
                            type="button"
                            class="btn-close p_close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>

                    <div v-if="refuser != null" class="modal-body">
                        <p>
                            Signup Date :
                            {{
                                moment(refuser.created_at).format("DD/MM/YYYY")
                            }}
                        </p>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-lg fa-fw me-2 fa-wallet"></i>
                            <p class="m-0">
                                <strong>
                                    {{
                                        refuser.wallet_amount.toLocaleString() ??
                                        "0"
                                    }}
                                </strong>
                            </p>
                        </div>
                        <hr class="mb-1" />
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">s/no</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Award</th>
                                </tr>
                            </thead>
                            <!-- <tbody v-if="refuser.referrals.length > 0">
                                <tr
                                    v-for="(ref, index) in refuser.referrals"
                                    :key="ref.id"
                                    class="text-center"
                                >
                                    <th scope="row">{{ index + 1 }}</th>
                                    <td>{{ ref.user_name }}</td>
                                    <td>
                                        {{
                                            Number(
                                                ref.ref_amount
                                            ).toLocaleString()
                                        }}
                                        <small
                                            v-if="ref.ref_status == 0"
                                            class="text-danger"
                                            >inactive</small
                                        >
                                        <small
                                            v-if="ref.ref_status == 1"
                                            class="text-success"
                                            >active</small
                                        >
                                    </td>

                                    <td>
                                        <span
                                            v-if="ref.ref_status == 0"
                                            class="text-warning"
                                            >pending</span
                                        >
                                        <span
                                            v-if="ref.ref_status == 1"
                                            class="text-success"
                                            >success</span
                                        >
                                    </td>
                                </tr>
                            </tbody> -->
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="4">no Refferals</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
<style scoped>
.form_b {
    width: 400px;
}
@media screen and (max-width: 500px) {
    .form_b {
        width: 100%;
    }
}
.form_el {
    width: 100%;
}
</style>
<script>
export default {
    components: {
        Paglink,
    },

    data() {
        return {
            viewuser: null,
            refuser: null,
            moment,
            searchuser: "",
        };
    },
    computed: {
        users() {
            return this.usePage().props.value.users.data.filter((user) => {
                return (
                    user.name
                        .toLowerCase()
                        .indexOf(this.searchuser.toLowerCase()) != -1 ||
                    user.email
                        .toLowerCase()
                        .indexOf(this.searchuser.toLowerCase()) != -1
                );
            });
        },
    },
    methods: {
        viewdetails(user) {
            this.refuser = user;
        },

        subuser(id, type) {
            let subs = useForm({
                id,
                type,
            });
            subs.post(route("subuser"), {
                onSuccess: () => {},
            });
        },
    },
};
</script>
