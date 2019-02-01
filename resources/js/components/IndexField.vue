<template>
    <span v-if="field.value">
        <router-link :to="{
            name: 'detail',
            params: {
                resourceName: $parent.resourceName,
                resourceId: field.value
            }
        }"
        class="no-underline dim text-primary font-bold">
            {{ field.value }}
        </router-link>
    </span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
