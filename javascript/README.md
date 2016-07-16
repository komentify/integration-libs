# Javascript Integration

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

console.log(komentifyInstance.getScript())
```
