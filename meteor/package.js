Package.describe({
  name: 'arkham:komentify',
  version: '0.1.0',
  // Brief, one-line summary of the package.
  summary: 'Blaze components for useage of komentify',
  // URL to the Git repository containing the source code for this package.
  git: 'https://github.com/komentify/integration-libs',
  // By default, Meteor will default to using README.md for documentation.
  // To avoid submitting documentation, set this field to null.
  documentation: './README.md'
})

Npm.depends({
  komentify: '0.1.1'
})

Package.onUse(function(api) {
  api.versionsFrom('1.3.4.4')
  api.use(['ecmascript', 'templating', 'blaze', 'reactive-dict', 'random'])

  api.addFiles('component.html')
  api.mainModule('main.js', 'client')
})
