# CSS avatars

Minimalistic avatars based on css. Color + letter = visual identification.

![Avatar letter C](docs/avatar-letter-c.png)

Possible combinations: `216` colors * `26` letters * `2` versions (default, inverted): `11232`

## Installation

Two options are available:

- Download the [latest release][].
- Clone the repo:`git clone https://github.com/rmhdev/css-avatars.git`


## How to use

```
<i class="avatar avatar-color-95 avatar-letter-c"></i>
```

- `avatar`: base class
- `avatar-color-*`: color number, from `0` to `215`. Read more about [web-safe colors][]
- `avatar-letter-*`: (optional) letter, from `a` to `z`
- `avatar-*`: (optional) size: `sm`, `md`, `lg`
- `avatar-inverse`: (optional) inverted colors
- `avatar-plain`: (optional) remove text shadow

You can also create avatars with special letters.
Just don't use the `avatar-letter-*` class and write the letter in the tag.

```
<i class="avatar avatar-color-201">ü</i>
```

## Examples

View an [online demo][]. There's a [raw demo][] with all the colors and sizes.

![Avatar examples](docs/avatars-example.png)

## Code

I started this project with some goals in mind:

- Play with [Less][]
- Learn more about CSS + fonts.

### Change log

* `0.0.1` (May 18, 2014): initial release.
* `0.1.0` (May 18, 2014): added inverse mode.
* `0.2.0` (May 18, 2014): letter class is optional (for adding special characters).
* `0.3.0` (May 25, 2014): add text shadow (enhance readability). Files with consistent naming.

## Copyright and license

Code and documentation copyright 2014 Rober Martín.
Code released under [MIT license](LICENSE).
Docs released under [Creative Commons CC BY 4.0][].

This project is inspired in default avatars used in Google's Gmail Android App.
CSS is based on [Glyphicons][] (awesome project!).
I started working on this project after reading [Switch from Gravatar to HTML/CSS letters for no-avatar users][].

## Author

My name is [Rober Martín][] ([@rmhdev][]). I'm a developer from Donostia / San Sebastián.

[latest release]: https://github.com/rmhdev/css-avatars/releases/latest
[Less]: http://lesscss.org/
[web-safe colors]: http://en.wikipedia.org/wiki/Web_colors#Web-safe_colors
[online demo]: http://css-avatars.rmhdev.net/
[raw demo]: http://css-avatars.rmhdev.net/raw.html
[Creative Commons CC BY 4.0]: http://creativecommons.org/licenses/by/4.0/
[Glyphicons]: http://glyphicons.com/
[Switch from Gravatar to HTML/CSS letters for no-avatar users]:
  https://meta.discourse.org/t/switch-from-gravatar-to-html-css-letters-for-no-avatar-users/15336
[Rober Martín]: http://rmhdev.net/
[@rmhdev]: http://twitter.com/rmhdev
