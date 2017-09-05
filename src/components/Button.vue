<style lang="scss" scoped>
    @import "kernel";

    .button {
        @include component;

        a, button {
            height: $ui-height;
            line-height: $ui-height + 2px;
            display: block;
            position: relative;
            float: left;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
            padding: 0 $ui-padding;
            outline: none;
            border: none;
            background: none;
            text-decoration: none;
            color: $color-white;
            margin: 0;
            border-radius: 2px;
            font-weight: bold;
            text-transform: uppercase;
            background: $color-main;
            letter-spacing: 1px;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-shadow: 0 0 0 1px $color-main;
            font: {
                size: $font-size - 1px;
                family: $font-family;
            }
            transition: color .3s $ui-animation-swift,
            box-shadow .3s $ui-animation-swift,
            background .3s $ui-animation-swift;
            will-change: color, box-shadow, background;

            &[href="#"] {
                cursor: default;
            }

            &:hover {
                box-shadow: 0 0 0 1px darken($color-main-hover, 10%);
                background: $color-main-text;
            }

            &:active {
                transition: none !important;
                box-shadow: 0 0 0 1px desaturate(darken($color-main, 30%), 15%);
                background: desaturate(darken($color-main, 10%), 30%);
            }

            &[disabled],
            &:disabled {
                cursor: default;
                box-shadow: 0 0 0 1px $color-disabled;
                color: $color-disabled-text;
                background: $color-disabled;
            }

        }

        & /deep/ .loader {
            border-color: $color-main;
            .spinner {
                box-shadow: none;
            }
        }

        &[data-type="simple"] {
            a, button {
                border-radius: 3px;
                box-shadow: 0 0 0 1px $color-main;
                color: $color-main;
                background: $color-white;

                &:hover {
                    box-shadow: 0 0 0 1px darken($color-main-hover, 15%);
                    color: $color-main-text;
                    background: $color-bg;
                }

                &:active {
                    transition: none !important;
                    box-shadow: 0 0 0 1px desaturate(darken($color-main, 20%), 30%);
                    color: desaturate(darken($color-main, 20%), 30%);
                }

                &[disabled],
                &:disabled {
                    cursor: default;
                    box-shadow: 0 0 0 1px $color-disabled;
                    color: $color-disabled;
                    background: $color-bg;
                }
            }
        }
    }
</style>

<template>
    <div class="button" :data-type="type">
        <ui-loading v-if="loading"></ui-loading>

        <ui-tooltip v-if="title">{{ title }}</ui-tooltip>

        <template v-if="href">
            <a :href="href || '#'"
               :disabled="disabled"
               :target="'_' + target"
               @click="onClick"
            >
                <slot></slot>
            </a>
        </template>
        <template v-else="href">
            <button :disabled="disabled"
                    :name="name"
                    @click="onClick">
                <slot></slot>
            </button>
        </template>
    </div>
</template>

<script>
    import Enum from "kernel/Enum";
    import Props from "kernel/Props";

    export default {
        props: {
            ...Props,
            /**
             * Button type
             */
            type: Enum([
                'primary',
                'simple'
            ], 'primary'),

            /**
             * Button href target
             */
            target: Enum([
                'blank',
                'parent',
                'self',
                'top',
            ], 'self'),

            /**
             * Button href
             */
            href: {
                type: String,
                default: null
            },


        },
        methods: {
            onClick(event) {
                this.$emit('click', event);
            }
        }
    }
</script>