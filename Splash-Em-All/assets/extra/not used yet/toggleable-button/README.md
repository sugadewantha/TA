Toggleable-button JS Library
=============
[![Build Status](https://api.travis-ci.org/ashepherd89/toggleable-button.js.png)](https://travis-ci.org/ashepherd89/toggleable-button.js)

This is a simple JavaScript library that replaces checkbox type input elements with a toggleable button.

Using this library is simple.  Just include the distribution JavaScript and CSS files in the head of your
HTML page.  Place the class "toggleable-button" within any checkbox type input that you wish to become a
toggleable button.

[Demo](http://ashepherd89.github.io/toggleable-button.js/examples/)

## Usage ##

This is a modular library, and you will have to initialize the library after the web page has finished loading like so:
```html
<script type="text/javascript">
  BoxKite.ToggleableButton.init();
</script>
```
For each checkbox that you want to become a toggleable button, set its class attribute as 'toggleable-button'.

```html
<input class="toggleable-button" type="checkbox" />
```

### Size variants ###

Furthermore the toggleable button currently comes in three different sizes: normal, 2x, and 3x.

You must specify an additional class to the input element to change the size of the toggleable button; however, you do not
need to specify an additional class for a normal sized button.

For a button that is 2x larger, specify 'tb-2x':

```html
<input class="toggleable-button tb-2x" type="checkbox" />
```

For a button that is 3x larger, specify 'tb-3x':

```html
<input class="toggleable-button tb-3x" type="checkbox" />
```

### Init options ###

You may now pass a JSON object as a parameter to the init method, and the following options are available:

- onStateValue
- offStateValue

Example:
```html
<script type="text/javascript">
BoxKite.ToggleableButton.init({
  onStateValue  : "ja",
  offStateValue : "nein"
});
</script>
```