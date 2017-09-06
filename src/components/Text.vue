<style lang="scss" scoped>
    @import "kernel";

    .input {
        @include component();

        .container {
            height: $ui-height;
            line-height: $ui-height;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
            background: $color-white;
            position: relative;
            will-change: background, box-shadow;
            box-shadow: 0 0 0 1px $color-border;
            border-radius: 2px;
            z-index: 1;

            &:hover {
                box-shadow: 0 0 0 1px $color-border-hover;
            }

            & /deep/ .loader {
                box-shadow: 0 0 0 1px $color-border;
                border-color: $color-main;
                .spinner {
                    box-shadow: none;
                }
            }
        }

        input {
            height: inherit;
            display: block;
            float: left;
            width: 100%;
            box-sizing: border-box;
            padding: 0 0 0 $ui-padding;
            outline: none;
            border: none;
            background: none;
            margin: 0;
            appearance: textfield;
            color: $color-text;
            transition: color .2s $ui-animation-swift;
            position: relative;
            z-index: 2;
        }

        .placeholder {
            top: 1px;
            left: $ui-padding + 1px;
            width: 100%;
            font-size: $font-size;
            height: inherit;
            user-select: none;
            position: absolute;
            pointer-events: none;
            will-change: transform, color;
            color: $color-description;
            transform: translate(0, 0) scale(1);
            transform-origin: 0 50%;
            transition: transform .3s $ui-animation-swift .2s,
            color .3s $ui-animation-swift .2s;
            z-index: 3;
        }

        .icons {
            position: relative;
            height: inherit;
            padding: 0 0 0 10px;
            display: flex;
            justify-content: flex-end;
            flex-wrap: nowrap;
            align-items: center;
            float: right;
            z-index: 3;
            color: $color-description;

            & > * {
                margin-right: 10px !important;
            }
        }

        &.disabled {
            .container {
                background: $color-light-disabled !important;
                box-shadow: 0 0 0 1px $color-light-disabled-text !important;
                transition: background .3s $ui-animation-swift, box-shadow .1s $ui-animation-swift;
            }

            input,
            .placeholder {
                color: $color-light-disabled-text !important;
                transition: color .3s $ui-animation-swift;
            }
        }

        &.active {
            .placeholder {
                color: $color-text;
                transform: translate(-$ui-padding, -$ui-height + 6px) scale(.82);
                transition: transform .3s cubic-bezier(0.245, 1.600, 0.560, 0.925),
                color .3s $ui-animation-swift;
            }
        }

        &.focus {
            z-index: 5;

            .container {
                transition: box-shadow .1s $ui-animation-swift;
                box-shadow: 0 0 0 1px $color-main;
            }
        }
    }
</style>

<template>
    <section class="input" :class="{
        active: isActive,
        focus: isFocus,
        disabled: disabled
    }">
        <ui-tooltip v-if="title">{{ title }}</ui-tooltip>

        <div class="container">
            <span class="placeholder" v-if="placeholder">
                {{ placeholder }}
            </span>

            <ui-loading v-if="loading"></ui-loading>

            <v-input v-model="realValue" :value="value" @input="onInput" @blur="onBlur" @focus="onFocus"
                :name="name"
                :tag="type"
                :disabled="disabled"></v-input>

            <div class="icons">
                <slot name="icons"></slot>
            </div>
        </div>
    </section>
</template>

<script>
    import Enum from "kernel/Enum";
    import Props from "kernel/Props";

    export default {
        model: {
            prop: 'realValue',
            event: 'input'
        },
        props: {
            ...Props,
            /**
             * Input name
             */
            type: Enum(['tel', 'url', 'text', 'email', 'search', 'password'], 'text'),

            /**
             * Text placeholder
             */
            placeholder: {
                type: String,
                default: ''
            },

            /**
             *  Input type text
             */
            value: {
                type: String,
                default: '',
            }
        },
        data() {
            return {
                /**
                 * Input has focus
                 */
                isFocus:      false,

                /**
                 * Input has value
                 */
                isActive:     false,

                /**
                 * Input was changed or user interacted with this field
                 */
                wasChanged:   false,

                /**
                 * Real input value (Memory separation with "props: value")
                 */
                realValue:    this.value
            };
        },
        mounted() {
            if (this.value) {
                // Notify for default value
                this.$emit('input', this.value);
                this.isActive = true;
            }
        },
        methods: {
            onFocus(event) {
                this.$emit('focus', event);

                this.isFocus = true;
            },
            onBlur(event) {
                this.$emit('blur', event);

                if (this.realValue.trim().length !== this.realValue.length) {
                    this.realValue = this.realValue.trim();
                }

                this.isFocus = false;
                this.isActive = this.realValue.length !== 0;
                this.wasChanged = true;
            },
            onInput(event) {
                this.$emit('input', event);

                this.isActive = this.realValue.trim().length !== 0;
            }
        }
    }
</script>
