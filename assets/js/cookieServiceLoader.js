"use strict";

/**
 * @param {Object} cookieCategories - Map of category to { js_action: string }
 */
export function loadCookieCategoriesEnabledServices(cookieCategories = {}) {
  const preferences = getCookiePreferences();
  if (!preferences) return;

  console.log('Loading services based on preferences:', preferences);

  for (const [category, details] of Object.entries(cookieCategories)) {
    if (!details.js_action) continue;

    const slug = category.toLowerCase().replace(/\s+/g, '-');
    try {
      if (preferences?.[slug]) {
        const action = details.js_action;
        if (typeof window[action] === 'function') {
          window[action]();
        } else {
          console.info(`Action "${action}" not found on window.`);
        }
      }
    } catch (exception) {
      console.info(`Error invoking ${details.js_action}:`, exception);
    }
  }
}

