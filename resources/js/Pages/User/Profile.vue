<script setup>
import UserLayout from "@/Layouts/UserLayout.vue";

import ProfileUpdate from "@/Pages/User/ProfileUpdate.vue";
const props = defineProps({
    user: Object,
});
</script>

<template>
    <UserLayout>
        <div class="card">
            <div class="card-body p-0">
                <div class="profile">
                    <div class="profile-container">
                        <div class="profile-sidebar">
                            <div class="desktop-sticky-top">
                                <div class="profile-img">
                                    <img
                                        src="/assets/img/user_icon.png"
                                        alt=""
                                    />
                                </div>
                                <div class="mb-3 fw-bold text-dark mt-n2">
                                    Admin
                                </div>

                                <hr class="mt-4 mb-4" />
                            </div>
                        </div>

                        <div class="profile-content">
                            <ul
                                class="profile-tab nav nav-tabs nav-tabs-v2 justify-content-between"
                            >
                                <li class="nav-item">
                                    <a
                                        href="#profile-post"
                                        class="nav-link active"
                                        data-bs-toggle="tab"
                                    >
                                        <div class="nav-field">Profile</div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a
                                        href="#profile-video"
                                        class="nav-link"
                                        data-bs-toggle="tab"
                                    >
                                        <div class="nav-field">
                                            <i class="fa fa-cog"></i>
                                            settings
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="profile-content-container">
                                <div class="row">
                                    <div class="tab-content p-0">
                                        <div
                                            class="tab-pane fade show active"
                                            id="profile-post"
                                        >
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="">
                                                            <div
                                                                id="general"
                                                                class="mb-5"
                                                            >
                                                                <h4>
                                                                    <i
                                                                        class="far fa-user fa-fw"
                                                                    ></i>
                                                                    General
                                                                </h4>
                                                                <p>
                                                                    View and
                                                                    update your
                                                                    general
                                                                    account
                                                                    information
                                                                    and
                                                                    settings.
                                                                </p>
                                                                <div
                                                                    class="card"
                                                                >
                                                                    <div
                                                                        class="list-group list-group-flush"
                                                                    >
                                                                        <div
                                                                            class="list-group-item d-flex align-items-center"
                                                                        >
                                                                            <div
                                                                                class="flex-1 text-break text-dark"
                                                                            >
                                                                                <div>
                                                                                    Name
                                                                                </div>
                                                                                <div
                                                                                    class=""
                                                                                >
                                                                                    {{
                                                                                        user.name
                                                                                    }}
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <i
                                                                                    class="fas text-success fa-lg fa-fw me-2 fa-check-circle"
                                                                                ></i>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="list-group-item d-flex align-items-center"
                                                                        >
                                                                            <div
                                                                                class="flex-1 text-break"
                                                                            >
                                                                                <div>
                                                                                    Phone
                                                                                </div>
                                                                                <div
                                                                                    class=""
                                                                                >
                                                                                    {{
                                                                                        user.phone_number ??
                                                                                        "not updated"
                                                                                    }}
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <i
                                                                                    class="fas text-success fa-lg fa-fw me-2 fa-check-circle"
                                                                                ></i>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="list-group-item d-flex align-items-center"
                                                                        >
                                                                            <div
                                                                                class="flex-1 text-break"
                                                                            >
                                                                                <div>
                                                                                    Email
                                                                                    address
                                                                                </div>
                                                                                <div
                                                                                    class=""
                                                                                >
                                                                                    <a
                                                                                        href="https://seantheme.com/cdn-cgi/l/email-protection"
                                                                                        class="__cf_email__"
                                                                                        data-cfemail="7d0e080d0d120f093d0e181c130915181018531e1210"
                                                                                        >[email&#160;protected]</a
                                                                                    >
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <i
                                                                                    class="fas text-success fa-lg fa-fw me-2 fa-check-circle"
                                                                                ></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="card-arrow"
                                                                    >
                                                                        <div
                                                                            class="card-arrow-top-left"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-top-right"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-bottom-left"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-bottom-right"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                id="privacyAndSecurity"
                                                                class="mb-5"
                                                            >
                                                                <h4>
                                                                    <i
                                                                        class="far fa-copyright fa-fw text-theme"
                                                                    ></i>

                                                                    security
                                                                </h4>
                                                                <p>
                                                                    Limit the
                                                                    account
                                                                    visibility
                                                                    and the
                                                                    security
                                                                    settings for
                                                                    your
                                                                    Account.
                                                                </p>
                                                                <div
                                                                    class="card"
                                                                >
                                                                    <div
                                                                        class="list-group list-group-flush"
                                                                    >
                                                                        <div
                                                                            class="list-group-item d-flex align-items-center"
                                                                        >
                                                                            <div
                                                                                class="flex-1 text-break"
                                                                            >
                                                                                <div>
                                                                                    Enabled
                                                                                    2
                                                                                    Authentication
                                                                                </div>
                                                                                <div
                                                                                    class="d-block d-xl-flex align-items-center"
                                                                                >
                                                                                    <div
                                                                                        class="d-flex align-items-center"
                                                                                    >
                                                                                        <i
                                                                                            class="fa fa-circle fs-8px fa-fw text-muted me-1"
                                                                                        ></i>
                                                                                        Disabled
                                                                                    </div>
                                                                                    <span
                                                                                        class="bg-warning-transparent-1 text-warning ms-xl-3 mt-1 d-inline-block mt-xl-0 px-1 rounded-sm"
                                                                                    >
                                                                                        <i
                                                                                            class="fa fa-exclamation-circle text-warning fs-12px me-1"
                                                                                        ></i>
                                                                                        <span
                                                                                            class="text-warning"
                                                                                        >
                                                                                            Recommended
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <a
                                                                                    href="#modalEdit"
                                                                                    data-bs-toggle="modal"
                                                                                    class="btn btn-outline-default w-100px"
                                                                                    >Enabled</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="card-arrow"
                                                                    >
                                                                        <div
                                                                            class="card-arrow-top-left"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-top-right"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-bottom-left"
                                                                        ></div>
                                                                        <div
                                                                            class="card-arrow-bottom-right"
                                                                        ></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mb-1" />
                                                </div>
                                                <div class="card-arrow">
                                                    <div
                                                        class="card-arrow-top-left"
                                                    ></div>
                                                    <div
                                                        class="card-arrow-top-right"
                                                    ></div>
                                                    <div
                                                        class="card-arrow-bottom-left"
                                                    ></div>
                                                    <div
                                                        class="card-arrow-bottom-right"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>

                                        <ProfileUpdate
                                            :user="user"
                                        ></ProfileUpdate>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </UserLayout>
</template>
