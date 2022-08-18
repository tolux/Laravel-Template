<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Alert from "@/Util/Alert.vue";
defineProps({
    title: String,
});

const logout = () => {
    Inertia.post(route("adminlogout"));
};
</script>
<template>
    <Alert
        @changeshownof="changeshownof"
        @unchangeshownof="unchangeshownof"
        :shownof="shownof"
        :message="$page.props.flash"
    ></Alert>

    <div id="app">
        <div id="header" class="app-header">
            <div class="mobile-toggler">
                <button
                    type="button"
                    class="menu-toggler"
                    data-toggle="sidebar-mobile"
                >
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>

            <div class="brand">
                <div class="desktop-toggler">
                    <button
                        type="button"
                        class="menu-toggler"
                        data-toggle="sidebar-minify"
                    >
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>
                <a href="#" class="brand-logo">
                    <img src="/tem/assets/img/BLOGO2.png" alt="" height="20" />
                </a>
            </div>

            <div class="menu">
                <div style="margin-left: auto" class="menu-item dropdown">
                    <a
                        href="#"
                        data-bs-toggle="dropdown"
                        data-display="static"
                        class="menu-link"
                    >
                        <div onclick="toggleed()" class="menu-img online">
                            <i class="fa fa-user fa-lg text-dark"></i>
                        </div>
                    </a>
                    <div
                        style="display: none"
                        id="ed_pro"
                        class="dropdown-menu-right me-lg-3"
                    >
                        <Link
                            v-if="!route().current('adminprofile')"
                            :href="route('adminprofile')"
                            class="dropdown-item d-flex align-items-center"
                            >Edit Profile
                            <i
                                class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"
                            ></i
                        ></Link>

                        <div class="dropdown-divider"></div>

                        <form @submit.prevent="logout">
                            <button
                                type="submit"
                                class="dropdown-item d-flex align-items-center"
                            >
                                Log Out
                                <i
                                    class="fa fa-toggle-on fa-fw ms-auto text-danger text-opacity-50"
                                ></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="sidebar" class="app-sidebar">
            <div
                class="app-sidebar-content"
                data-scrollbar="true"
                data-height="100%"
            >
                <div class="menu">
                    <div class="menu-header">Navigation</div>
                    <div
                        :class="{ active: route().current('admindash') }"
                        class="menu-item"
                    >
                        <Link :href="route('admindash')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-laptop"></i
                            ></span>
                            <span class="menu-text">Dashboard</span>
                        </Link>
                    </div>
                    <div
                        :class="{ active: route().current('adminprofile') }"
                        class="menu-item"
                    >
                        <Link :href="route('adminprofile')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-user-circle"></i
                            ></span>
                            <span class="menu-text">Profile</span>
                        </Link>
                    </div>
                    <div
                        :class="{ active: route().current('users') }"
                        class="menu-item"
                    >
                        <Link :href="route('users')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-user"></i
                            ></span>
                            <span class="menu-text">Users</span>
                        </Link>
                    </div>

                    <div class="menu-item">
                        <form @submit.prevent="logout">
                            <button type="submit" class="menu-link">
                                <span class="menu-icon"
                                    ><i class="fa text-danger fa-power-off"></i
                                ></span>
                                <span class="menu-text">Log out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <button
                class="app-sidebar-mobile-backdrop"
                data-dismiss="sidebar-mobile"
            ></button>
        </div>
        <div id="content" class="app-content">
            <br />
            <br />
            <slot />
        </div>
    </div>
</template>
<style>
.pagelink div[class*="leading"],
.pagelink a[class*="mr-1"] {
    padding-top: 0rem !important;
    padding-bottom: 0rem !important;
    padding-right: 0rem !important;
    padding-left: 0rem !important;
    padding: 0.8rem 0.8rem !important;
}
</style>
<script>
export default {
    components: {
        Alert,
    },
    data() {
        return {
            logouttog: true,
            shownof: false,
        };
    },
    methods: {
        unchangeshownof() {
            this.shownof = true;
            // alert(this.shownof);
        },
        changeshownof() {
            this.shownof = false;
            // alert(this.shownof);
        },
    },
};
</script>
