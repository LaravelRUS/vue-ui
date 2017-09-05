<style lang="scss" scoped>
    @import "kernel";

    $size: 26px;
    $color: rgba($color-extra-light-black, .92);
    $text: $color-white;

    .tooltip {
        position: absolute;
        background: $color;
        color: $text;
        font-size: 12px;
        width: auto !important;
        display: block;
        float: left;
        max-width: 200px;
        line-height: $size;
        height: $size;
        padding: 0 10px;
        border-radius: 2px;
        font-weight: normal;
        font-style: normal;
        pointer-events: none;
        text-transform: none;
        opacity: 0;
        white-space: nowrap;
        text-shadow: 0 -1px 0 $color-black;
        transition:
            transform .3s $ui-animation-swift .2s,
            opacity .3s $ui-animation-swift .2s;
        box-shadow: $ui-box-shadow;
        z-index: 99;

        &:before {
            content: '';
            width: 0;
            height: 0;
            display: block;
            border: transparent 5px solid;
            position: absolute;
        }

        &.direction-bottom {
            left: 50%;
            transform: translate(-50%, $size * 2) scale(.9);
            bottom: 0;

            &:before {
                border-bottom-color: $color;
                top: -10px;
                left: 50%;
                margin-left: -5px;
            }
        }

        &.direction-left {
            left: 0;
            top: 50%;
            margin-left: -10px;
            transform: translate(-80%, -50%) scale(.9);

            &:before {
                border-left-color: $color;
                right: -10px;
                top: 50%;
                margin-top: -5px;
            }
        }
    }

    *:hover > .tooltip {
        opacity: 1;
        transition:
            transform .2s $ui-animation-bounce .4s,
            opacity .2s $ui-animation-bounce .4s !important;

        &.direction-bottom {
            transform: translate(-50%, $size + 10px) scale(1);
        }

        &.direction-left {
            transform: translate(-100%, -50%) scale(1);
        }
    }
</style>

<template>
    <span class="tooltip" :class="['direction-' + direction]">
        <slot></slot>
    </span>
</template>

<script>
    export default {
        props: {
            direction: {
                type: String,
                default: 'bottom'
            }
        }
    }
</script>
