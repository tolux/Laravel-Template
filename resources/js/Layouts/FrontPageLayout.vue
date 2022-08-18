<script setup>
import { ref } from "vue";
import LoginPage from "@/Pages/Auth/LoginPage.vue";

const isLogin = ref(false);
const close = () => {
    isLogin.value = false;
};
</script>
<template>
    <login-page v-if="isLogin" @close="close" :isLogin="isLogin" />
    <div class="stick_nav">
        <nav class="navbar navbar-expand-lg navbar-light p-2">
            <a class="navbar-brand"> Logo here </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarSupportedContent"
            >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#0"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <a class="nav-link" :to="{ name: 'Faq' }"> FAQ </a>
                    <li class="nav-item">
                        <button
                            @click="isLogin = !isLogin"
                            style="background-color: #ef4060"
                            class="btn px-3 text-white"
                            target="_blank"
                            href="https://medium.com/@nextpayday/"
                        >
                            Login
                        </button>
                    </li>
                </ul>
                <!-- <a v-if="!tabtrue" :to="{ name: 'LoginPage' }">
            <a id="login" class="btn my-2 my-sm-0"> Login </a>
          </a> -->
            </div>
        </nav>
    </div>
    <header class="header overflow-hidden">
        <div class="row p-5 align-items-center">
            <div class="col-md-6 mt-5">
                <div class="header_right position-relative">
                    <!-- <img
                        style="
                            transform: rotate(180deg);
                            z-index: -1;
                            top: -600px;
                            left: -200px;
                            width: 400px;
                        "
                        src="/front/bg.png"
                        alt="background"
                        srcset=""
                        class="position-absolute"
                    /> -->
                    <h1 class="display-2">
                        Empower Your Business
                        <br />
                        <span class="fw-bolder"> Better & Faster. </span>
                    </h1>
                    <button
                        style="background-color: #ef4060"
                        class="border btn-lg btn text-capitalize rounded-pill mt-3 fs-4 btn-outline-light px-3 text-white fw-bold"
                    >
                        get started
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header_right">
                    <img
                        class="img-fluid"
                        src="/front/relax.png"
                        alt=""
                        srcset=""
                    />
                </div>
            </div>
        </div>
    </header>
    <section
        style="background-color: #fafaff"
        class="mt-5 position-relative py-5 overflow-hidden"
    >
        <div class="container">
            <ul class="xenbur-grid-bar">
                <li class="item-1"></li>
                <li class="item-2"></li>
                <li class="item-3"></li>
                <li class="item-4"></li>
                <li class="item-5"></li>
                <li class="item-6"></li>
            </ul>

            <div class="px-3 mt-5 position-relative">
                <img class="note_img" src="/front/bbd.png" alt="" />
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h4 class="display-4 fw-bold">
                            Get the Best Data offer with <br />
                            Data fast
                        </h4>
                        <p class="lead note_p">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Unde, sequi quis! Iste dolore officiis illum
                            iure expedita dolorum pariatur vel quibusdam, totam
                        </p>
                    </div>
                </div>
            </div>

            <div class="core_feature">
                <h2 class="display-4 fw-bold text-center">Core Feature</h2>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-4">
                        <div class="p-2 text-center">
                            <span
                                style="
                                    width: 100px;
                                    height: 100px;
                                    display: inline-block;
                                    line-height: 100px;
                                "
                                class="rounded-circle bg-white text-center shadow"
                                >icon</span
                            >
                            <h4 class="mt-3">Mobile Data</h4>
                            <p class="mt-3 lead">
                                It's the speaker that you can take anywhere.
                                Enjoy your favorite music where is an Humble &
                                dumble.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-2 text-center">
                            <span
                                style="
                                    width: 100px;
                                    height: 100px;
                                    display: inline-block;
                                    line-height: 100px;
                                "
                                class="rounded-circle bg-white text-center shadow"
                                >icon</span
                            >
                            <h4 class="mt-3">Mobile Data</h4>
                            <p class="mt-3 lead">
                                It's the speaker that you can take anywhere.
                                Enjoy your favorite music where is an Humble &
                                dumble.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-2 text-center">
                            <span
                                style="
                                    width: 100px;
                                    height: 100px;
                                    display: inline-block;
                                    line-height: 100px;
                                "
                                class="rounded-circle bg-white text-center shadow"
                                >icon</span
                            >
                            <h4 class="mt-3">Mobile Data</h4>
                            <p class="mt-3 lead">
                                It's the speaker that you can take anywhere.
                                Enjoy your favorite music where is an Humble &
                                dumble.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5 px-3 position-relative z-10">
            <div style="background-color: #000c35" class="py-5">
                <h6 style="color: #ef4060" class="text-uppercase text-center">
                    Subscribe now
                </h6>
                <h1 class="mt-3 text-center fw-bold text-white">
                    Get Every Single
                    <br />
                    Updates From here.
                </h1>
                <div class="input_cover p-3 mt-5">
                    <input
                        style="
                            border-color: #404a6d !important;
                            background-color: transparent;
                        "
                        class="input_cover round p-3 border-5 border"
                        type="text"
                        placeholder="Enter your Email"
                    />
                    <div class="text-center">
                        <button
                            style="background-color: #ef4060 !important"
                            class="btn text-uppercase mt-3 p-3 text-white"
                        >
                            submit
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <footer class="px-3 position-relative z-10 mt-5">
            <div class="bg-white py-5 text-center">
                <img src="" alt="logo here" />

                <p class="lead footer_text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Veniam ea rerum qui dignissimos impedit facilis! Natus
                    molestiae explicabo volupta.
                </p>
                <div class="mt-4">
                    <span class="rounded-circle footer_icons text-center">
                        <svg
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 310 310"
                            xml:space="preserve"
                        >
                            <g id="XMLID_834_">
                                <path
                                    id="XMLID_835_"
                                    d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
		c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
		V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
		C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
		c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"
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
                    </span>
                    <span class="rounded-circle footer_icons text-center">
                        <svg
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 310 310"
                            xml:space="preserve"
                        >
                            <g id="XMLID_826_">
                                <path
                                    id="XMLID_827_"
                                    d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
		c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
		c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
		C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
		c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
		c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
		c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
		c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
		c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
		c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
		c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
		C307.394,57.037,305.009,56.486,302.973,57.388z"
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
                    </span>
                    <span class="rounded-circle footer_icons text-center">
                        <svg
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 310 310"
                            style="enable-background: new 0 0 310 310"
                            xml:space="preserve"
                        >
                            <g id="XMLID_801_">
                                <path
                                    id="XMLID_802_"
                                    d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
		C77.16,101.969,74.922,99.73,72.16,99.73z"
                                />
                                <path
                                    id="XMLID_803_"
                                    d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
		c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z"
                                />
                                <path
                                    id="XMLID_804_"
                                    d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
		c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
		c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
		C310,145.43,300.549,94.761,230.454,94.761z"
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
                    </span>
                    <span class="rounded-circle footer_icons text-center">
                        <svg
                            version="1.1"
                            id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 310 310"
                            xml:space="preserve"
                        >
                            <g id="XMLID_822_">
                                <path
                                    id="XMLID_823_"
                                    d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
		C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
		C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
		c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
		c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
		C204.394,157.263,202.325,160.684,199.021,162.41z"
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
                    </span>
                </div>
                <p class="text-center">tel : 090 3454 9898</p>
            </div>
        </footer>
    </section>
