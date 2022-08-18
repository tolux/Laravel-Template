<script setup>
defineProps({
    mess: String,
    topval: Number,
    leftval: Number,
    toolshow: Boolean,
});
</script>
<template>
    <transition
        leave-active-class="transition ease-in duration-1000"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            v-show="toolshow"
            :style="{ top: topval + 'px', left: leftval + 'px' }"
            class="maintool text-primary"
        >
            {{ mess }}
        </div>
    </transition>
</template>
<style scoped>
.maintool {
    position: fixed;
    width: auto;
    padding: 0.6rem;
    border-radius: 0.3rem;
    font-size: 1rem;
    background: #fff;
    border: 1px solid #d1d9e7;
    top: 0px;
    z-index: 999999999;
}
</style>
