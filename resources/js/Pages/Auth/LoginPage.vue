<script setup>
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";
import RegisterPage from "@/Pages/Auth/RegisterPage.vue";

import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import { ref } from "vue";

defineProps({
    canResetPassword: Boolean,
    isLogin: Boolean,
    status: String,
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const isReg = ref(false);
const seflog = ref(true);
const switchauth = () => {
    isReg.value = true;
    seflog.value = false;
};
const submit = () => {
    form.transform((data) => ({
        ...data,
        remember: form.remember ? "on" : "",
    })).post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
const changereg = () => {
    isReg.value = false;
    seflog.value = true;
};
const emit = defineEmits(["close"]);

const close = () => {
    emit("close");
};
</script>
<template>
    <section class="h-custom">
        <img
            @click="close"
            width="20"
            style="z-index: 2"
            class="position-absolute top-5 right-5 cursor-pointer"
            src="/front/close.png"
            alt="close"
        />
        <register-page @changereg="changereg" :isReg="isReg" />
        <div v-if="isLogin && seflog" class="card p-3">
            <div class="col card-body">
                <h4>Login</h4>
                <small class="mb-3">Acess to your Wenco Account</small>
                <div
                    v-if="status"
                    class="mb-4 font-medium text-sm text-green-600"
                >
                    {{ status }}
                </div>
                <JetValidationErrors class="mb-4" />
                <form @submit.prevent="submit">
                    <div class="mt-4">
                        <JetLabel for="email" value="Email" />
                        <JetInput
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="mt-1 block w-full"
                            required
                            autofocus
                        />
                    </div>
                    <div class="mt-4">
                        <JetLabel for="password" value="Password" />
                        <JetInput
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="mt-1 block w-full"
                            required
                            autocomplete="current-password"
                        />
                    </div>

                    <div
                        class="mt-4 d-flex justify-content-between align-items-center"
                    >
                        <label class="flex items-center">
                            <JetCheckbox
                                v-model:checked="form.remember"
                                name="remember"
                            />
                            <span class="ml-2 text-sm text-gray-600"
                                >Remember me</span
                            >
                        </label>
                        <Link
                            :href="route('password.request')"
                            class="underline text-sm text-dark hover:text-gray-900"
                        >
                            Forgot your password?
                        </Link>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button
                            type="submit"
                            class="btn btn-primary btn-lg d-flex align-items-center"
                            :disabled="form.processing"
                        >
                            Login
                            <span v-if="form.processing" class="ml-2">
                                <img
                                    width="20"
                                    src="/front/loading.gif"
                                    alt=""
                                    srcset=""
                                />
                            </span>
                        </button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">
                            Don't have an account?
                            <a @click="switchauth" href="#!" class="link-danger"
                                >Register</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    components: {
        RegisterPage,
    },
};
</script>

<style scoped>
.divider:after,
.divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}
.h-custom {
    /* height: calc(100% - 73px); */
    background: #fff;
    position: fixed;
    top: 1rem;
    left: 50%;
    transform: translateX(-50%);
    width: 500px;
    z-index: 40;
    /* margin: 0 auto; */
}
@media (max-width: 767px) {
    .h-custom {
        width: 95%;
    }
}
</style>
