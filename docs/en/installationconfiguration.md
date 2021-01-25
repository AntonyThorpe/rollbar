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
