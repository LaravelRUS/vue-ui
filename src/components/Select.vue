<style lang="scss" scoped>
    @import "kernel";

    .select {
        @include component();

        .current {
            min-width: 100px;
            padding: 0 ($ui-padding + $ui-height) 0 $ui-padding;
            border-radius: 2px;
            box-shadow: 0 0 0 1px $color-border;
            height: $ui-height;
            line-height: $ui-height;
            background: $color-white;
            cursor: pointer;
            user-select: none;

            .value {
                &.default {
                    color: $color-extra-light-silver !important;
                }
            }

            .arrow {
                top: 0;
                right: 0;
                width: $ui-height;
                height: $ui-height;
                position: absolute;
                display: flex;
                justify-content: center;
                border: none;
                background: none;
                align-items: center;
                outline: none;
                cursor: pointer;
                transform: rotateZ(0deg);
                transform-origin: 50%;
                transition: transform .3s $ui-animation-swift;

                svg {
                    display: block;
                    fill: $color-gray;
                    width: 10px;
                    height: 10px;
                }
            }

            &:hover {
                box-shadow: 0 0 0 1px $color-border-hover;
                transition: box-shadow .2s $ui-animation-swift;

                .arrow {
                    svg {
                        transition: fill .2s $ui-animation-swift;
                        fill: $color-light-silver;
                    }

                    &:active {
                        svg {
                            fill: $color-silver;
                        }
                    }
                }
            }
        }

        .dropdown {
            min-width: 100px;
            background: #fff;
            position: absolute;
            width: 100%;
            border-radius: 0 0 2px 2px;
            padding: 3px 0;
            z-index: 98;
            box-shadow:
                0 -1px 0 0 $color-white,
                0 0 0 1px $color-border-hover,
                $ui-box-shadow;
            pointer-events: none;
            opacity: 0;
            overflow-x: visible;
            overflow-y: auto;
            transform: translateY(-10px);
            transition:
                opacity .2s $ui-animation-swift,
                transform .2s $ui-animation-swift;

            &::-webkit-scrollbar {
                width: 3px;

                &-thumb {
                    border-radius: 1px;
                    background: $color-border;

                    &:hover {
                        background: $color-main;
                    }
                }
            }
        }

        &.active {
            .current {
                box-shadow: 0 0 0 1px $color-border-hover;
                border-radius: 2px 2px 0 0;

                .value {
                    color: $color-main;
                }

                .arrow {
                    transform: rotateZ(-180deg) scale(.7);
                    svg {
                        fill: $color-main;
                    }
                }
            }

            .dropdown {
                pointer-events: all;
                opacity: 1;
                transform: translateY(0);
                transition:
                    opacity .3s $ui-animation-swift,
                    transform .3s $ui-animation-swift;
            }
        }

        & /deep/ .loader {
            border-color: $color-main;
            .spinner {
                box-shadow: none;
            }
        }
    }
</style>

<template>
    <section class="select" :class="{active: isActive, disabled: disabled}">
        <input type="hidden" :name="name" :value="value" v-if="value" />
        <ui-loading v-if="loading"></ui-loading>

        <section class="current" @mouseover="hover(true)" @mouseleave="hover(false)" @click="toggle">
            <ui-tooltip direction="left" v-if="title">{{ title }}</ui-tooltip>

            <span v-if="text" class="value">{{ text }}</span>
            <span v-else="text" class="value default">{{ placeholder }}</span>

            <button class="arrow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284.929 284.929">
                    <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,
                        2.856L142.466,174.441 L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,
                        2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082 c0,2.473,0.953,4.663,2.856,6.565l133.043,
                        133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647 c1.902-1.903,
                        2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"></path>
                </svg>
            </button>
        </section>

        <section class="dropdown" :style="{'max-height': (size * 30 + 6) + 'px'}">
            <slot></slot>
        </section>
    </section>
</template>

<script>
    import Props from "kernel/Props";

    export default {
        props: {
            ...Props,

            /**
             * Is in active status
             */
            active: {
                type: Boolean,
                default: false,
            },

            /**
             * Maximum elements
             */
            size: {
                type: Number,
                default: 5
            },

            /**
             * Value for empty element
             */
            placeholder: {
                type: String,
                default: 'Select a value...'
            }
        },
        computed: {
            changeState() {
                if (this.isActive) {
                    this.$emit('open', this);
                } else {
                    this.$emit('close', this);
                }

                this.$emit('toggle', this.isActive);
            }
        },
        data() {
            return {
                text: '',
                value: null,
                over: false,
                isActive: this.active,
            };
        },
        mounted: function () {
            this.$nextTick(() => {
                document.addEventListener('click', () => {
                    if (!this.over) {
                        this.hide();
                    }
                }, false);
            });

            this.$on('-option-select', value => {
                this.select(value);
            })
        },
        methods: {
            toggle() {
                this.isActive = !this.isActive;
            },
            show() {
                this.isActive = true;
            },
            hide() {
                this.isActive = false;
            },
            hover(status) {
                this.over = status;
            },
            select(value) {
                this.value = value.value || null;
                this.text = value.text || '';

                this.$emit('select', this.value);
            }
        }
    }
</script>
