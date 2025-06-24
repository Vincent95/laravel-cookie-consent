<script>
  window.__COOKIE_CATEGORIES__ = @json($cookieConfig['cookie_categories']);
</script>

{{-- <script src="{{ url('vendor/laravel-cookie-consent/assets/js/script.js') }}"></script> --}}
{{-- <script src="{{ route('laravel-cookie-consent.script-utils') }}"></script> --}}

{{-- <script type="text/javascript">
    "use strict";
    // Load analytics/tracking services based on preferences

    // Then define your service loader
    window.loadCookieCategoriesEnabledServices = function () {
        const preferences = getCookiePreferences();
        if (!preferences) return;

        console.log('Loading services based on preferences:', preferences);

        @foreach ($cookieConfig['cookie_categories'] as $category => $details)
                @if(isset($details['js_action']))
            try {
            if (preferences?.{!! Str::slug($category) !!}) {
                const action = {!! json_encode($details['js_action']) !!};
                if (typeof window[action] === "function") {
                    window[action]();
                }
            }
        } catch (exception) {
            console.info(exception)
        }
        @endif
        @endforeach
    }

    document.addEventListener('DOMContentLoaded', function () {
        try {
            loadCookieCategoriesEnabledServices();
        } catch (e) {
            console.info(e);
        }
    })
</script> --}}
