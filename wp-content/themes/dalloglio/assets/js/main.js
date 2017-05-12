jQuery(document).ready(function($) {
    var App = function() {
        return {
            init: function() {
                $('.thumbnail').matchHeight({
                    byRow: true,
                    property: 'height',
                    target: null,
                    remove: false
                });
            }
        }
    }();

    App.init();
});
