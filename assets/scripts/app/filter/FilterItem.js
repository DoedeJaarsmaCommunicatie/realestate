import URLBuilder from './URLBuilder';

export default class FilterItem {
  element;
  /**
   * @param {HTMLInputElement} checkbox
   */
  checkbox;
  /**
   *
   * @param {HTMLInputElement} el
   */
  constructor(el) {
    this.element = el;
  }

  init() {
    this.element.addEventListener('input', e => {
      if (e.target.checked) {
        this.selectEvent(e);
      } else {
        this.deSelectEvent(e);
      }
    });
  }

  selectEvent(e) {
    const el = e.target;
    new URLBuilder(el.dataset.param, el.dataset.slug, true)
        .build();
  }

  deSelectEvent(e) {
    const el = e.target;
    new URLBuilder(el.dataset.param, el.dataset.slug, false)
        .build();
  }
}
