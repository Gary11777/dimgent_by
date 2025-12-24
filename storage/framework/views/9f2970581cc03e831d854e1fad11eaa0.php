<div id="turnstile-widget"></div>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" async defer></script>
<script>
    window.onloadTurnstileCallback = function () {
        turnstile.render('#turnstile-widget', {
            sitekey: '<?php echo e(config('turnstile.turnstile_site_key')); ?>',
            callback: function(token) {
                // Token is automatically added to the form via the hidden input
            },
        });
    };
</script>
<?php /**PATH D:\Projects\laravel_herd_projects\dimgent_by\resources\views/components/turnstile.blade.php ENDPATH**/ ?>