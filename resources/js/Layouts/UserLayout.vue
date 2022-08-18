<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Alert from "@/Util/Alert.vue";
defineProps({
    title: String,
});

const logout = () => {
    Inertia.post(route("logout"));
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
                        :class="{ active: route().current('dashboard') }"
                        class="menu-item"
                    >
                        <Link :href="route('dashboard')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-laptop"></i
                            ></span>
                            <span class="menu-text">Dashboard</span>
                        </Link>
                    </div>
                    <div
                        :class="{ active: route().current('profile') }"
                        class="menu-item"
                    >
                        <Link :href="route('profile')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-user-circle"></i
                            ></span>
                            <span class="menu-text">Profile</span>
                        </Link>
                    </div>
                    <div class="menu-item has-sub">
                        <a href="#" class="menu-link">
                            <span class="menu-icon">
                                <i class="far fa-money-bill-alt"></i>
                            </span>
                            <span class="menu-text">Fund Bills</span>
                            <span class="menu-caret"
                                ><b class="caret"></b
                            ></span>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item">
                                <a href="email_inbox.html" class="menu-link">
                                    <span class="menu-text">Buy Airtime</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_compose.html" class="menu-link">
                                    <span class="menu-text">Buy Data</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_detail.html" class="menu-link">
                                    <span class="menu-text"
                                        >Cable Subscription</span
                                    >
                                </a>
                            </div>
                            <div class="menu-item">
                                <a href="email_detail.html" class="menu-link">
                                    <span class="menu-text"
                                        >Electricity Bills</span
                                    >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        :class="{ active: route().current('account') }"
                        class="menu-item"
                    >
                        <Link :href="route('account')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-calculator"></i
                            ></span>
                            <span class="menu-text">Account</span>
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
    <div class="theme-pane chart_icon">
        <a href="javascript:;" class="c_icon">
            <i class="far fa-lg fa-fw fa-comment-alt"></i
        ></a>
    </div>
    <div class="theme-panel">
        <a
            href="javascript:;"
            data-click="theme-panel-expand"
            class="theme-collapse-btn"
            ><i class="fa fa-cog"></i
        ></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li>
                    <a
                        href="javascript:;"
                        class="bg-red"
                        data-theme="theme-red"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Red"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-pink"
                        data-theme="theme-pink"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Pink"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-orange"
                        data-theme="theme-orange"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Orange"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-yellow"
                        data-theme="theme-yellow"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Yellow"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-lime"
                        data-theme="theme-lime"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Lime"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-green"
                        data-theme="theme-green"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Green"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-teal"
                        data-theme="theme-teal"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Teal"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-cyan"
                        data-theme="theme-cyan"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Aqua"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li class="active">
                    <a
                        href="javascript:;"
                        class="bg-blue"
                        data-theme=""
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Default"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-purple"
                        data-theme="theme-purple"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Purple"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-indigo"
                        data-theme="theme-indigo"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Indigo"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
                <li>
                    <a
                        href="javascript:;"
                        class="bg-gray-600"
                        data-theme="theme-gray-600"
                        data-click="theme-selector"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-container="body"
                        data-bs-title="Gray"
                        data-original-title=""
                        title=""
                        >&nbsp;</a
                    >
                </li>
            </ul>
            <hr class="mb-0" />
            <div class="row mt-10px pt-3px">
                <div class="col-9 control-label text-dark fw-bold">
                    <div>
                        Dark Mode
                        <span
                            class="badge bg-primary ms-1 position-relative py-4px px-6px"
                            style="top: -1px"
                            >NEW</span
                        >
                    </div>
                    <div class="lh-14 fs-13px">
                        <small class="text-dark opacity-50">
                            Adjust the appearance to reduce glare and give your
                            eyes a break.
                        </small>
                    </div>
                </div>
                <div class="col-3 d-flex">
                    <div class="form-check form-switch ms-auto mb-0 mt-2px">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            name="app-theme-dark-mode"
                            id="appThemeDarkMode"
                            value="1"
                        />
                        <label class="form-check-label" for="appThemeDarkMode"
                            >&nbsp;</label
                        >
                    </div>
                </div>
            </div>
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
.chart_icon {
    position: fixed;
    z-index: 1040;
    right: -38px;
    width: 50px;
    height: 50px;
    top: auto;
    bottom: 2rem;
}
.c_icon {
    position: absolute;
    left: -2.5rem;
    top: 50%;
    margin-top: -1.25rem;
    width: 2.5rem;
    height: 2.5rem;
    line-height: 2.5rem;
    font-size: 1rem;
    color: var(--app-component-color);
    background: var(--app-component-bg);
    text-align: center;
    text-decoration: none;
    box-shadow: 0 0 16px rgba(0, 0, 0, 0.15);
    border-radius: 6px 0 0 6px;
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
