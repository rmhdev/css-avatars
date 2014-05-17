# css-avatars

Minimalistic avatars based on css. Choose a color number, a letter and you have an avatar.

Possible combinations: `216` colors * `26` letters: `5616`

## How to use

```
<i class="avatar avatar-color-12 avatar-letter-r"></i>
```

- `avatar`: base class
- `avatar-color-X`: web-safe color, from `0` to `215`. Know more about [web-safe colors][]
- `avatar-letter-Y`: letter, from `a` to `z`
- `avatar-Z`: (optional) size: `sm`, `md`, `lg`

## Examples

![Avatar examples](docs/avatars-example.png)

## Code

I started this project with some goals in mind:

- Play with [Less][]
- Learn more about CSS + fonts.

### Change log

* `0.0.1` (May 18, 2014): initial release.

## Copyright and license

Code and documentation copyright 2014 Rober Martín.
Code released under [the MIT license](LICENSE).
Docs released under [Creative Commons CC BY 4.0][].

This project is inspired in Gmail's default avatars. CSS is based on [Glyphicons] awesome work.
I started working on this projects after reading [Switch from Gravatar to HTML/CSS letters for no-avatar users][].

## Author

My name is [Rober Martín][] ([@rmhdev][]). I'm a developer from Donostia / San Sebastián.

[Less]: http://lesscss.org/
[web-safe colors]: http://en.wikipedia.org/wiki/Web_colors#Web-safe_colors
[Creative Commons CC BY 4.0]: http://creativecommons.org/licenses/by/4.0/
[Glyphicons]: http://glyphicons.com/
[Switch from Gravatar to HTML/CSS letters for no-avatar users]: https://meta.discourse.org/t/switch-from-gravatar-to-html-css-letters-for-no-avatar-users/15336
[Rober Martín]: http://rmhdev.net/
[@rmhdev]: http://twitter.com/rmhdev
