import FilterItem from './FilterItem'

export default class Filter {
	#isParam = true;
	target;

	build() {
		if (!this.target) {return;}

		const items = document.querySelectorAll(`[data-param="${this.target}"]`);
		if (!items || items.length === 0) {return;}

		for ( let i = 0; i < items.length; i++ ) {
			new FilterItem(items[i])
				.init();
		}
		return this;
	}

	/**
	 *
	 * @param {string} val
	 */
	setTarget(val) {
		this.target = val;
		return this;
	}

	isUrl() {
		this.#isParam = false;
		return this;
	}

	isParam() {
		this.#isParam = true;
		return this;
	}
}
