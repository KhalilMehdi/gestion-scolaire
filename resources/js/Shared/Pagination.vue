<template>
    <ul class="pagination pagination-sm float-right">
        <li class="page-item" :class="{ disabled: !props.prev }">
            <Link class="page-link" :href="props.prev || '#'">«</Link>
        </li>
        <li class="page-item" v-for="(link, index) in computedLinks" :key="index" :class="{ active: link.active }">
            <Link class="page-link" :href="link.url || '#'">{{ link.label }}</Link>
        </li>
        <li class="page-item" :class="{ disabled: !props.next }">
            <Link class="page-link" :href="props.next || '#'">»</Link>
        </li>
    </ul>
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    links: {
        type: Array,
        required: true,
    },
    prev: {
        type: String,
        default: null,
    },
    next: {
        type: String,
        default: null,
    }
})

const computedLinks = computed(() => {
    let linksCopy = [...props.links];
    linksCopy.shift();
    linksCopy.pop();
    return linksCopy;
})
</script>

<style lang="scss" scoped></style>
