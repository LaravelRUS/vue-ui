<style lang="scss" scoped>
    @import "kernel";

    .option {
        cursor: pointer;
        display: block;
        padding: 0 $ui-padding;
        height: $ui-height - 2px;
        line-height: $ui-height - 2px;
        color: $color-text;

        &:hover {
            background: $color-bg;
            color: $color-black;
        }
    }
</style>

<template>
    <article class="option">
        <slot></slot>
    </article>
</template>

<script>
import Props from "kernel/Props";

export default {
    props: {
        ...Props
    },
    data() {
        return {
            over: false,
        };
    },
    mounted: function() {

    },
    methods: {

    }
}
</script>
