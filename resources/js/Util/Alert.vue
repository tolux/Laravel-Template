<script setup>
import { computed } from "vue";
import { ref, onMounted } from "vue";

defineProps({
    message: Object,
    shownof: Boolean,
});
</script>
<template>
    <transition name="slide-fade">
        <div v-if="message && shownof" class="noft_mi m-2">
            <div class="toast show">
                <div class="toast-header">
                    <i class="far fa-bell text-muted me-2"></i>
                    <strong class="me-auto">Notifications</strong>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="toast"
                    ></button>
                </div>
                <div v-if="message.errmess" class="toast-body text-danger">
                    <p>
                        <strong>
                            {{ message.errmess }}
                        </strong>
                    </p>
                </div>

                <div v-if="message.message" class="toast-body text-success">
                    <p>
                        <strong>
                            {{ message.message }}
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </transition>
</template>

<style scoped>
.noft_mi {
    position: fixed;

    z-index: 99999;
    top: 10px;
    right: 10px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    width: 350px;
    max-width: 100%;
    font-size: 0.8125rem;
    pointer-events: auto;
    background-color: rgba(var(--app-component-dropdown-bg-rgb), 0.98);
    background-clip: padding-box;
    border: 1px solid var(--app-component-dropdown-border-color);

    border-radius: 6px;
}
.slide-fade-enter-active {
    transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.4s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(150px);
    opacity: 0;
}
</style>

<script>
export default {
    data() {
        return {
            timeout: null,
        };
    },

    watch: {
        message: {
            deep: true,
            handler() {
                if (this.timeout) {
                    clearTimeout(this.timeout);
                }
                this.$emit("unchangeshownof");

                this.timeout = setTimeout(() => {
                    this.$emit("changeshownof");
                }, 3000);
            },
        },
    },
};
</script>
