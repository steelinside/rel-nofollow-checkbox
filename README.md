# Fancy Links

This plugin allows you to add new class to your links in Wordpress Visual Editor.

Compatible with **WordPress v4.0.1**.


## Screenshots

![Screenshot 1](source/screenshot-1.png)


## Installation

1. Download the latest zip file and extract the `fancy-links` directory.
2. Upload it to your `/wp-content/plugins/` directory.
3. Activate `Fancy Links` on the `Plugins` menu in WordPress.
4. Add some code to your theme stylesheet (style.css)

## Usage

Add .fancy-link class to your style.css. It may look like this:

```css
.fancy-link{
  color: #9D4100;
  background-color: #FAD000;
  padding: 2px 5px;
  text-decoration: underline;
  }```

Or however you want.

When you ready to add a link in Visual editor check the checkbox below link address and title. Check html of your post, and you'll see that your link now looks like this: `<a class = "fancy-link" href = "http://yoursite.com" title = "yourlink name">Your cute link</a>`. That's it.

If you'll need some other checkboxes, than dig inside wplink.js file.

## License

Original copyright (c) 2014 [Fábio Santos](http://www.fabiosantos.pt). See the LICENSE
file for license rights and limitations (GPLv2).

Overbuild by [Kirill Belotserkovskiy] (http://steelinside.com).
