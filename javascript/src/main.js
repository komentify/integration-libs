module.exports = function (config) {
  if (!config || !config.elementId || !config.appId) {
    throw new Error('Configuration needs to have appId and elementId set');
  }

  const appId = config.appId
  const elementId = config.elementId

  return {
    getUrl() {
      return `http://www.komentify.io/api/embed?appId=${appId}&selectorId=${elementId}`
    },
    getScript() {
      return `<script src="${this.getUrl()}"></script>`
    }
  }
};
