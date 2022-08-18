<script setup>
import JetDangerButton from "@/Jetstream/DangerButton.vue";
import JetDialogModal from "@/Jetstream/DialogModal.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import SingleError from "@/Util/SingleError.vue";
import Input from "@/Util/Input.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetLabel from "@/Jetstream/Label.vue";
import { ref } from "vue";

const props = defineProps({
    user: Object,
});

const updateform = useForm({
    name: props.user.name,
    email: props.user.email,
    phone_number: props.user.phone_number,
    password: " ",
    token: "",
});
const checktoken = useForm({});

const confirmingNFtDeletion = ref(false);

const closeModal = () => {
    confirmingNFtDeletion.value = false;
};

const updateuser = () => {
    updateform.post(route("updateuser"), {
        onSuccess: () => closeModal(),
    });
};
const validateuser = () => {
    updateform.post(route("validateuser"), {
        onSuccess: () => (confirmingNFtDeletion.value = true),
    });
};
</script>
<template>
    <JetDialogModal :show="confirmingNFtDeletion" @close="closeModal">
        <template #title>
            Token Verification (<small>Enter the token sent to your Email</small
            >)
        </template>

        <template #content>
            <JetLabel for="code" value="Enter Token" />
            <JetInput
                id="code"
                v-model="updateform.token"
                type="text"
                class="mt-1 block w-full text-dark"
                required
                autofocus
            />
        </template>

        <template #footer>
            <JetButton
                class="ml-4"
                @click="updateuser"
                :disabled="updateuser.processing"
            >
                Submit
            </JetButton>

            <JetDangerButton class="ml-3" @click="closeModal">
                Cancel
            </JetDangerButton>
        </template>
    </JetDialogModal>
    <div class="tab-pane fade" id="profile-video">
        <div id="general" class="mb-5">
            <SingleError class="p-1" />
            <div class="card">
                <form
                    @submit.prevent="validateuser"
                    method="post"
                    autocomplete="off"
                >
                    <div class="card-body">
                        <Input
                            type="text"
                            v-model="updateform.name"
                            label="Name"
                        />
                        <Input
                            type="email"
                            v-model="updateform.email"
                            label="Email"
                        />
                        <Input
                            type="text"
                            v-model="updateform.phone_number"
                            label="Phone Number"
                        />
                        <Input
                            type="password"
                            v-model="updateform.password"
                            label="Password"
                        />

                        <div class="w-100px mt-3">
                            <button
                                type="submit"
                                class="btn btn-success w-100px d-flex"
                            >
                                <span> Update </span>
                                <img
                                    v-if="updateform.processing"
                                    width="20"
                                    class="ml-2"
                                    src="/assets/img/loading.gif"
                                />
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {};
    },
};
</script>
