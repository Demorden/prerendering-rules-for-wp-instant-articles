# Prerendering Rules by Max (Demorden)
Snippet that allows per-post customization or override of prerendering rules for "WordPress Instant Articles" users.
REQUIRES two plugins: "WordPress Instant Articles" (of course) AND (for now) "Advanced Custom Fields".

I could easily get rid of the latter but it's WAY easier with it.

Both are free anyway. (ACF has a paid option but you won't need it for this)

## Usage
This is just a code snippet really, so the biggest part is made on the two main plugins it relies on.

* Create a Field Group in ACF, I called mine "prerendering rules"
*   Add 2 fields, one must be a post object field and the second a true-false one
* Install this plugin
* Now on your posts (depending on the field group settings) you should see a panel asking for instructions on which posts to prerender and a checkbox to check if you want to completely override the rules.
*   If you add posts, BUT DO NOT SELECT THE CHECKBOX, the result is that "Wordpress Instant Articles" will ADD your selected posts to the normal list of posts it would prerender (based on the plugin settings)
*   If you add posts, AND YOU SELECT THE CHECKBOX, the result is that "Wordpress Instant Articles" will TOTALLY IGNORE its default rules, and instead it will prerender ONLY the posts you selected

## A final warning
"Wordpress Instant Articles" is quite a useful plugin, and it can really help with perceived site speed.
But you shouldn't abuse its features: prerendering and/or prefetching too much could increase your pages weight.

Also, consider that this small plugin is just a way to use ACF to customize Wordpress Instant Articles behaviour.
So if you have any issue with this setting, it's -most likely- an issue with either of the two above plugins.
I can't really provide assistance.

## Links
**Wordpress Instant Articles** https://wordpress.org/plugins/instant-articles/

**Advanced Custom Fields** https://wordpress.org/plugins/advanced-custom-fields/

**Discussion with the WP Instant Articles dev** https://wordpress.org/support/topic/per-page-prerendering-options-suggestion
