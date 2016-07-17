import komentify from 'komentify'
import { Template } from 'meteor/templating'
import { ReactiveDict } from 'meteor/reactive-dict'
import { Random } from 'meteor/random'

const komentifyDict = new ReactiveDict('komentify')

Template.komentifyComponent.onCreated(function () {
  const data = this.data

  if (!data || !data.appId) {
    throw new Error('appId needs to be set for komentify component to work')
  }

  komentifyDict.set('componentId', Random.id())
})

Template.komentifyComponent.helpers({
  componentId: () => komentifyDict.get('componentId'),
  scriptSourceUrl: () => {
    return komentify(Object.assign({}, {
      elementId: komentifyDict.get('componentId')
    }, Template.instance().data)).getUrl()
  }
})
