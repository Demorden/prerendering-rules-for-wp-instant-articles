# Prerendering Rules for Wordpress Instant Articles
Snippet that allows per-post customization or override of prerendering rules for "WordPress Instant Articles" users.
REQUIRES two plugins: "WordPress Instant Articles" (of course) AND (for now) "Advanced Custom Fields".

I could easily get rid of the latter but it's WAY easier with it.

Both are free anyway. (ACF has a paid option but you won't need it for this)

## Usage
This is just a code snippet really, so the biggest part is made on the two main plugins it relies on.
It assumes you have BOTH ACF and "WordPress Instant Articles" installed and active.

* Create a Field Group in ACF, I called mine "prerendering rules"
  * Add 2 fields, one must be a post object field and the second a true-false one
* Install this plugin
* Now on your posts (depending on the field group settings) you should see a panel asking for instructions on which posts to prerender and a checkbox to check if you want to completely override the rules.
* Now the dirty part: open this plugin file and change the fields names according to the ones you've chosen. (see code comments if in doubt)
  * *or if you don't want to touch any code, you can name your fields just like they are named in the file: "article_prerender" for the post object field, and "override" for the checkbox*
* If you add posts, BUT DO NOT SELECT THE CHECKBOX, the result is that "Wordpress Instant Articles" will ADD your selected posts to the normal list of posts it would prerender (based on the plugin settings)
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

## Thank you
My knowledge and my experience are limited, but I learn quickly, and this kind of simple stuff can't really go wrong; so don't worry, you won't mess your installation. (well... most likely :P )
