<!-- Cookie Preferences Modal -->
<div id="cookie-preferences-modal" class="cookie-preferences-modal" aria-hidden="true">
    <div class="cookie-preferences-modal-overlay" tabindex="-1"></div>
    <div class="cookie-preferences-modal-content" role="document">
        <div class="cookie-preferences-modal-header">
            <h2 id="cookie-modal-title" class="cookie-preferences-modal-title">
                {{ $cookieConfig['cookie_modal_title'] }}
            </h2>
            <button type="button" class="cookie-preferences-modal-close" aria-label="Close cookie preferences">
                <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                     aria-hidden="true">
                    <path d="M12 4L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 4L12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="cookie-preferences-modal-body">
            <p class="cookie-preferences-intro">
                {{ $cookieConfig['cookie_modal_intro'] }}
            </p>

            <div class="cookie-categories">
                @foreach ($cookieConfig['cookie_categories'] as $category => $details)
                    @if ($details['enabled'])
                        <div class="cookie-category cookie-category-{{ $category }}">
                            <div class="cookie-category-header">
                                <h3 class="cookie-category-title">{{ $details['title'] }}</h3>
                                <label class="cookie-toggle">
                                    <input type="checkbox"
                                           {{ $details['locked'] ? 'disabled checked' : '' }}
                                           data-category="{{ $category }}"
                                           aria-label="{{ $details['title'] }} toggle">
                                    <span class="cookie-toggle-slider"></span>
                                </label>
                            </div>
                            <p class="cookie-category-description">{{ $details['description'] }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="cookie-preferences-modal-footer">
            <div class="cookie-preferences-modal-button-group">
                <button type="button" class="cookie-consent-accept primary-button">
                    {{ $cookieConfig['cookie_accept_btn_text'] }}
                </button>
                <button type="button" class="cookie-consent-reject primary-button">
                    {{ $cookieConfig['cookie_reject_btn_text'] }}
                </button>
            </div>
            <div class="cookie-preferences-modal-save">
                <button type="button" class="cookie-preferences-save primary-button">
                    {{ $cookieConfig['cookie_preferences_save_text'] }}
                </button>
            </div>
        </div>
    </div>
</div>
