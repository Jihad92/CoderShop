<script setup>
import { Head, Link } from "@inertiajs/vue3";

const props = defineProps([
    'products',
]);
</script>

<template>
    {{  products }}
</template>
