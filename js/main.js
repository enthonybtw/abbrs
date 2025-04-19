class AbbrsConfig {
  static MP_ABBRS_WRAPPER = "#new-abbrs-wrapper";
  static MP_ABBRS_COUNT_WRAPPER = "#abbrs-count-wrapper";
}

class AbbrsRender {
  static RenderMainTableItem(
    id,
    name,
    description,
    translation,
    wrapper = AbbrsConfig.MP_ABBRS_WRAPPER
  ) {
    jQuery(wrapper).append(`
      <div class="item" abbrs-id=${id}>
        <h2 class="name">${String(name).toUpperCase()}</h2>
        <h3 class="spacer">—</h3>
        <div class="about">
          <h3 class="desc">${description}</h3>
          <p class="translation">${translation}</p>
        </div>
      </div>
    `);
  }

  static RenderAbbrsCount(count, wrapper = AbbrsConfig.MP_ABBRS_COUNT_WRAPPER) {
    jQuery(wrapper).html(count);
  }
}

class MainBlock {
  constructor() {
    this.onClassInit();
  }

  onClassInit(api = AbbrsApi, render = AbbrsRender) {
    const AbbrsCount = api.GetAbbrsCount();
    render.RenderAbbrsCount(AbbrsCount);
    console.log(AbbrsCount);

    const NewAbbrs = api.GetNewAbbrs();
    NewAbbrs.forEach((row) => {
      render.RenderMainTableItem(row.id, row.name, row.value, row.translation);
    });
  }
}

new MainBlock();

jQuery(AbbrsConfig.MP_ABBRS_WRAPPER).on("click", ".item", function () {
  location.replace(`/card.php?id=${jQuery(this).attr("abbrs-id")}`);
});
