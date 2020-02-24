import Filter from '../app/filter/Filter';

export default {
  init() {
    // Javascript that fires on all pages.
  },

  finalize() {
    // Javascript that fires on all pages. after page specific JS is fires.
    VakgebiedFilter();
    OrganisationFilter();
    RegionFilter();
  },
};

const VakgebiedFilter = () => {
  new Filter()
    .setTarget('vakgebied')
    .isUrl()
    .build();
};

const OrganisationFilter = () => {
  new Filter()
    .setTarget('organisatie')
    .isUrl()
    .build();
};

const RegionFilter = () => {
  new Filter()
    .setTarget('regio')
    .isUrl()
    .build();
};
