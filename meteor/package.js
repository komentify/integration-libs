Package.describe({
  name: 'arkham:komentify',
  version: '0.1.2',
  summary: 'Blaze components for useage of komentify',
  git: 'https://github.com/komentify/integration-libs',
  documentation: './README.md'
})

Npm.depends({
  komentify: '0.1.2'
})

Package.onUse(function(api) {
  api.versionsFrom('1.3.4.4')
  api.use(['ecmascript', 'templating', 'blaze', 'reactive-dict', 'random'])

  api.addFiles('component.html')
  api.mainModule('main.js', 'client')
})
