# Iframe Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Iframe plugin allows you to embed iframe into your page.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
plugins:
  - iframe
```

## Usage in page content

Display iframe
```
[iframe src="http://flextype.org"]
```

Display iframe with parameters
```
[iframe src="http://flextype.org" width=800 height=600 class="class-name" frameborder="1"]
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/iframe/blob/master/LICENSE)
