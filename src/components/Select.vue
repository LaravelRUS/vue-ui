<style lang="scss" scoped>
    @import "kernel";

    .select {
        @include component();

        .current {
            padding: 0 ($ui-padding + $ui-height) 0 $ui-padding;
            border-radius: 2px;
            box-shadow: 0 0 0 1px $color-border;
            height: $ui-height;
            line-height: $ui-height;
            background: $color-white;
            cursor: pointer;
            user-select: none;

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
            top: $ui-height;
            background: #fff;
            position: absolute;
            width: 100%;
            border-radius: 0 0 2px 2px;
            padding: 4px 0;
            z-index: 98;
            box-shadow:
                0 -1px $color-white,
                0 0 0 1px $color-border,
                $ui-box-shadow;
            pointer-events: none;
            opacity: 0;
            transform: translateY(-10px);
            transition:
                box-shadow .2s $ui-animation-swift,
                opacity .2s $ui-animation-swift,
                transform .2s $ui-animation-swift;
        }

        &.active {
            .current {
                box-shadow: 0 0 0 1px $color-main;
                border-radius: 2px 2px 0 0;

                .value {
                    color: $color-main;
                }

                .arrow {
                    transform: rotateZ(-180deg);
                    svg {
                        fill: $color-main;
                    }
                }
            }

            .dropdown {
                box-shadow:
                    0 -1px $color-border,
                    0 0 0 1px $color-main,
                    $ui-box-shadow;
                pointer-events: all;
                opacity: 1;
                transform: translateY(0);
                transition:
                    box-shadow .3s $ui-animation-swift,
                    opacity .3s $ui-animation-swift,
                    transform .3s $ui-animation-swift;
            }
        }
    }
</style>

<template>
    <section class="select" :class="{active: isActive}">
        <section class="current" @mouseover="hover(true)" @mouseleave="hover(false)" @click="toggle">
            <span class="value">Выпадашка</span>

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

        <section class="dropdown">
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
                isActive: this.active,
                over: false,
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
            }
        }
    }
</script>