</template>

<script>
export default {
    components: {
        LoginPage,
    },
};
</script>

<style scoped>
.core_feature {
    margin-top: 11rem;
}
.note_img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.footer_icons svg {
    height: 22px;
    fill: #626981;
    display: inline-block;
}
.footer_icons {
    background-color: #f0f3ff;
    color: #626981;
    cursor: pointer;
    width: 50px;
    height: 50px;
    line-height: 50px;
    display: inline-block;
    margin: 10px;
}
.footer_icons:hover svg {
    fill: #fff;
}
.footer_icons:hover {
    background-color: #ef4060 !important;
    color: #fff !important;
}
.stick_nav {
    padding: 0 20px;

    box-shadow: 0 16px 32px 0 rgb(0 0 0 / 2%);
}
.xenbur-grid-bar {
    top: 0;
    position: absolute;
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    min-height: 1px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    overflow: hidden;
    /* height: 9999px; */
}
.xenbur-grid-bar li {
    background-color: rgba(51, 62, 72, 0.1);
    /* height: 9999px; */
    border-radius: 100px 100px 100px 100px;
    width: 1px;
}
.xenbur-grid-bar li {
    min-height: 1px;
    display: block;
}
.input_cover,
.footer_text,
.note_p {
    width: 700px;
    margin: 0 auto;
    /* display: inline-block; */
}

@media screen and (max-width: 767px) {
    .header_right {
        text-align: center;
        margin-bottom: 4rem;
    }
}
@media screen and (max-width: 789px) {
    .input_cover,
    .footer_text,
    .note_p {
        width: 100%;
    }
}

.input_cover input {
    color: #fff;
}
.input_cover input:focus {
    outline: none;
}
.input_cover input::placeholder {
    color: rgb(198, 195, 195);
}
</style>
