#  Tabinikki for WP

## August 2nd, 2013 update

Few changes. I added PT Serif and PT sans as native web fonts for the theme (fallback remains Georgia and Helvetica Neue) through Google Web Fonts and made a few adjustments in the layout (margins, etc.). 

## What is it?

Tabinikki (旅日記) means "Travel Diary" in Japanese. It's a free theme for Wordpress.  

You can see a live demo [here](http://www.matmm.me/tabinikki/demo/).

#### Tabinikki is light and responsive

I made this theme with bloggers and travelers in mind. The layout is really simple and will fit any display. 

#### Tabinikki is PT PT!

This theme only uses 2 typefaces: PT Serif and PT Sans; thanks to Google Fonts. I wish I could have used one of those but "quality ain't free": 

* [FF Meta Serif Web Pro](https://typekit.com/fonts/ff-meta-serif-web-pro)
* [FF Tisa Web Pro](https://typekit.com/fonts/ff-tisa-web-pro)

Or even a modern serif like:

* [Merriweather](http://www.fontsquirrel.com/fonts/merriweather)

For the body text, a sans-serif could do just fine as well but for long posts, I personnally always fancy a beautiful serif ;)

#### Tabinikki is easily cusomizable 

Provided that you're a bit familiar with CSS! I made sure that the PHP files and stylesheet are well commented out so it's easier for novice DIYers like me to customize the theme in less than 10/15 minutes. 

## How to install this? 

#### Set-up
Well, if you already have an hosting platform and Wordpress installed on it: just download Tabinikki and upload the whole folder in wp-content/themes/ then activate it in your Wordpress Admin (Appearence/Themes). Done. 

#### Gravatar
If you want your gravatar to be at a 64x64 pixels like in my demo, open the comment-template.php in wp-include and change the number accordingly somewhere around the line 1421. 

#### Background Image / Color

You don't like the background image under the header area? You want a plain color? Not a problem. Open style.css, find #sideheader, remove the background: url(); declaration (the whole line) and change the background-color: #333 to whatever color you want. 

If you want to put another background-image, just replace 'sideheader-bg.jpg' in the theme folder (_/inc/img) with your own image. Although any image could do and will be stretched to fit the container area, I do recommend to use something around 800Hx300W pixels and a little bit blurry. 

#### WP-Menu
Finally, I used the WP-Menu function in Tabinikki so you're free to customize your navigation menu directly from your Admin Panel (Appearance/Menu). 

## HTML 5 Reset Wordpress Theme

The HTML5 Reset WordPress theme is a blank theme based on the [HTML5 Reset templates](https://github.com/murtaugh/HTML5-Reset). It's a great empty slate upon which to build your own HTML5-based WordPress themes. Used it as a CSS reset, removed the options but kept most of the loops. 

## GNU General Public License

Wordpress.org & https://gnu.org/licenses/gpl.html

## Conditions

You can download this theme for free and tweak it as much as you want. Would appreciate a tweet or a disclaimer mention on your website linking to this Git or my [twitter profile](http://twitter.com/mx3m). But it's really up to you!