export default class URLBuilder {
  path;
  target;
  slug;
  add;

  /**
   *
   * @param {string} target
   * @param {string} slug
   * @param {boolean} add
   */
  constructor(target, slug, add = true) {
    this.path = window.location.pathname;
    this.target = target;
    this.slug = slug;
    this.add = add;
  }

  build() {
    if (this.hasParams()) {
      if (this.add) {
        debugger;
        window.location.pathname = this.injectParams();
      } else {
        this.removeParams();
      }
    } else {
      window.location.pathname = this.appendParams();
    }
  }

  removeParams() {
    const path = this.path.split('/');
    const params = path[path.indexOf(this.target) + 1].split(',');

    if (params.length < 2) {
      delete path[path.indexOf(this.target)];
      delete path[path.indexOf(this.slug)];
    } else {
      delete params[params.indexOf(this.slug)];
      path[path.indexOf(this.target) + 1] = params.filter(Boolean).join(',');
    }


    window.location.pathname = `/${path.filter(Boolean).join('/')}/`;
  }

  injectParams() {
    const path = this.path.split('/');
    const params = path[path.indexOf(this.target) + 1].split(',');
    params.push(this.slug);
    path[path.indexOf(this.target) + 1] = params.join(',');
    return path.join('/');
  }

  /**
   *
   * @returns {string}
   */
  appendParams() {
    const path = this.path.split('/');
    path.splice(path.indexOf('vacatures') + 2, 0, this.target);
    path.splice(path.indexOf(this.target) + 1, 0, this.slug);
    return path.join('/');
  }

  hasParams() {
    return this.path.includes(this.target);
  }
}
