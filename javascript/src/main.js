const baseUrl = 'http://www.komentify.io/api/embed'

module.exports = function (config) {
  if (!config || !config.elementId || !config.appId) {
    throw new Error('Configuration needs to have appId and elementId set');
  }

  const appId = config.appId
  const elementId = config.elementId

  return {
    getUrl() {
      var url = `${baseUrl}?appId=${appId}&selectorId=${elementId}`

      if (config.siteId) {
        url += '&siteId=' + config.siteId
      }

      return url
    },
    getScriptSnippet() {
      return `<script src="${this.getUrl()}"></script>`
    }
  }
};
