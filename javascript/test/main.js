import test from 'ava'
import komentify from '../src/main.js'

test('invalid configuration', t => {
  t.throws(() => komentify())
})

test('simple configuration', t => {
  const komentifyInstance = komentify({
    appId: 'myAppId',
    elementId: 'myDivWrapperId'
  })

  t.is(
    komentifyInstance.getUrl(),
    'http://www.komentify.io/api/embed?appId=myAppId&selectorId=myDivWrapperId'
  )
  t.is(
    komentifyInstance.getScriptSnippet(),
    '<script src="http://www.komentify.io/api/embed?appId=myAppId&selectorId=myDivWrapperId"></script>'
  )
})

test('siteId configuration', t => {
  const komentifyInstance = komentify({
    appId: 'myAppId',
    elementId: 'myDivWrapperId2',
    siteId: 'my-site'
  })

  t.is(
    komentifyInstance.getUrl(),
    'http://www.komentify.io/api/embed?appId=myAppId&selectorId=myDivWrapperId2&siteId=my-site'
  )
  t.is(
    komentifyInstance.getScriptSnippet(),
    '<script src="http://www.komentify.io/api/embed?appId=myAppId&selectorId=myDivWrapperId2&siteId=my-site"></script>'
  )
})
