## Installation
* Register for Rollbar at [rollbar.com](https://rollbar.com/)
* Obtain the client Token
* In a terminal:
`composer require antonythorpe/rollbar`

## Configuration
* Create `rollbar.yml` and save under `app/_config` folder:
```yml
---
Name: rollbar
After: rollbar-extensions
---
AntonyThorpe\Rollbar\Rollbar:
  client_token: test
  show_on_dev: true  # default is false
  show_on_test: true # default is false
---
Only:
  environment: live
---
AntonyThorpe\Rollbar\Rollbar:
  client_token: XXXXXXXXXXXXXX
---
```
* Add `<% include Rollbar %>` to Page.ss within the head element before any other javascript loads.
* dev/build

You can turn Rollbar off completely:
```yml
AntonyThorpe\Rollbar\Rollbar:
  show: false
```
