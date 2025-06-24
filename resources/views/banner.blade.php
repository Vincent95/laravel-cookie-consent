<!-- Main Cookie Consent Banner -->
<div class="cookie-consent-root
    cookie-consent-hide
    {{ $cookieConfig['disable_page_interaction'] ? 'cookie-disable-interaction' : '' }}
    consent-layout-{{ $cookieConfig['consent_modal_layout'] ?? 'bar' }}
    theme-{{ $cookieConfig['theme'] ?? 'default' }}"
     data-cookie-prefix="{{ Str::slug($cookieConfig['cookie_prefix']) }}_{{ date('Y') }}"
     data-cookie-lifetime="{{ $cookieConfig['cookie_lifetime'] }}"
     data-reject-lifetime="{{ $cookieConfig['reject_lifetime'] }}"
     role="dialog"
     aria-modal="true"
     aria-label="Cookie consent banner"
>
    <div class="cookie-consent-container">
        <div class="cookie-consent-content-container">
            <div class="cookie-consent-content">
                <h2 class="cookie-consent-content-title">
                    {{ $cookieConfig['cookie_title'] }}
                </h2>
                <div class="cookie-consent-content-description">
                    <p>{{ $cookieConfig['cookie_description'] }}</p>
                </div>
            </div>

            <div class="cookie-consent-button-container">
                <div class="cookie-consent-button-action {{ $cookieConfig['flip_button'] ? 'flip-button' : '' }}">
                    <button type="button" class="cookie-consent-accept" aria-label="Accept all cookies">
                        {{ $cookieConfig['cookie_accept_btn_text'] }}
                    </button>
                    <button type="button" class="cookie-consent-reject" aria-label="Reject all cookies">
                        {{ $cookieConfig['cookie_reject_btn_text'] }}
                    </button>
                </div>
                @if ($cookieConfig['preferences_modal_enabled'])
                    <button type="button" class="preferences-btn" aria-expanded="false"
                            aria-controls="cookie-preferences-modal">
                        {{ $cookieConfig['cookie_preferences_btn_text'] }}
                    </button>
                @endif
            </div>
        </div>
    </div>

    @if (isset($cookieConfig['policy_links']) && count($cookieConfig['policy_links']) > 0)
        <div class="cookie-consent-links-container">
            <ul class="cookie-consent-links-list">
                @foreach ($cookieConfig['policy_links'] as $policyLinks)
                    <li class="cookie-consent-link-item">
                        <a target="_blank" rel="noopener noreferrer" href="{{ $policyLinks['link'] }}"
                           class="cookie-consent-link">
                            {{ $policyLinks['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
