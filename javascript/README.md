# Javascript integration

The javascript integration is installable over npm

```
npm install --save komentify
```

## How to use

```js
import komentify from 'komentify'

const komentifyInstance = komentify({
  appId: 'myAppId',
  elementId: 'myDivWrapperId'
})

console.log(komentifyInstance.getScriptSnippet())
```

The options that can be specified are:

* __appId__ The App ID that can be found in the komentify backend
* __elementId__ ID of element that should contain the component
* __siteId__ (optional) ID that specifies the current site that is viewed
