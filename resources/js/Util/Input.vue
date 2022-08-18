<script setup>
defineProps({
    type: String,
    label: String,
    modelValue: String,
});
defineEmits(["update:modelValue"]);
</script>

<template>
    <div class="form-group mb-3">
        <label class="form-label text-dark">{{ label }}</label>
        <input
            :type="type"
            class="form-control"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        />
    </div>
</template>
