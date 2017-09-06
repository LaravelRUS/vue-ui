<script>
    export default {
        props: {
            tag: {
                type: String,
                required: true
            },
            value: {
                type: String,
                default: ''
            }
        },
        render: function(createElement) {
            let component = this;
            return createElement('input',
                {
                    domProps: {
                        type: component.tag,
                        value: component.value
                    },
                    on: {
                        input: function(event) {
                            component.value = event.target.value;
                            component.$emit('input', event.target.value);
                        },
                        focus: function(event) {
                            component.$emit('focus', event);
                        },
                        blur: function(event) {
                            component.$emit('blur', event);
                        },
                    }
                })
        }
    };
</script>
